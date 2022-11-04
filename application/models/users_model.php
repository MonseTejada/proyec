<?php

require_once "model.php";

class Users_Model extends Model {
	
	const USER_ADDRESS_ID = 1;

	/** Method for get leads by idUser
	 * @param $idUser
	 * @return $response
	 */
	public function getUsers($status) {

		$response = NULL;
		$selectUsersResult = ($status < 2) ? $this->selectBy('*', 'users', 'status', $status, 'i') : $this->selectFrom('*', 'users');

		if (!is_null($selectUsersResult)) {
			foreach ($selectUsersResult as $user) {
				if ($response != "") {$response .= ",";}
				$response .= '{"idUser": '.$user['idUser'].',';
				$response .= '"name": "'.$user['name'].'",';
				$response .= '"last_name": "'.$user['last_name'].'",';
				$response .= '"username": "'.$user['username'].'",';
				
				$response .= '"idEmail": '.$user['idEmail'].',';
				$selectEmailResponse = $this->selectBy('*', 'emails', 'idEmail', $user['idEmail'], 'i');
				if (!is_null($selectEmailResponse)) {
					$response .= '"email": "'.$selectEmailResponse[0]['email'].'",';
					$response .= '"idEmailDomain": '.$selectEmailResponse[0]['idEmailDomain'].',';
					$selectEmailDomainResponse = $this->selectBy('domain', 'email_domains', 'idEmailDomain', $selectEmailResponse[0]['idEmailDomain'], 'i');
					if (!is_null($selectEmailDomainResponse)) {
							$response .= '"domain": "'.$selectEmailDomainResponse[0]['domain'].'",';
					}
				}

				if (!is_null($user['idPhone'])) {
					$response .= '"idPhone": '.$user['idPhone'].',';
					$selectPhoneResult = $this->selectBy('phone, idCountryCode', 'phones', 'idPhone', $user['idPhone'], 'i');
					if (!is_null($selectPhoneResult)) {
						$response .= '"phone": "'.$selectPhoneResult[0]['phone'].'",';
						$response .= '"idCountryCode": '.$selectPhoneResult[0]['idCountryCode'].',';
						
						$selectCountryCodeResult = $this->selectBy('country, code', 'country_codes', 'idCountryCode', $selectPhoneResult[0]['idCountryCode'], 'i');
						if (!is_null($selectCountryCodeResult)) {
							$response .= '"code_country_code": "'.$selectCountryCodeResult[0]['code'].'",';
							$response .= '"country_country_code": "'.$selectCountryCodeResult[0]['country'].'",';
						}
					}
				}

				if (isset($user['idAddress'])) {
					$response .= '"idAddress": '.$user['idAddress'].',';
					$selectAddressResult = $this->selectBy('address', 'addresses', 'idAddress', $user['idAddress'], 'i');
					if (!is_null($selectAddressResult)) {
						$response .= '"address": "'.$selectAddressResult[0]['address'].'",';
					}
				} else {
					$response .= '"idAddress": 0,';
					$response .= '"address": "",';
				}

				$selectUsersTeamsResult = $this->selectBy('idTeam', 'users_teams', 'idUser', $user['idUser'], 'i');
				if (!is_null($selectUsersTeamsResult)) {
					$response .= '"idTeam": '.$selectUsersTeamsResult[0]['idTeam'].',';
				} else {
					$response .= '"idTeam": 0,';
				}


				$response .= '"idProfile": '.$user['idProfile'].',';
				$response .= '"idGender": '.$user['idGender'].',';
				$response .= '"status": '.$user['status'].'}';
			}
		}
		return $response;
	}

	/** Method for get leads by idUser
	 * @param $idUser
	 * @return $response
	 */
	public function insertUser($username, $password, $name, $lastName, $idEmail, $idUser, $idGender, $idProfile) {
		$inserUserResponse = $this->insertABCDEFG('users', 'username', $username, 'password', $password, 'name', $name, 'last_name', $lastName, 'idEmail', $idEmail, 'idGender', $idGender, 'idProfile', $idProfile, 'ssssiii');
		if (!is_null($inserUserResponse)) {
			$this->errorReport['inserUserResponse'] = $inserUserResponse;
			return $inserUserResponse;
		}
		$this->errorReport['inserUserResponse'] = 0;
		return 0;
	}
	
}
?>