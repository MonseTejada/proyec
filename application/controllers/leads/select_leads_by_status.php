<?php

$response = [
    'result' => NULL,
    'status' => 503,
    'message' => 'Servidor no disponible'
];

session_start();

if (isset($_SESSION['idUser'])) {

	$data = file_get_contents("php://input");
	$request = json_decode($data);

    require_once 'leads.php';
    $leadsModel = new Leads();

    $updatePropertyResponse = $leadsModel->getLeadsByStatus($request->status, $request->page, $request->limit);

    if (!is_null($updatePropertyResponse)) {

        $response['result'] = $updatePropertyResponse;
        $response['status'] = 200;
        $response['message'] = 'SUCCESS';


    } else {

        $response['status'] = 204;
        $response['message'] = 'Error al actualuizar Status de Propiedad';

    }

} else {
    
    $response['status'] = 511;
    $response['message'] = 'Se necesita autentificación';

}


echo json_encode($response);

?>
