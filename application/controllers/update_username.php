<?php

session_start();

require_once '../models/users_model.php';
$model = new Users_Model();

$statusResponse = -2;
$response;
if (isset($_SESSION['idUser'])) {

  $data = file_get_contents("php://input");
  $request = json_decode($data);

  $checkUsernameResponse = $model->selectBy('idUser', 'users', 'username', $request->username, 's');
  if (is_null($checkUsernameResponse)) {
    $updateUsernameResponse = $model->update('users', 'username', $request->username, 'idUser', $request->idUser, 'si');
    $statusResponse = (!is_null($updateUsernameResponse)) ? 1 : -1;
  } else {
    $statusResponse = 0;
  }

  $response ='{"status": '.$statusResponse.', "errorReport": '.json_encode($model->errorReport).'}';

} else {
	$model->destroySession();
	$response ='{"status": '.$statusResponse.'}';
}

echo $response;

?>