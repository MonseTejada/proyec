<?php

$response = [
    'status' => 503,
    'message' => 'Servidor no disponible'
];

session_start();

require_once '../models/leads_model.php';
$model = new Leads_Model();

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
    $request = json_decode($data);

    $updatePropertyResponse = $model->update('inmovables', 'idPropertyStatus', $request->status, 'idProperty', $request->idProperty, 'ii');

    if (!is_null($updatePropertyResponse)) {

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

        $insertLeadPropertyResponse = $model->insertABC('leads_inmovables', 'idLead', $request->idLead, 'idProperty', $request->idProperty, 'owner', 100, 'iid');
        $statusResponse = (is_null($insertLeadPropertyResponse)) ? 0 : 1;

        $response['status'] = 200;
        $response['message'] = 'SUCCESS';

    } else {

        $response['status'] = 511;
        $response['message'] = 'Se necesita autentificación';

    }

}

echo '{"status": '.$statusResponse.'}';

?>
