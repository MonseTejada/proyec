<?php

require_once "model.php";

class Inmovables_Model extends Model {

    /** Method for get inmovables by idParcela
     * @param $idParcela
     * @return $response
     */
	public function getInmovablesByIdParcela($idParcela) {

		$inmoviblesResult = $this->selectBy('*', 'inmovables', 'idParcela', $idParcela, 'i');
		$response = NULL;

		if (!is_null($inmoviblesResult)) {

			foreach ($inmoviblesResult as $row) {

				if ($response != "") {$response .= ",";}

			    $response .= '{"idProperty": '.$row['idProperty'].',';
			    $response .= '"property_class": '.$row['property_class'].',';
			    $response .= '"number":"'.$row['number'].'",';
			    $response .= '"idModule":"'.$row['idModule'].'",';
			    $response .= '"area": '.$row['area'].',';
			    $response .= '"rent": '.((!is_null($row['rent'])) ? $row['rent'] : 'null').',';
			    $response .= '"dimensions": "'.$row['dimensions'].'",';
			    $response .= '"reference": "'.$row['reference'].'",';
			    $response .= '"idCondominium": '.$row['idCondominium'].',';
			    $response .= '"idPropertyType": '.$row['idPropertyType'].',';
			    $response .= '"zoho_id": "'.$row['zoho_id'].'",';

				$propertyPromosResponse = $this->selectBy('idPromo', 'inmovables_promos', 'idProperty', $row['idProperty'], 'i');

				if (!is_null($propertyPromosResponse)) {

					$cost_m2_discount = '"cost_m2_discount": null,';
					$cost_m2_increase = '"cost_m2_increase": null,';
					$hook = '"hook": null,';
					$hook_dicount = '"hook_discount": null,';
					$hook_custom = '"hook_custom": null,';

					$propertyPromosResponseLen = count($propertyPromosResponse);

					for ($i = 0; $i < $propertyPromosResponseLen; $i++) {

						$promosResponse = $this->selectBy('idPromo, description, discount, idPromoTypes', 'promos', 'idPromo', $propertyPromosResponse[$i]['idPromo'], 'i');
						$promosResponseLen = count($promosResponse);

						for ($index = 0; $index < $promosResponseLen; $index++) { 

							switch ($promosResponse[$index]['idPromoTypes']) {

								case 1:
									$cost_m2_discount = '"cost_m2_discount": {'
										.'"id": '.$promosResponse[$index]['idPromo'].','
										.'"description": "'.$promosResponse[$index]['description'].'",'
										.'"value": '.$promosResponse[$index]['discount'].','
										.'"idPromoTypes": '.$promosResponse[$index]['idPromoTypes']
									.'},';
									break;

								case 2:
									$hook_dicount = '"hook_discount": {'
										.'"id": '.$promosResponse[$index]['idPromo'].','
										.'"description": "'.$promosResponse[$index]['description'].'",'
										.'"value": '.$promosResponse[$index]['discount'].','
										.'"idPromoTypes": '.$promosResponse[$index]['idPromoTypes']
									.'},';
									break;

								case 3:
									$cost_m2_increase = '"cost_m2_increase": {'
										.'"id": '.$promosResponse[$index]['idPromo'].','
										.'"description": "'.$promosResponse[$index]['description'].'",'
										.'"value": '.$promosResponse[$index]['discount'].','
										.'"idPromoTypes": '.$promosResponse[$index]['idPromoTypes']
									.'},';
									break;

								case 4:
									$hook = '"hook": {'
										.'"id": '.$promosResponse[$index]['idPromo'].','
										.'"description": "'.$promosResponse[$index]['description'].'",'
										.'"value": '.$promosResponse[$index]['discount'].','
										.'"idPromoTypes": '.$promosResponse[$index]['idPromoTypes']
									.'},';
									break;

								case 5:
									$hook_custom = '"hook_custom": {'
										.'"id": '.$promosResponse[$index]['idPromo'].','
										.'"description": "'.$promosResponse[$index]['description'].'",'
										.'"value": '.$promosResponse[$index]['discount'].','
										.'"idPromoTypes": '.$promosResponse[$index]['idPromoTypes']
									.'},';

							}

						}
					}

					$response .= $cost_m2_discount;
					$response .= $cost_m2_increase;
					$response .= $hook;
					$response .= $hook_dicount;
					$response .= $hook_custom;

				}

				$response .= '"idPropertyStatus": '.$row['idPropertyStatus'].'}';
			}
		}
		return $response;
    }

    /** Method for get condos by idParcela
     * @param $idParcela
     * @return $response
     */
	public function getCondosByIdParcela($idParcela) {
		$condosResult = $this->selectBy('*', 'condos', 'idParcela', $idParcela, 'i');
		$response = NULL;
		if (!is_null($condosResult)) {
			foreach ($condosResult as $row) {
			    if ($response != "") {$response .= ",";}
			    $response .= '{"idCondominium": '.$row['idCondominium'].',';
			    $response .= '"condominium": "'.$row['condominium'].'",';
			    $response .= '"area": '.$row['area'].'}';
			}
		}
		return $response;
    }

    /** Method for get condos by idParcela
     * @param $idParcela
     * @return $response
     */
	public function getPropertyTypesByIdDevelopment($idDevelopment) {
		$propertyTypesResult = $this->selectBy('*', 'property_types', 'idDevelopment', $idDevelopment, 'i');
		$response = NULL;
		if (!is_null($propertyTypesResult)) {
			foreach ($propertyTypesResult as $row) {
			    if ($response != "") {$response .= ",";}
			    $response .= '{"idPropertyType": '.$row['idPropertyType'].',';
			    $response .= '"type": "'.$row['type'].'",';
			    $response .= '"description": "'.$row['description'].'",';
			    $response .= '"cost_m2": '.$row['cost_m2'].',';
			    $response .= '"min_size": '.$row['min_size'].',';
			    $response .= '"max_size": '.$row['max_size'].' }';
			}
		}
		return $response;
    }

    /** Method for get condos by idParcela
     * @param $idParcela
     * @return $response
     */
    private function getDataFromArrayById($array, $id, $idField) {
    	foreach ($array as $row) {
    		if ($row[$idField] == $id) {
    			return $row;
    		}
    	}
    }
}

?>
