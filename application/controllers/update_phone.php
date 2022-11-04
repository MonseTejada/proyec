<?php

session_start();

require_once '../models/users_model.php';
$model = new Users_Model();

$statusResponse = -2;
$response = '';
if (isset($_SESSION['idUser'])) {

  $data = file_get_contents("php://input");
  $request = json_decode($data);

  $checkPhoneResponse = $model->selectBy('idPhone', 'phones', 'phone', $request->phone, 's');
  if (is_null($checkPhoneResponse)) {
    $updatePhoneResponse = $model->update('phones', 'phone', $request->phone, 'idPhone', $request->idPhone, 'si');
    $statusResponse = (!is_null($updatePhoneResponse)) ? 1 : -1;
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