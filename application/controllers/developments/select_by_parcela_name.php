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

    $inmovables->selectByParcelaName($params['parcela']);

    if (!$inmovables->isParcelaNull()) {

        $response['parcela'] = $inmovables->getParcela();

		$response['message'] = 'SUCCESS';
		$response['status'] = 200;

	} else {

		$response['status'] = 204;
		$response['message'] = 'Error al solicitar datos de Desarrollos';

    }

} else {

    $response['status'] = 511;
    $response['message'] = 'Se necesita autentificación';

}

echo json_encode($response);

?>
