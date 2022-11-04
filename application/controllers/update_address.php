<?php

session_start();

require_once '../models/users_model.php';
$model = new Users_Model();

$statusResponse = -3;
$response;
if (isset($_SESSION['idUser'])) {

  $data = file_get_contents("php://input");
  $request = json_decode($data);

  if ($request->idAddress > 0) {

    $updateAddressResponse = $model->update('addresses', 'address', $request->address, 'idAddress', $request->idAddress, 'si');
    $statusResponse = (!is_null($updateAddressResponse)) ? 1 : 0;

  } else {

    $insertAddressResponse = $model->insertABC('addresses', 'address', $request->address, 'idCountryCode', 1, 'idAddressType', $model::USER_ADDRESS_ID, 'sii');
    if ($insertAddressResponse > 0) {
      $updateAddressResponse = $model->update('users', 'idAddress', $insertAddressResponse, 'idUser', $request->idUser, 'ii');
      $statusResponse = (!is_null($updateAddressResponse)) ? 2 : -1;
    } else {
      $statusResponse = -2;
    }

  }

  $response ='{"status": '.$statusResponse.', "errorReport": '.json_encode($model->errorReport).'}';

} else {
	$model->destroySession();
	$response ='{"status": '.$statusResponse.'}';
}

echo $response;

?>