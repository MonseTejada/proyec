<?php

$response = [
    'status' => 503,
    'message' => 'Servidor no disponible'
];

session_start();

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
    $params = json_decode($data, true);

    require_once "../inmovables/inmovables.php";
    $inmovables = new Inmovables(0, 0);

    $findCondo = false;

    $parcela = $inmovables->selectByParcelaName($params['layoutName']);

    if (!is_null($parcela)) {

        if (!is_null($parcela['path'])) {

            $response['layout'] = $parcela;
            $response['layout']['inmovables'] = NULL;
            $response['message'] = 'SUCCESS';
            $response['status'] = 200;

        } else {

            $findCondo = true;

        }

    } 
    
    if ($findCondo) {

        $inmovables->selectByCondoName($params['layoutName']);

        if (!$inmovables->isCondominiumNull()) {

            $response['layout'] = $inmovables->getCondominium();
            $response['propertyStatus'] = $inmovables->getPropertyStatus();

            $response['message'] = 'SUCCESS';
            $response['status'] = 200;

        } else {

            $response['status'] = 204;
            $response['message'] = 'Error al solicitar datos de Desarrollos';

        }

    }

} else {

    $response['status'] = 511;
    $response['message'] = 'Se necesita autentificación';

}

echo json_encode($response);

?>
