<?php
require_once "../models/auth_model.php";
$data = file_get_contents("php://input");
$request = json_decode($data);
$model = new Auth_Model();
echo '{"status": '.$model->auth($request->username, $request->password).'}';
?>
