<?php

require_once "model.php";

class Leads_Model extends Model {

	const LEAD_ADDRESS_ID = 2;

	/** Method for get leads by idUser
	 * @param $idUser
	 * @return $response
	 */
	public function getLeadsByIdUser($idUser) {
		$response = NULL;
		$leadsResult = $this->selectBy('*', 'leads', 'idUser', $idUser, 'i');
		if (!is_null($leadsResult)) {
			foreach ($leadsResult as $row) {
				if ($response != "") {$response .= ",";}
				$response .= '{"idLead": '.$row['idLead'].',';
				$response .= '"name": "'.$row['name'].'",';
				$response .= '"last_name": "'.$row['last_name'].'",';
				
				$response .= '"idEmail": '.$row['idEmail'].',';
				$selectEmailResponse = $this->selectBy('*', 'emails', 'idEmail', $row['idEmail'], 'i');
				if (!is_null($selectEmailResponse)) {
					$response .= '"email": "'.$selectEmailResponse[0]['email'].'",';
					$response .= '"idEmailDomain": '.$selectEmailResponse[0]['idEmailDomain'].',';
					$selectEmailDomainResponse = $this->selectBy('domain', 'email_domains', 'idEmailDomain', $selectEmailResponse[0]['idEmailDomain'], 'i');
					if (!is_null($selectEmailDomainResponse)) {
							$response .= '"domain": "'.$selectEmailDomainResponse[0]['domain'].'",';
					}
				}

				if (!is_null($row['idPhone'])) {
					$response .= '"idPhone": '.$row['idPhone'].',';
					$selectPhoneResult = $this->selectBy('phone, idCountryCode', 'phones', 'idPhone', $row['idPhone'], 'i');
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

				if (isset($row['idAddress'])) {
					$response .= '"idAddress": '.$row['idAddress'].',';
					$selectAddressResult = $this->selectBy('address', 'addresses', 'idAddress', $row['idAddress'], 'i');
					if (!is_null($selectAddressResult)) {
						$response .= '"address": "'.$selectAddressResult[0]['address'].'",';
					}
				} else {
					$response .= '"idAddress": 0,';
					$response .= '"address": "",';
				}

				$selectLeadsInmovables = $this->selectBy('idProperty', 'leads_inmovables', 'idLead', $row['idLead'], 'i');
				if (!is_null($selectLeadsInmovables)) {
					$response .= '"num_inmovables": '.count($selectLeadsInmovables).',';
					$inmovablesData = array();
					foreach ($selectLeadsInmovables as $propertyRow) {
						$selectProperty = $this->selectBy('*', 'inmovables', 'idProperty', $propertyRow['idProperty'], 'i');
						$selectCondominium = $this->selectBy('condominium', 'condos', 'idCondominium', $selectProperty[0]['idCondominium'], 'i');
						$selectProperty[0]['condominium'] = $selectCondominium[0]['condominium'];
						$selecPropertyType = $this->selectBy('type, description, cost_m2', 'property_types', 'idPropertyType', $selectProperty[0]['idPropertyType'], 'i');
						$selectProperty[0]['property_type'] = $selecPropertyType[0];
						array_push($inmovablesData, $selectProperty[0]);
					}
					$response .= '"inmovables": '.json_encode($inmovablesData).',';
				} else {
					$response .= '"num_inmovables": 0,';
				}

				$response .= '"idMedium": '.$row['idMedium'].',';
				$response .= '"idGender": '.$row['idGender'].',';
				$response .= '"status": '.$row['status'].'}';
			}
		}
		return $response;
	}
	
	/** Method for get leads by idUser
	 * @param $idUser
	 * @return $response
	 */
	public function getLeads() {
		$response = NULL;
		$leadsResult = $this->selectBy('*', 'leads', 'status', 1, 'i');
		if (!is_null($leadsResult)) {
			foreach ($leadsResult as $leadRow) {
				if ($response != "") {$response .= ",";}
				$response .= '{"idLead": '.$leadRow['idLead'].',';
				$response .= '"idUser": '.$leadRow['idUser'].',';
				$response .= '"name": "'.$leadRow['name'].'",';
				$response .= '"last_name": "'.$leadRow['last_name'].'",';
				
				$response .= '"idEmail": '.$leadRow['idEmail'].',';
				$selectEmailResponse = $this->selectBy('*', 'emails', 'idEmail', $leadRow['idEmail'], 'i');
				if (!is_null($selectEmailResponse)) {
					$response .= '"email": "'.$selectEmailResponse[0]['email'].'",';
					$response .= '"idEmailDomain": '.$selectEmailResponse[0]['idEmailDomain'].',';
					$selectEmailDomainResponse = $this->selectBy('domain', 'email_domains', 'idEmailDomain', $selectEmailResponse[0]['idEmailDomain'], 'i');
					if (!is_null($selectEmailDomainResponse)) {
							$response .= '"domain": "'.$selectEmailDomainResponse[0]['domain'].'",';
					}
				}

				if (!is_null($leadRow['idPhone'])) {
					$response .= '"idPhone": '.$leadRow['idPhone'].',';
					$selectPhoneResult = $this->selectBy('phone, idCountryCode', 'phones', 'idPhone', $leadRow['idPhone'], 'i');
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

				if (isset($leadRow['idAddress'])) {
					$response .= '"idAddress": '.$leadRow['idAddress'].',';
					$selectAddressResult = $this->selectBy('address', 'addresses', 'idAddress', $leadRow['idAddress'], 'i');
					if (!is_null($selectAddressResult)) {
						$response .= '"address": "'.$selectAddressResult[0]['address'].'",';
					}
				} else {
					$response .= '"idAddress": 0,';
					$response .= '"address": "",';
				}

				$selectLeadsInmovables = $this->selectBy('idProperty', 'leads_inmovables', 'idLead', $leadRow['idLead'], 'i');
				if (!is_null($selectLeadsInmovables)) {
					$response .= '"inmovables": '.json_encode($selectLeadsInmovables).',';
					$response .= '"num_inmovables": '.count($selectLeadsInmovables).',';
				} else {
					$response .= '"num_inmovables": 0,';
				}

				$response .= '"idMedium": '.$leadRow['idMedium'].',';
				$response .= '"idGender": '.$leadRow['idGender'].',';
				$response .= '"status": '.$leadRow['status'].'}';
			}
		}
		return $response;
  }

    /** Method for get leads by idUser
     * @param $idUser
     * @return $response
     */
	public function insertLead($name, $lastName, $idEmail, $idUser, $idGender, $idMedium) {
		$insertLeadResponse = $this->insertABCDEF('leads', 'name', $name, 'last_name', $lastName, 'idEmail', $idEmail, 'idUser', $idUser, 'idGender', $idGender, 'idMedium', $idMedium, 'ssiiii');
		if (!is_null($insertLeadResponse)) {
			$this->errorReport['insertLeadResponse'] = $insertLeadResponse;
			return $insertLeadResponse;
		}
		$this->errorReport['insertLeadResponse'] = 0;
		return 0;
	}
	
}

?>
