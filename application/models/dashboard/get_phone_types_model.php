<?php
require "../../config/database.php";

$response = '';

$sql = 'SELECT * FROM phone_types';

if($stmt = $conn->prepare($sql)) {
	if ($stmt->execute()) {
		$result = $stmt->get_result();
		while ($row = $result->fetch_assoc()) {
			if ($response != "") {$response .= ",";}
			$response .= '{"phone_type_id":'.$row['phone_type_id'].',';
			$response .= '"name":"'.$row['name'].'"}';
		}
	}
}

$response ='{"records":['.$response.']}';

$stmt->close();
$conn->close();

echo($response);
?>
