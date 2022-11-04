<?php

require "../../config/database.php";
require_once "model.php";

$loginData = file_get_contents("php://input");
$request = json_decode($loginData);
$user = $request->user;
$password = $request->password;

$response = array('error' => 0);

$resultUsers = $conn->query("SELECT * FROM users WHERE user = '".$user."'");

if (mysqli_num_rows($resultUsers) > 0) {
	$rowUser = $resultUsers->fetch_array();
	if (password_verify($password, $rowUser["password"])) {
		ini_set('session.gc_maxlifetime', 3600);
		session_set_cookie_params(3600);
		session_start();
		$_SESSION['idUser'] = $rowUser['idUser'];
		$_SESSION['user'] = $rowUser['user'];
		$_SESSION['email'] = $rowUser['email'];
		$_SESSION['name'] = $rowUser['name'];
		$_SESSION['last_name'] = $rowUser['last_name'];
		$_SESSION['idProfile'] = $rowUser['idProfile'];
	} else {
		$response['error'] = -1;
	}
} else {
	$response['error'] = -2;
}

$conn->close();

echo json_encode($response);
?>
