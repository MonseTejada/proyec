<?php
require '../../config/database.php';

session_start();

$response = '';

$sql = 'SELECT * FROM leads WHERE created_by = ?';

if($stmt = $conn->prepare($sql)) {
	$stmt->bind_param('i', $userID);
	$userID = $_SESSION['user_id'];

	if ($stmt->execute()) {
		$result = $stmt->get_result();

		if (mysqli_num_rows($result) > 0) {
			while ($rowLead = $result->fetch_assoc()) {
				if ($response != "") {$response .= ",";}
				$response .= '{"lead_id":'.$rowLead['lead_id'].',';
				$response .= '"name":"'.$rowLead['name'].'",';
				$response .= '"last_name":"'.$rowLead['last_name'].'",';
				$response .= '"email":"'.$rowLead['email'].'",';
				$response .= '"status":"'.$rowLead['status'].'",';
				$response .= '"created_at":"'.$rowLead['created_at'].'"}';
			}
		}
	}
}

$response ='{"records":['.$response.']}';

$stmt->close();
$conn->close();

echo($response);

/*$resultLeads = $conn->query("SELECT * FROM leads WHERE created_by = ".$_SESSION['user_id']."");

if (mysqli_num_rows($resultLeads) > 0) {
	while ($rowLead = $resultLeads->fetch_array()) {
		if ($response != "") {$response .= ",";}
		$response .= '{"lead_id":'.$rowLead['lead_id'].',';
		$response .= '"name":"'.$rowLead['name'].'",';
		$response .= '"last_name":"'.$rowLead['last_name'].'",';
		$response .= '"email":"'.$rowLead['email'];

		$resultLeadContacts = $conn->query("SELECT * FROM leads_contacts WHERE lead_id = ".$rowLead['lead_id']."");
		if (mysqli_num_rows($resultLeadContacts) > 0) {
			$response .= '",';
			while ($rowLeadPhoneNumber = $resultLeadContacts->fetch_array()) {
				$response .= '"num":"'.$rowLeadPhoneNumber['num'] . '",';

				$resultCountryCodes = $conn->query("SELECT code FROM country_codes WHERE country_code_id = ".$rowLeadPhoneNumber['country_code_id']."");
				while ($rowCountryCode = $resultCountryCodes->fetch_array()) {
					$response .= '"country_code":"'.$rowCountryCode['code'].'",';
				}

				$resultPhoneTypes = $conn->query("SELECT name FROM phone_types WHERE phone_type_id = ".$rowLeadPhoneNumber['phone_type_id']."");
				while ($rowPhoneType = $resultPhoneTypes->fetch_array()) {
					$response .= '"phone_type":"'.$rowPhoneType['name'].'"}';
				}
			}
		} else {
			$response .= '"}';
		}
	}
}

$response ='{"records":['.$response.']}';

echo($response);

$conn->close();*/
?>
