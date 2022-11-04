<?php

session_start();

require_once "../models/users_model.php";

$model = new Users_Model();

$model->aaaa();

$response = '{"status": 1}';

if (isset($_SESSION['idUser'])) {
	
	$data = file_get_contents("php://input");
	$requestData = json_decode($data, true);
	$requestParams = array(
		'table' => $requestData['table'],
		'field' => $requestData['field'],
		'where' => $requestData['where'],
		'value' => $requestData['value'],
		'type' => $requestData['type']
	);

	$selectResponse = $model->selectBy($requestParams['field'], $requestParams['table'], $requestParams['where'], $requestParams['value'], $requestParams['type']);

	if (!is_null($selectResponse)) {
		$response = '{"status": 1, "value": "'.$selectResponse[0][$requestParams['field']].'"}';
	} else {
		$response = '{"status": -1}';
	}

} else {

	$model->destroySession();
	$response = '{"status": 0}';

}

echo $response;

?>
