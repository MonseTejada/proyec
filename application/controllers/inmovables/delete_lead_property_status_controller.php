<?php

session_start();

require_once '../models/leads_model.php';
$model = new Leads_Model();

$statusResponse = -3;
if (isset($_SESSION['idUser'])) {

	$data = file_get_contents("php://input");
	$request = json_decode($data);

  $statusResponse = $model->delete('leads_inmovables', 'idProperty', $request->idProperty, 'i');

  if (!is_null($statusResponse)) {

    $updatePropertyStatusResponse = $model->update('inmovables', 'idPropertyStatus', 1, 'idProperty', $request->idProperty, 'ii');
    $statusResponse = (is_null($updatePropertyStatusResponse)) ? 0 : 1;

  } else {

  $statusResponse = -1;

  }

}

echo '{"status": '.$statusResponse.'}';

?>
