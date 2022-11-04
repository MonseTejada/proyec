<?php

$response = [
    'status' => 503,
    'message' => 'Servidor no disponible'
];

session_start();

if (isset($_SESSION['idUser'])) {

	$data = file_get_contents("php://input");
	$params = json_decode($data);

    require_once '../../models/models.php';
    $model = new Models();

    $updateLeadPropertyResponse = $model->update('leads_inmovables', 'idLead', $params->idLead, 'idProperty', $params->idProperty, 'ii');

    if (!is_null($updateLeadPropertyResponse)) {

        $response['status'] = 200;
        $response['message'] = 'SUCCESS';

    } else {

        $response['status'] = 204;
        $response['message'] = 'Error al actualuizar propietario de propiedad';

    }

} else {
    
    $response['status'] = 511;
    $response['message'] = 'Se necesita autentificación';

}


echo json_encode($response);

?>
