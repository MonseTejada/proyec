<?php

$response = 'null';
$status = 503;
$message = 'Servidor no disponible';
$promos = null;

session_start();

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
    $params = json_decode($data, true);

    require_once "../../models/models.php";
    $models = new Models();

    require_once "inmovables.php";
    $inmovables = new Inmovables($params['page'], $params['limit']);

    $inmovables->requestByCluster($params['idCluster'], $params['status']);

    if (!is_null($response)) {

        $promos = [
            'discount' => $models->selectBy('idPromo, discount, idPromoTypes', 'promos', 'idPromoTypes', 1, 'i'),
            'hook_discount' => $models->selectBy('idPromo, discount, idPromoTypes', 'promos', 'idPromoTypes', 2, 'i'),
            'increase' => $models->selectBy('idPromo, discount, idPromoTypes', 'promos', 'idPromoTypes', 3, 'i'),
            'hook' => $models->selectBy('idPromo, discount, idPromoTypes', 'promos', 'idPromoTypes', 4, 'i')
        ];

		$message = 'SUCCESS';
		$status = 200;

	} else {

		$status = 204;
		$message = 'Error al solicitar datos de Desarrollos';

    }

} else {

    $status = 511;
    $message = 'Se necesita autentificación';

}

echo '{"status": '.$status.', "message": "'.$message.'", "result": '.$inmovables->get().', "promos": '.json_encode($promos).'}';

?>