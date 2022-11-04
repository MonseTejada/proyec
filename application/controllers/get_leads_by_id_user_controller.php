<?php

session_start();

require_once "../models/leads_model.php";

$data = file_get_contents("php://input");
$request = json_decode($data);
$idUser = $request->idUser;

$model = new Leads_Model();

$response = '{"status": 1}';

if (isset($_SESSION['idUser'])) {
	$leadsResult = $model->getLeadsByIdUser($idUser);
	if (!is_null($leadsResult)) {
		$response = '{"status": 0, "leads": ['.$leadsResult.']}';
	} else {
		$response = '{"status": 2}';
	}
} else {
	$this->destroySession();
	$response = '{"status": 3}';
}

echo $response;

?>
