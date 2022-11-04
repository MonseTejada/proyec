<?php

require_once 'leads.php';

$leads = new Leads();

$response = '{"status": 503}';

session_start();

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
	$params = json_decode($data, true);

	$result = $leads->getLeadsByIdUser($params['idUser'], $params['status'], $params['page'], $params['limit']);

	if (!is_null($result)) {
		$response = '{"status": 200, "result": '.json_encode($result).'}';
	} else {
		$response = '{"status": 204}';
	}

} else {
	$response = '{"status": 511}';
}

echo $response;

?>