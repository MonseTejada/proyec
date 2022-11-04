<?php

require_once "../model.php";

ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
session_start();

$model = new Model();

$response = '"isLogged": 0';

if (isset($_SESSION['idUser'])) {
	$response = '"isLogged": '.$_SESSION['idUser'];
} else {
	$model->destroySession();
}

$response = '{'.$response.'}';

echo $response;

?>
