<?php

require_once "../models/leads_model.php";

$data = file_get_contents("php://input");
$request = json_decode($data);
$idLead = $request->idLead;
$idProperty = $request->idProperty;

$model = new Leads_Model();

$response = '"status": 1';

$resultUdateProperty = $model->update('inmovables', 'idPropertyStatus', 2, 'idProperty', $idProperty, 'ii');
if (!is_null($resultUdateProperty)) {
	$resultUdateLeadsInmovables = $model->insertAB('leads_inmovables', 'idLead', $idLead, 'idProperty', $idProperty, 'ii');
	if (!is_null($resultUdateLeadsInmovables)) {
		$response = '"status": 0';
	} else {
		$response = '"status": 3';
	}
} else {
	$response = '"status": 2';
}

echo '{'.$response.'}';

?>