<?php

session_start();

require_once "../models/leads_model.php";
$model = new Leads_Model();

$response = '{"status": 0}';
if (isset($_SESSION['idUser'])) {

	$leadsResult = $model->getLeadsByIdUser($_SESSION['idUser']);
	if (!is_null($leadsResult)) {

		$selectContactMediaReult = $model->selectFrom('*', 'contact_media');
		$response = '{"status": 1, "leads": ['.$leadsResult.'], "media": '.json_encode($selectContactMediaReult).'}';
	} else {
		$response = '{"status": -1}';
	}
} else {
	$model->destroySession();
	$response = '{"status": -2}';
}

echo $response;

?>
