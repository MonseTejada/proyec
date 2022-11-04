<?php

require_once 'select_leads_ctrl.php';

$leadsCtrl = new SelectLeadsCtrl();

$response = '{"status": -2}';

session_start();

if (isset($_SESSION['idUser'])) {

	// $leadsQuery = 'SELECT idLead, name, last_name, idEmail, idPhone, idUser, idGender, idMedium, idAddress FROM leads WHERE status = ?';
	// $countLeadsQuery = 'SELECT idLead FROM leads WHERE status = ?';
	// $limit = 500;

	// $start = ($requestData['currentPage'] - 1) * $limit;

	// $leadsQuery .= $start.', '.$limit;

	// $leadsConfig = [
	// 	'numFields' => 9,
	// 	'params' => [
	// 		$requestData['status']
	// 	],
	// 	'types' => 'i'
	// ];

	// $countConfig = [
	// 	'numFields' => 1,
	// 	'params' => [
	// 		$requestData['status']
	// 	],
	// 	'types' => 'i'
	// ];

	// $countResponse = $leadsCtrl->selectBy($countLeadsQuery, $countConfig);
	$activeLeads = $leadsCtrl->selectLeadsByStatus(1);

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