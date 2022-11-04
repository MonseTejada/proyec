<?php

require_once 'users.php';

$users = new Users();

$response = '{"status": 503}';

session_start();

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
	$params = json_decode($data, true);

	$result = $users->getFreeUsersByProfile($params['idProfile'], $params['status'], $params['page'], $params['limit']);

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