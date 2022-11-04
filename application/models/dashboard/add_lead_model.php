<?php
require "../../config/database.php";

session_start();

$leadData = file_get_contents("php://input");
$request = json_decode($leadData);

$response = '{"records":[{"error": ';

//$conn->autocommit(FALSE);

$sql = "INSERT INTO leads (name, last_name, email, created_by) VALUES (?, ?, ?, ?)";

if($stmt = $conn->prepare($sql)) {
	$stmt->bind_param('sssi', $leadName, $leadLastName, $leadEmail, $leadCreator);
	$leadName = $request->name;
	$leadLastName = $request->last_name;
	$leadEmail = $request->email;
	$leadCreator = $_SESSION['user_id'];

	if ($stmt->execute()) {
		$response .= 'false,';
		$response .= '"message": "Se insertaron los datos con exito: Insertar leads"}]}';
		/*$leadidv = $stmt->insert_id;
		$stmtLead->close();
		
		$sql = "INSERT INTO lead_phone_numbers (num, country_code_id, lead_id, phone_type_id) VALUES (?, ?, ?, ?)";
		if($stmtLeadContact = $conn->prepare($sql)) {
			$stmtLeadContact->bind_param('siii', $num, $countryCode, $leadID, $phoneType);
			$num = $request->phone;
			$countryCode = $request->country_code;
			$leadID = $leadidv;
			$phoneType = $request->phone_type;

			if ($stmtLeadContact->execute()) {
				$response .= 'false,';
				$response .= '"message": "Se insertaron los datos con exito"}]}';
			} else {
				$response .= 'true,';
				$response .= '"message": "Error al ejectutar consulta SQL: Insertar lead_phone_numbers"}]}';
			}
		} else {
			$response .= 'true,';
			$response .= '"message": "Error al preparar consulta SQL: Insertar lead_phone_numbers"}]}';
		}*/
	} else {
		$response .= 'true,';
		$response .= '"message": "Error al ejecutar consulta SQL: Insertar leads"}]}';
	}
} else {
	$response .= 'true,';
	$response .= '"message": "Error al preparar consulta SQL: Insertar leads"}]}';
}


/*if (!$conn->commit()) {
	$response .= 'true,';
	$response .= '"message": "Error en consulta SQL: Commit transaction failed"}]}';
	echo($response);
	exit();
}*/

$stmt->close();
$conn->close();

echo($response);
?>