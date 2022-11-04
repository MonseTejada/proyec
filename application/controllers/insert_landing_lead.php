<?php

define('ZOHO_CLIENT_ID', '1000.6VRHJKGRKBH5302BFI8R76BWZZPXNH');
define('ZOHO_CLIENT_SECRET', 'ca76cd3cc460ca06f8ac8682891ad31fbf7dd37b90');
define('ZOHO_REFRESH_TOKEN', '1000.9ac37ec509ec526a9c9444ca3281ab8e.93e196256155c5e7dbf662302d2d9e8e');

session_start();

require_once '../models/leads_model.php';
$model = new Leads_Model();

$statusResponse = -8;
$response;

$data = file_get_contents("php://input");
$request = json_decode($data);
$leadData = array(
    'name' => $request->name,
    'last_name' => $request->last_name,
    'email' => $request->email,
    'domain' => $request->domain,
    'phone' => $request->phone
);

$checkEmailResponse = $model->checkEmail($leadData['email'], $leadData['domain']);
if ($checkEmailResponse >= 0) {

    $checkPhoneResponse = $model->checkPhone($leadData['phone']);
    if ($checkPhoneResponse > 0) {

        $insertEmailResponse = $model->insertEmail($leadData['email'], $leadData['domain'], $checkEmailResponse, 2, 0);
        if ($insertEmailResponse > 0) {

            $insertLeadResponse = $model->insertLead($leadData['name'], $leadData['last_name'], $insertEmailResponse, 188, 1, $request->idMedium);
            if ($insertLeadResponse > 0) {

                $statusResponse = 1;

                $insertPhoneResponse = $model->insertPhone($leadData['phone'], 1, 2, 2, 0);
                if ($insertPhoneResponse > 0) {
                    $updateLeadPhoneResponse = $model->update('leads', 'idPhone', $insertPhoneResponse, 'idLead', $insertLeadResponse, 'ii');
                    $statusResponse = (!is_null($updateLeadPhoneResponse)) ? 2 : -5;
                } else {
                    $statusResponse = -4;
                }

                $curl_handle = curl_init();
					
				$postFieldsAccessTokenRequest =
					'refresh_token='.ZOHO_REFRESH_TOKEN.'&'.
					'client_id='.ZOHO_CLIENT_ID.'&'.
					'client_secret='.ZOHO_CLIENT_SECRET.'&'.
					'grant_type=refresh_token';

				$accessTokenUrl = 'https://accounts.zoho.com/oauth/v2/token';

				curl_setopt_array($curl_handle, [
					CURLOPT_URL => $accessTokenUrl ,
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_CUSTOMREQUEST => 'POST',
					CURLOPT_POSTFIELDS => $postFieldsAccessTokenRequest,
					CURLOPT_HTTPHEADER => [
						'cache-control: no-cache',
						'Content-Type: application/x-www-form-urlencoded'
					]
				]);

				$accessTokenResult = curl_exec($curl_handle);

				$accessTokenResultJSON = json_decode($accessTokenResult);

				if (isset($accessTokenResultJSON->access_token)) {

					$insertContactsUrl = 'https://www.zohoapis.com/crm/v2/Contacts';

					$medium = $model->selectBy('medium', 'contact_media', 'idMedium', $request->idMedium, 'i');

					$postFieldsInsertContacts = '{
						"data": [
							{
								"First_Name": "'.$request->name.'",
								"Email": "'.$request->email.'@'.$request->domain.'",
								"Last_Name": "'.$request->last_name.'",
								"Mobile": "'.$request->phone.'",
								"Fuente_de_Lead": "'.$medium[0]['medium'].'",
								"Estatus": "Por Contactar",
								"Asesor2": "Google Ads Landing"
							}
						],
						"trigger": [
							"approval",
							"workflow",
							"blueprint"
						]
					}';

					curl_setopt_array($curl_handle, [
						CURLOPT_URL => $insertContactsUrl ,
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_CUSTOMREQUEST => 'POST',
						CURLOPT_POSTFIELDS => $postFieldsInsertContacts,
						CURLOPT_HTTPHEADER => [
							'Authorization: Zoho-oauthtoken '.$accessTokenResultJSON->access_token
						]
					]);

					$result = curl_exec($curl_handle);
				}

				curl_close ($curl_handle);

            } else {
                $statusResponse = -3;
            }
        } else {
            $statusResponse = -2;
        }
    } else {
        $statusResponse = -1;
    }
} else {
    $statusResponse = 0;
}

$response ='{"status": '.$statusResponse.', "errorReport": '.json_encode($model->errorReport).'}';

echo $response;

?>