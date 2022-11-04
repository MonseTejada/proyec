<?php

session_start();

$response = [
    'status' => 503,
    'message' => 'Hubo un problema en el servidor',
    'result' => null
];

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");

    $response['result'] = file_put_contents("../../../config/inventary_table.json", $data);
    $response['status'] = 200;
    $response['message'] = 'SUCCESS';

} else {

    $response['status'] = 511;
    $response['message'] = 'Hace falta autentificación';
    $model->destroySession();

}

// $response ='{"status": '.$statusResponse.'}';

echo json_encode($response);

?>