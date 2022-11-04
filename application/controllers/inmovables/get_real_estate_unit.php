<?php

$response = 'null';
$status = 503;
$message = 'Servidor no disponible';

session_start();

if (isset($_SESSION['idUser'])) {

    require_once "real_estate_unit.php";
    $realEstateUnit = new RealEstateUnit();

    $data = file_get_contents("php://input");
    $params = json_decode($data, true);

    if ($realEstateUnit->selectEnviroment($params['realEstateUnit'])) {
 
        $response = $realEstateUnit->getEnviroment();

		$status = 200;
		$message = 'SUCCESS';

	} else {

		$status = 204;
		$message = 'Error al solicitar datos de Desarrollos';

    }

} else {

	$status = 511;
	$message = 'Se necesita autentificación';

}

echo '{"status": '.$status.', "message": "'.$message.'", "result": '.$response.'}';

?>
