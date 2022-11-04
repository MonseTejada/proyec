<?php

define('ZOHO_CLIENT_ID', '1000.6VRHJKGRKBH5302BFI8R76BWZZPXNH');
define('ZOHO_CLIENT_SECRET', 'ca76cd3cc460ca06f8ac8682891ad31fbf7dd37b90');
define('ZOHO_REFRESH_TOKEN', '1000.9ac37ec509ec526a9c9444ca3281ab8e.93e196256155c5e7dbf662302d2d9e8e');

require_once '../models/model.php';
$model = new Model();

$response = [];
$curl_handle = curl_init();
					
$postFieldsAccessTokenRequest =
    'refresh_token='.ZOHO_REFRESH_TOKEN.'&'.
    'client_id='.ZOHO_CLIENT_ID.'&'.
    'client_secret='.ZOHO_CLIENT_SECRET.'&'.
    'grant_type=refresh_token';

$accessTokenUrl = 'https://accounts.zoho.com/oauth/v2/token';

curl_setopt_array($curl_handle, [
    CURLOPT_URL => $accessTokenUrl,
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

    $insertContactsUrl = 'https://www.zohoapis.com/crm/v2/Inventario?page=10&per_page=200';

    curl_setopt_array($curl_handle, [
        CURLOPT_URL => $insertContactsUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => [
            'Authorization: Zoho-oauthtoken '.$accessTokenResultJSON->access_token
        ]
    ]);

    $result = json_decode(curl_exec($curl_handle));
    $resultLen = count($result->data);
    for ( $i = 0 ; $i < $resultLen ; $i++ ) {
        $updateResponse = $model->update('inmovables', 'zoho_id', $result->data[$i]->id, 'reference', $result->data[$i]->Name, 'ss');
        array_push($response, [$result->data[$i]->Name, $updateResponse, $result->data[$i]->id]); 
    }
}

curl_close ($curl_handle);

echo json_encode($response);

?>