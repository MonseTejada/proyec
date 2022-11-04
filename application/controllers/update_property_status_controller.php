<?php

session_start();

require_once '../models/leads_model.php';
$model = new Leads_Model();

$statusResponse = -1;
$response;
if (isset($_SESSION['idUser'])) {

	$data = file_get_contents("php://input");
	$request = json_decode($data);
	$requestData = array(
    'idPropertyStatus' => $request->status,
    'idProperty' => $request->idProperty
  );

  $statusResponse = $model->update('inmovables', 'idPropertyStatus', $requestData['idPropertyStatus'], 'idProperty', $requestData['idProperty'], 'ii');
  $statusResponse = (is_null($statusResponse)) ? 0 : 1;
}
  
echo '{"status": '.$statusResponse.'}';

?>
