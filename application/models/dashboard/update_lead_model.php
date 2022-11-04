<?php

$statusResponse = -1;

session_start();

if (isset($_SESSION['idUser'])) {

	require_once "../models/leads_model.php";

	$model = new Leads_Model();

	$leadData = array(
		'idLead' => $request->idLead,
		'name' => $request->name,
		'last_name' => $request->last_name,
		'idGender' => $request->idGender,
		'phone' => $request->phone,
		'idPhone' => $request->idPhone,
		'idMedium' => $request->idMedium,
		'idAddress' => $request->idAddress,
		'address' => $request->address
	);

	$checkPhone = 0;

	if (!empty($leadData['phone'])) {
		$selectPhoneResponse = selectBy('idPhone', 'phones', 'phone', $leadData['phone'], 's');
		$checkPhone = (is_null($selectPhoneResponse)) ? 1 : -1;
	}

	if ($checkPhone >= 0) {
		$updateNameResponse = $model->update('leads', 'name', $leadData['name'], 'idLead', $leadData['idLead'], 'si');
		$statusResponse = (is_null($updateNameResponse)) ? -2 : 2;
		$updateLastNameResponse = $model->update('leads', 'last_name', $leadData['last_name'], 'idLead', $leadData['idLead'], 'si');
		$statusResponse = (is_null($updateLastNameResponse)) ? -3 : 3;
		$updateGenderResponse = $model->update('leads', 'idGender', $leadData['idGender'], 'idLead', $leadData['idLead'], 'ii');
		$statusResponse = (is_null($updateGenderResponse)) ? -4 : 4;
		$updateMediumResponse = $model->update('leads', 'idMedium', $leadData['idMedium'], 'idLead', $leadData['idLead'], 'ii');
		$statusResponse = (is_null($updateMediumResponse)) ? -5 : 5;
		$updateAddressResponse = $model->update('addresses', 'address', $leadData['address'], 'idAddress', $leadData['idAddress'], 'si');
		$statusResponse = (is_null($updateAddressResponse)) ? -6 : 6;

		if ($checkPhone > 0) {
			$selectPhoneResponse = selectBy('idPhone', 'leads', 'idLead', $leadData['idLead'], 'i');
			if (is_null($selectPhoneResponse)) {
				$insertPhoneResponse = insert('phones', 'phone', $leadData['phone'], 's');
				if (!is_null($insertPhoneResponse)) {
					$updateLeadPhoneResponse = $model->update('leads', 'idPhone', $insertPhoneResponse, 'idLead', $leadData['idLead'], 'ii');
					$statusResponse = (is_null($updateLeadPhoneResponse)) ? -8 : 8;
				} else {
					$statusResponse = -9;
				}
			} else {
				$updatePhoneResponse = $model->update('phones', 'phone', $leadData['phone'], 'idPhone', $leadData['idPhone'], 'si');
				$statusResponse = (is_null($updatePhoneResponse)) ? -7 : 7;
			}
		}
	}

}

$response ='{"status": '.$statusResponse.'}';

echo $response;

?>