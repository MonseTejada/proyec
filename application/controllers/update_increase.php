<?php

session_start();

require_once '../models/model.php';
$model = new Model();

$statusResponse = 503;
$response = '';

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
    $request = json_decode($data);

    $promoResponse = null;

    if ($request->currentPromo > 0 && $request->idPromo > 0) {
        $promoResponse = $model->updateByAB('inmovables_promos', 'idPromo', $request->idPromo, 'idProperty', $request->idProperty, 'idPromo', $request->currentPromo, 'iii');
    } else if ($request->idPromo > 0) {
        $promoResponse = $model->insertAB('inmovables_promos', 'idProperty', $request->idProperty, 'idPromo', $request->idPromo, 'ii');
    } else {
        $promoResponse = $model->deleteByAB('inmovables_promos', 'idProperty', $request->idProperty, 'idPromo', $request->currentPromo, 'ii');
    }

} else {

    $statusResponse = 511;
    $model->destroySession();

}

// $response ='{"status": '.$statusResponse.'}';

echo $response;

?>