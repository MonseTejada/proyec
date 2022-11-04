<?php

session_start();

require_once '../../models/models.php';
$model = new Models();

$response = [
    'status' => 503,
    'message' => 'Servidor no disponible'
];

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
    $request = json_decode($data);

    $amount = $model->selectAB('amount', 'inmovables_promos', 'idProperty', $request->idProperty, 'idPromo', $request->idPromo, 'ii');

    if ($amount) {

        if ($model->updateByAB('inmovables_promos', 'amount', ($amount[0]['amount']+1), 'idProperty', $request->idProperty, 'idPromo', $request->idPromo, 'iii')) {

            $response['status'] = 200;
            $response['message'] = 'SUCCESS';

        } else {

            $response['status'] = 204;
            $response['message'] = 'Error al actualizar cantidad';

        }

    } else {

        if ($model->insertAB('inmovables_promos', 'idProperty', $request->idProperty, 'idPromo', $request->idPromo, 'ii')) {

            $response['status'] = 200;
            $response['message'] = 'SUCCESS';

        } else {

            $response['status'] = 204;
            $response['message'] = 'No fue posible insertar aumento';

        }

    }

} else {

    $response['status'] = 511;
    $response['message'] = 'Hace falta autentificación';
    $model->destroySession();

}

echo json_encode($response);

?>
