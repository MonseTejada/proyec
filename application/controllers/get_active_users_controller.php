<?php

session_start();

require_once "../models/users_model.php";

$model = new Users_Model();

$response = '{"status": 1}';

if (isset($_SESSION['idUser'])) {
	$usersResult = $model->getUsers(1);
	if (!is_null($usersResult)) {
		$response = '{"status": 0, "users": ['.$usersResult.']}';
	} else {
		$response = '{"status": 2}';
	}
} else {
	$model->destroySession();
	$response = '{"status": 3}';
}

echo $response;

?>
