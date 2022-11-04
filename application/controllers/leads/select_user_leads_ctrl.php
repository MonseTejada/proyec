<?php

require_once 'select_leads_ctrl.php';

$leadsCtrl = new SelectLeadsCtrl();

$response = '{"status": -2}';

session_start();

if (isset($_SESSION['idUser'])) {

	$data = file_get_contents("php://input");
	$requestData = json_decode($data, true);

	$activeLeads = $leadsCtrl->getLeadsByUser($requestData['idUser'], $requestData['status'], $requestData['page']);

	if (!is_null($activeLeads)) {
		$response = '{"status": 1, "result": '.json_encode($activeLeads).'}';
	} else {
		$response = '{"status": -1}';
	}

} else {
	$response = '{"status": 0}';
}

echo $response;

?>