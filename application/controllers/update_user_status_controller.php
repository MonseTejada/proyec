<?php

require_once "../models/users_model.php";

$data = file_get_contents("php://input");
$request = json_decode($data);

$model = new Users_Model();

$response = '{"status": 1}';

$resultUpdateStatus = $model->update('users', 'status', $request->status, 'idUser', $request->idUser, 'ii');

if (!is_null($resultUpdateStatus)) {

	$selectUserDataResponse = $model->selectBy('idEmail, idPhone', 'users', 'idUser', $request->idUser, 'i');

	if (!is_null($selectUserDataResponse)) {

		$model->update('emails', 'status', $request->status, 'idEmail', $selectUserDataResponse[0]['idEmail'], 'ii');
		$model->update('phones', 'status', $request->status, 'idPhone', $selectUserDataResponse[0]['idPhone'], 'ii');

	}

	$response = '{"status": 0}';

}

echo $response;

?>
