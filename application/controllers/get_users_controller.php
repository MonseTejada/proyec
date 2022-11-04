<?php

session_start();

require_once "../models/users_model.php";

$model = new Users_Model();

$response = '{"status": 1}';

if (isset($_SESSION['idUser'])) {
	$usersResult = $model->getUsers(2);
	if (!is_null($usersResult)) {
		$selectLeads = $model->selectBy('*', 'leads', 'status', 1, 'i');
		$selectProfiles = $model->selectFrom('*', 'profiles');
		$selectUsersTeams = $model->selectFrom('idUser, idTeam', 'users_teams');
		$response = '{"status": 0, "users": ['.$usersResult.'], "profiles": ['.json_encode($selectProfiles).'], "users_teams": ['.json_encode($selectUsersTeams).'], "leads": ['.json_encode($selectLeads).']}';
	} else {
		$response = '{"status": 2}';
	}
} else {
	$model->destroySession();
	$response = '{"status": 3}';
}

echo $response;

?>
