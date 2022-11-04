<?php

session_start();

require_once '../models/users_model.php';
$model = new Users_Model();

$statusResponse = -1;
$response;
if (isset($_SESSION['idUser'])) {

	$data = file_get_contents("php://input");
	$request = json_decode($data);
	$idUser = $request->idUser;

	$deleteUsersTeamsResponse = $model->delete('users_teams', 'idUser', $idUser, 'i');
	$resultUpdateStatus = $model->update('users', 'status', 0, 'idUser', $idUser, 'ii');
  $statusResponse = (!is_null($deleteUsersTeamsResponse) && !is_null($resultUpdateStatus)) ? 1 : 0;

}

echo '{"status": '.$statusResponse.'}';

?>
