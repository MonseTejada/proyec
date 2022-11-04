<?php

$response = [
    'status' => 503,
    'message' => 'Servidor no disponible'
];

session_start();

if (isset($_SESSION['idUser'])) {

	$data = file_get_contents("php://input");
	$request = json_decode($data);

    require_once '../../models/models.php';
    $model = new Models();

    $resultUdateProperty = $model->update('inmovables', 'idPropertyStatus', $request->status, 'idProperty', $request->idProperty, 'ii');

    if (!is_null($resultUdateProperty)) {

        date_default_timezone_set('America/Mexico_City');

        switch ($request->status) {

            case 2:
                $model->update('inmovables', 'init_at', date('Y-m-d H:i:s'), 'idProperty', $request->idProperty, 'si');
                break;

            case 3:
                $model->update('inmovables', 'set_aside_at', date('Y-m-d H:i:s'), 'idProperty', $request->idProperty, 'si');
                break;

            case 4:
                $model->update('inmovables', 'hooked_at', date('Y-m-d H:i:s'), 'idProperty', $request->idProperty, 'si');
                break;

            case 5:
                $model->update('inmovables', 'sold_at', date('Y-m-d H:i:s'), 'idProperty', $request->idProperty, 'si');

        }

        if ($request->status > 1) {

            $deleteLeadPropertyResponse = true;

        } else { 

            $deleteLeadPropertyResponse = $model->delete('leads_inmovables', 'idProperty', $request->idProperty, 'i');

            $model->update('inmovables', 'init_at', NULL, 'idProperty', $request->idProperty, 'si');
            $model->update('inmovables', 'set_aside_at', NULL, 'idProperty', $request->idProperty, 'si');
            $model->update('inmovables', 'hooked_at', NULL, 'idProperty', $request->idProperty, 'si');
            $model->update('inmovables', 'sold_at', NULL, 'idProperty', $request->idProperty, 'si');

        }

        if (!is_null($deleteLeadPropertyResponse)) {
    
            $response['status'] = 200;
            $response['message'] = 'SUCCESS';

        } else {

            $response['status'] = 204;
            $response['message'] = 'Error al Eliminar Relación Cliente de Propiedad';

        }

    } else {

        $response['status'] = 204;
        $response['message'] = 'Error al Actualizar Estado de Propiedad';

    }

} else {

    $response['status'] = 511;
    $response['message'] = 'Se necesita autentificación';

}


echo json_encode($response);

?>
