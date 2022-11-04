<?php

session_start();

require_once '../models/leads_model.php';
$model = new Leads_Model();

$statusResponse = -1;
if (isset($_SESSION['idUser'])) {
  $statusResponse = 0;
  $data = file_get_contents("php://input");
  $request = json_decode($data);
  $lastPassword = $request->lastPassword;
  $newPassword = $request->newPassword;
  $hashLastPassword = $model->selectBy('password', 'users', 'idUser', $_SESSION['idUser'], 'i');
  if (password_verify($lastPassword, $hashLastPassword[0]['password'])) {
    $hash = password_hash($newPassword, PASSWORD_DEFAULT);
    $statusResponse = $model->update('users', 'password', $hash, 'idUser', $_SESSION['idUser'], 'si');
    $statusResponse = 1;
  }
}

echo '{"status": '.$statusResponse.'}';

?>
