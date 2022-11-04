<?php

$response = [
    'status' => 503,
    'message' => 'Servidor no disponible',
    'result' => NULL
];

session_start();

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
    $params = json_decode($data, true);

    require_once "../../models/models.php";
    $models = new Models();

    require_once "inmovables.php";
    $inmovables = new Inmovables();

    $inmovables->resultsHandler($params['id'], $params['status'], $params['key']);

    if ($inmovables->isResults()) {

		$response['status'] = 200;
        $response['message'] = 'SUCCESS';
        $response['result'] = $inmovables->getResults();

	} else {

		$response['status'] = 204;
		$response['message'] = 'Error al solicitar datos de Desarrollos';

  }

} else {

    $response['status'] = 511;
    $response['message'] = 'Se necesita autentificaci¨®n';

}

echo json_encode($response);

?>
