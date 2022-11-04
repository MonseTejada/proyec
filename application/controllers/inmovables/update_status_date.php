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

    $result;

    date_default_timezone_set('America/Mexico_City');

    $timestamp = date('Y-m-d H:i:s', strtotime($request->date));

    switch ($request->status) {

        case 'init':
            $result = $model->update('inmovables', 'init_at', $timestamp, 'idProperty', $request->idProperty, 'si');
            break;

        case 'set_aside':
            $result = $model->update('inmovables', 'set_aside_at', $timestamp, 'idProperty', $request->idProperty, 'si');
            break;

        case 'hooked':
            $result = $model->update('inmovables', 'hooked_at', $timestamp, 'idProperty', $request->idProperty, 'si');
            break;

        case 'sold':
            $result = $model->update('inmovables', 'sold_at', $timestamp, 'idProperty', $request->idProperty, 'si');

    }

    if ($result) {

        $response['status'] = 200;
        $response['message'] = 'SUCCESS';

    } else {

        $response['status'] = 204;
        $response['message'] = 'Algo salio mal';

    }

} else {

    $response['status'] = 511;
    $response['message'] = 'Hace falta autentificación';
    $model->destroySession();

}

echo json_encode($response);

?>