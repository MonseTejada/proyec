<?php

session_start();

require_once "../models/leads_model.php";
$model = new Leads_Model();

$statusResponse = -13;

if (isset($_SESSION['idUser'])) {

	$data = file_get_contents("php://input");
	$request = json_decode($data);
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
		$selectPhoneResponse = $model->selectBy('idPhone', 'phones', 'phone', $leadData['phone'], 's');
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

		$selectAddressResponse = $model->selectBy('*', 'leads', 'idLead', $leadData['idLead'], 'i');
		if (!isset($selectAddressResponse[0]['idAddress'])) {
			$insertAddressResponse = $model->insertABC('addresses', 'address', $leadData['address'], 'idCountryCode', 1, 'idAddressType', 2, 'sii');
			if (!is_null($insertAddressResponse)) {
				$updateLeadAddressResponse = $model->update('leads', 'idAddress', $insertAddressResponse, 'idLead', $leadData['idLead'], 'ii');
				$statusResponse = (is_null($updateLeadAddressResponse)) ? -8 : 8;
			} else {
				$statusResponse = -7;
			}
		} else {
			$updateAddressResponse = $model->update('addresses', 'address', $leadData['address'], 'idAddress', $leadData['idAddress'], 'si');
			$statusResponse = (is_null($updateAddressResponse)) ? -6 : 6;
		}

		if ($checkPhone > 0) {
			$selectPhoneResponse = $model->selectBy('idPhone', 'leads', 'idLead', $leadData['idLead'], 'i');
			if (is_null($selectPhoneResponse)) {
				$insertPhoneResponse = $model->insertAB('phones', 'phone', $leadData['phone'], 'idPhoneType', 2, 'idCountryType', 1, 'sii');
				if (!is_null($insertPhoneResponse)) {
					$updateLeadPhoneResponse = $model->update('leads', 'idPhone', $insertPhoneResponse, 'idLead', $leadData['idLead'], 'ii');
					$statusResponse = (is_null($updateLeadPhoneResponse)) ? -11 : 11;
				} else {
					$statusResponse = -10;
				}
			} else {
				$updatePhoneResponse = $model->update('phones', 'phone', $leadData['phone'], 'idPhone', $leadData['idPhone'], 'si');
				$statusResponse = (is_null($updatePhoneResponse)) ? -9 : 9;
			}
		}
	} else {
		$statusResponse = -1;
	}

} else {
	$statusResponse = -12;
	$model->destroySession();
}

echo '{"result": '.$statusResponse.'}';

?>