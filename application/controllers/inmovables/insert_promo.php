<?php

session_start();

require_once '../../models/models.php';
$model = new Models();

$response = [
    'status' => 200,
    'message' => 'Servidor no disponible'
];

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
    $request = json_decode($data);

    foreach ($request->inmovables as $idProperty) {
        $model->insertAB('inmovables_promos', 'idProperty', $idProperty, 'idPromo', $request->promo, 'ii');
    }

    $response['status'] = 200;
    $response['message'] = 'SUCCESS';

} else {

    $response['status'] = 511;
    $response['message'] = 'Hace falta autentificación';
    $model->destroySession();

}

echo json_encode($response);

?>