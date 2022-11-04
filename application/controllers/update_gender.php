<?php

session_start();

require_once '../models/users_model.php';
$model = new Users_Model();

$statusResponse = -1;
$response;
if (isset($_SESSION['idUser'])) {

  $data = file_get_contents("php://input");
  $request = json_decode($data);

  $updateGenderResponse = $model->update('users', 'idGender', $request->idGender, 'idUser', $request->idUser, 'ii');
  $statusResponse = (!is_null($updateGenderResponse)) ? 1 : 0;

  $response ='{"status": '.$statusResponse.', "errorReport": '.json_encode($model->errorReport).'}';

} else {
	$model->destroySession();
	$response ='{"status": '.$statusResponse.'}';
}

echo $response;

?>