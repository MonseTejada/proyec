<?php

require_once "../models/inmovables_model.php";

$data = file_get_contents("php://input");
$request = json_decode($data);
$idDevelopment = $request->idDevelopment;
$idParcela = $request->idParcela;

$model = new Inmovables_Model();

$inmovables = $model->getInmovablesByIdParcela($idParcela);
$condos = $model->getCondosByIdParcela($idParcela);
$propertyTypes = $model->getPropertyTypesByIdDevelopment($idDevelopment);

$response ='{"inmovables":['.$inmovables.'], "condos":['.$condos.'], "propertyTypes":['.$propertyTypes.']}';

echo $response;

?>
