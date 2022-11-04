<?php

session_start();

require_once '../models/users_model.php';
$model = new Users_Model();

$statusResponse = -1;
$response;
if (isset($_SESSION['idUser'])) {

	$data = file_get_contents("php://input");
	$request = json_decode($data);

  $insertUsersLeadsResponse = $model->insertABC('users_teams', 'idUser', $request->idUser, 'idTeam', $request->idTeam, 'idTeamProfile', 3, 'iii');
  $statusResponse = (!is_null($insertUsersLeadsResponse)) ? 1 : 0;

}

echo '{"status": '.$statusResponse.'}';

?>
