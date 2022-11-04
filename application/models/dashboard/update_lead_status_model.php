<?php
require "../../config/database.php";

$leadData = file_get_contents("php://input");
$request = json_decode($leadData);

$response = '{"records":[{"error": ';

$sql = "UPDATE leads SET status = ? WHERE lead_id = ?";

if($stmt = $conn->prepare($sql)) {
	$stmt->bind_param('ii', $leadStatus, $leadID);
	$leadStatus = $request->status;
	$leadID = $request->id;

	if ($stmt->execute()) {
		$response .= 'false,';
		$response .= '"message": "Se insertaron los datos con exito: Actualizar status leads"}]}';
	} else {
		$response .= 'true,';
		$response .= '"message": "Error al ejecutar consulta SQL: Actualizar status leads"}]}';
	}
} else {
	$response .= 'true,';
	$response .= '"message": "Error al preparar consulta SQL: Actualizar status leads"}]}';
}

$stmt->close();
$conn->close();

echo($response);
?>