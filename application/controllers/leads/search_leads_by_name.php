<?php

$response = [
    'result' => NULL,
    'status' => 503,
    'message' => 'Servidor no disponible'
];

session_start();

if (isset($_SESSION['idUser'])) {

    require_once 'leads.php';
    $leads = new Leads();

    $data = file_get_contents("php://input");
	$params = json_decode($data, true);

	$result = $leads->searchByName($params['keyword'], $params['status'], $params['page'], $params['limit']);

	if (!is_null($result) && !empty($result)) {

		$response['result'] = $result;
        $response['status'] = 200;
        $response['message'] = 'SUCCESS';

	} else {

        $response['status'] = 204;
        $response['message'] = 'No se encontro ningun resultado';

	}

} else {

    $response['status'] = 511;
    $response['message'] = 'Se necesita autentificación';

}

echo json_encode($response);

?>