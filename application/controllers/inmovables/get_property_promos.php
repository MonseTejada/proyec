<?php

session_start();

require_once '../models/model.php';
$model = new Model();

$statusResponse = 503;
$response = '';

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
    $request = json_decode($data);

    $propertyPromosResponse = $model->selectBy('idPromon', 'inmovables_promos', 'idProperty', $request->idProperty, 'i');
    if (!is_null($propertyPromosResponse)) {
        $statusResponse = 200;
        $propertyPromosResponseLen = count($propertyPromosResponse);
        for ($i = 0; $i < $propertyPromosResponseLen; $i++) { 
            $promosResponse[$i] = $model->selectBy('discount, descriptio', 'inmovables_promos', 'idProperty', $propertyPromosResponse[$i], 'i');
            $propertyPromosResponse[$i]['discount'] = $promosResponse[$i]['discount'];
            $propertyPromosResponse[$i]['description'] = $promosResponse[$i]['description'];
        }
    } else {
        $statusResponse = 204;
    }

    $response ='{"status": '.$statusResponse.', "errorReport": '.json_encode($propertyPromosResponse).'}';

} else {
    $statusResponse = 511;
	$model->destroySession();
	$response ='{"status": '.$statusResponse.'}';
}

echo $response;

?>