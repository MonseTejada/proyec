<?php

require_once "../models/leads_model.php";

$data = file_get_contents("php://input");
$request = json_decode($data);
$idLead = $request->idLead;
$status = $request->status;

$model = new Leads_Model();

$response = '{"status": 1}';

$resultUpdateStatus = $model->update('leads', 'status', $status, 'idLead', $idLead, 'ii');

if (!is_null($resultUpdateStatus)) {

	$selectLeadDataResponse = $model->selectBy('idEmail, idPhone', 'leads', 'idLead', $idLead, 'i');

	if (!is_null($selectLeadDataResponse)) {

		$model->update('emails', 'status', $status, 'idEmail', $selectLeadDataResponse[0]['idEmail'], 'ii');
		$model->update('phones', 'status', $status, 'idPhone', $selectLeadDataResponse[0]['idPhone'], 'ii');

	}

	$response = '{"status": 0}';

}

echo $response;

?>