<?php

require_once '../../models/models.php';
require_once '../pagination.php';;

class Inmovables extends Models {

	private const FIELDS = 'idProperty, property_class, number, idCondominium, idModule, area, rent, dimensions, reference, init_at, set_aside_at, hooked_at, sold_at, idStreet, idPropertyType, idPropertyStatus, zoho_id';
	private const TABLE = 'inmovables';

	private $inmovables;
	private $condominium;
	private $property;
	private $results;
	private $pagination;

	function __construct($page = 0, $limit = 0) {
		$this->inmovables = NULL;
		$this->condominium = NULL;
		$this->property = NULL;
		$this->results = [];
		$this->pagination = ($page > 0) ? new Pagination($page, $limit) : NULL;
	}

    /** Method for get inmovables by idCondominium
     * @param $idCondominium
     */
	public function requestByCondominium($idCondominium, $status) {

		require_once '../../models/models.php';
		$models = new Models();

		$statusCond = '';
		$statusTypes = '';
		$params = array_merge([$idCondominium], $status);

		foreach ($status as $key => $st) {
			if ($key > 0) $statusCond .= ' OR ';
			$statusCond .= 'idPropertyStatus = ?';
			$statusTypes .= 'i';
		}

		$types = 'i'.$statusTypes;

		$this->pagination->update('FROM inmovables WHERE idCondominium = ? AND ('.$statusCond.')', [
			'params' => $params,
			'types' => $types,
			'numFields' => 1
		]);

		$sql = 'SELECT '.self::FIELDS.' FROM '.self::TABLE.' WHERE idCondominium = ? AND ('.$statusCond.') '.$this->pagination->getLimitQuery();
		$this->inmovables = $models->selectHandler($sql, $params, $types);
		$this->prepareRquest();

	}

    /** Method for get inmovables by idCluster
     * @param $idCluster
     */
	public function requestByCluster($idCluster, $status) {

		require_once '../../models/models.php';
		$models = new Models();

		$statusCond = '';
		$statusTypes = '';
		$params = array_merge([$idCluster], $status);

		foreach ($status as $key => $st) {
			if ($key > 0) $statusCond .= ' OR ';
			$statusCond .= 'idPropertyStatus = ?';
			$statusTypes .= 'i';
		}

		$types = 'i'.$statusTypes;

		$this->pagination->update('FROM inmovables WHERE idParcela = ? AND ('.$statusCond.')', [
			'params' => $params,
			'types' => $types,
			'numFields' => 1
		]);

		$sql = 'SELECT '.self::FIELDS.' FROM '.self::TABLE.' WHERE idParcela = ? AND ('.$statusCond.') '.$this->pagination->getLimitQuery();
		$this->inmovables = $models->selectHandler($sql, $params, $types);
		$this->prepareRquest();
	}

    /** Method for get inmovables by idCluster
     * @param $idCluster
     */
	public function requestByDevelopment($idDevelopment, $status) {

		require_once '../../models/models.php';
		$models = new Models();

		$statusCond = '';
		$statusTypes = '';
		$params = array_merge([$idDevelopment], $status);

		foreach ($status as $key => $st) {
			if ($key > 0) $statusCond .= ' OR ';
			$statusCond .= 'idPropertyStatus = ?';
			$statusTypes .= 'i';
		}

		$types = 'i'.$statusTypes;

		$this->pagination->update('FROM inmovables WHERE idDevelopment = ? AND ('.$statusCond.')', [
			'params' => $params,
			'types' => $types,
			'numFields' => 1
		]);

		$sql = 'SELECT '.self::FIELDS.' FROM '.self::TABLE.' WHERE idDevelopment = ? AND ('.$statusCond.') '.$this->pagination->getLimitQuery();
		$this->inmovables = $models->selectHandler($sql, $params, $types);
		$this->prepareRquest();

	}

    /** Method for get inmovables by idCluster
     * @param $idCluster
     */
	public function requestByRealEstateUnit($idCompany, $status) {

		require_once '../../models/models.php';
		$models = new Models();

		$statusCond = '';
		$statusTypes = '';
		$params = array_merge([$idCompany], $status);

		foreach ($status as $key => $st) {
			if ($key > 0) $statusCond .= ' OR ';
			$statusCond .= 'idPropertyStatus = ?';
			$statusTypes .= 'i';
		}

		$types = 'i'.$statusTypes;

		$this->pagination->update('FROM inmovables WHERE idCompany = ? AND ('.$statusCond.')', [
			'params' => $params,
			'types' => $types,
			'numFields' => 1
		]);

		$sql = 'SELECT '.self::FIELDS.' FROM '.self::TABLE.' WHERE idCompany = ? AND ('.$statusCond.') '.$this->pagination->getLimitQuery();
		$this->inmovables = $models->selectHandler($sql, $params, $types);
		$this->prepareRquest();

	}

    /** Method for get inmovables by idCluster
     * @param $idCluster
     */
	public function selectByParcelaName($parcela) {

		$parcela = $this->selectBy('idParcela, parcela, path', 'parcelas', 'parcela', $parcela, 's');

		return (!is_null($parcela)) ? [ 'name' => $parcela[0]['parcela'], 'path' => $parcela[0]['path'] ] : $parcela;

	}

    /** Method for get inmovables by idCluster
     * @param $idCluster
     */
	public function selectByCondoName($condominium) {

		$idCondominium = $this->selectBy('idCondominium, condominium, path', 'condos', 'condominium', $condominium, 's');

		if (!is_null($idCondominium)) {

			$inmovablesResponse = $this->selectBy('idProperty, idPropertyStatus', self::TABLE, 'idCondominium', $idCondominium[0]['idCondominium'], 'i');

			if (!is_null($inmovablesResponse)) {

				$this->condominium = [
					'inmovables' => $inmovablesResponse,
					'name' => $idCondominium[0]['condominium'],
					'path' => $idCondominium[0]['path']
				];

			}

		}

	}

    /** Method for get inmovables by idCluster
     * @param $idCluster
     */
	public function selectPropertyById($idProperty) {

		$propertyRequestResponse = $this->selectBy('property_class, number, area, rent, init_at, set_aside_at, hooked_at, sold_at, idPropertyStatus, idPropertyType', self::TABLE, 'idProperty', $idProperty, 'i');

		if (!is_null($propertyRequestResponse)) {

			$this->property = $propertyRequestResponse[0];
			$this->property['idProperty'] = $idProperty;
			$this->quoteProperty();

		}

		return $this->property;

	}

    /** Method for reuqest property type by id
     * @param $idPropertyType
     * @param $area
     */
	private function quoteProperty() {

		$propertyType = $this->selectBy('type, cost_m2', 'property_types', 'idPropertyType', $this->property['idPropertyType'], 'i');

		if (!is_null($propertyType)) {

			$this->property['class'] = $propertyType[0]['type'];

			$this->property['cost']  = [
				'm2' => $propertyType[0]['cost_m2'],
				'property' => $propertyType[0]['cost_m2'] * $this->property['area']
			];

			$this->property['promos'] = $this->requestPromos($this->property['idProperty']);

			if (!is_null($this->property['promos']['hook'])) {

				$this->property['hook'] = $this->property['cost']['property'] * $this->property['promos']['hook']['discount'];
				$this->property['financing'] = $this->property['cost']['property'] - $this->property['hook'];

			} else {

				$this->property['hook'] = 0;
				$this->property['promos']['hook'] = ['discount' => 0];

			}

			$costM2 = $this->property['cost']['m2'];

			$this->property['cost']['increase'] = [
				'amount' => 0,
				'm2' => 0,
				'property' => 0,
				'hook' => 0,
				'financing' => 0
			];

			if (!is_null($this->property['promos']['cost_m2_increase'])) {

				foreach ($this->property['promos']['cost_m2_increase'] as $increase) {

					for ($i = 0; $i < $increase['amount']; $i++) {

						$valueIncrease = $costM2 * $increase['discount'];
						$this->property['cost']['increase']['amount'] += $valueIncrease;
						$costM2 += $valueIncrease;

					}

				}

				$this->property['cost']['increase']['m2'] = $costM2;
				$this->property['cost']['increase']['property'] = $costM2 * $this->property['area'];

				$this->property['cost']['increase']['hook'] = $this->property['cost']['increase']['property'] * $this->property['promos']['hook']['discount'];
				$this->property['cost']['increase']['financing'] = $this->property['cost']['increase']['property'] - $this->property['cost']['increase']['hook'];

			}

			$this->property['cost']['discount'] = [
				'amount' => 0,
				'm2' => 0,
				'property' => 0,
				'hook' => 0,
				'financing' => 0
			];

			if (!is_null($this->property['promos']['cost_m2_discount'])) {

				foreach ($this->property['promos']['cost_m2_discount'] as $discount) {

					for ($i = 0; $i < $discount['amount']; $i++) {

						$valueDiscount = $costM2 * $discount['discount'];
						$this->property['cost']['discount']['amount'] += $valueDiscount;
						$costM2 -= $valueDiscount;

					}

				}

				$this->property['cost']['discount']['m2'] = $costM2;
				$this->property['cost']['discount']['property'] = $costM2 * $this->property['area'];

				$this->property['cost']['discount']['hook'] = $this->property['cost']['discount']['property'] * $this->property['promos']['hook']['discount'];
				$this->property['cost']['discount']['financing'] = $this->property['cost']['discount']['property'] - $this->property['cost']['discount']['hook'];

			}

			$this->property['cost']['final'] = [
				'm2' => $costM2,
				'property' => $costM2 * $this->property['area']
			];

			$this->property['cost']['final']['hook'] = $this->property['cost']['final']['property'] * $this->property['promos']['hook']['discount'];
			$this->property['cost']['final']['financing'] = $this->property['cost']['final']['property'] - $this->property['cost']['final']['hook'];

			$hookFinal = $this->property['cost']['final']['hook'];

			$this->property['hook_discount'] = 0;
			$this->property['hook_discounted'] = 0;

			if (!is_null($this->property['promos']['hook_discount'])) {

				$this->property['hook_discount'] = $this->property['cost']['final']['hook'] * $this->property['promos']['hook_discount']['discount'];
				$this->property['hook_discounted'] = $this->property['cost']['final']['hook'] - $this->property['hook_discount'];

				$hookFinal = $this->property['hook_discounted'];

			}

			$this->property['amount'] = $this->property['cost']['final']['financing'] + $hookFinal;

		}

    }

	/** Method for reuqest promos by id
     * @param $idProperty
     */
	private function requestPromos($idProperty) {

		$inmovablesPromos = $this->selectBy('idPromo, amount', 'inmovables_promos', 'idProperty', $idProperty, 'i');
		$promos = NULL;

		$increase = [];
		$discount = [];

		$promos = [
			'cost_m2_discount' => NULL,
			'hook_discount' => NULL,
			'cost_m2_increase' => NULL,
			'hook' => NULL,
			'hook_custom' => NULL
		];

		if (!is_null($inmovablesPromos)) {

			foreach ($inmovablesPromos as $inmovablesPromo) {

				$promo = $this->selectBy('idPromo, description, discount, idPromoTypes', 'promos', 'idPromo', $inmovablesPromo['idPromo'], 'i');

				foreach ($promo as $p) {

					switch ($p['idPromoTypes']) {
	
						case 1:
	
							$p['amount'] = $inmovablesPromo['amount'];
							array_push($discount, $p);
							break;
	
						case 2:
	
							$promos['hook_discount'] = $p;
							break;
	
						case 3:
	
							$p['amount'] = $inmovablesPromo['amount'];
							array_push($increase, $p);
							break;
	
						case 4:
	
							$promos['hook'] = $p;
							$promos['hook']['idCurrent'] = $p['idPromo'];
							break;
	
						case 5:
	
							$promos['hook_custom'] = $p;
							$promos['hook_custom']['idCurrent'] = $p['idPromo'];
	
					}

				}

			}
			
		}

		$promos['cost_m2_discount'] = (empty($discount)) ? NULL : $discount;
		$promos['cost_m2_increase'] = (empty($increase)) ? NULL : $increase;

		return $promos;

	}

    /** Method for get inmovables by idCluster
     * @param $idCluster
     */
	public function request($idPropertyStatus) {

		require_once '../../models/models.php';
		$models = new Models();

		$statusCond = '';
		$statusTypes = '';

		foreach ($status as $key => $st) {
			if ($key > 0) $statusCond .= ' OR ';
			$statusCond .= 'idPropertyStatus = ?';
			$statusTypes .= 'i';
		}

		$types = 'i'.$statusTypes;

		$this->pagination->update('FROM inmovables WHERE '.$statusCond, [
			'params' => $status,
			'types' => $types,
			'numFields' => 1
		]);

		$sqlAll = 'SELECT idProperty, area, idPropertyType FROM '.self::TABLE.' WHERE '.$statusCond;
		$all = $models->selectHandler($sqlAll, $status, $types);
		$this->prepareResults($all);

		$sql = 'SELECT '.self::FIELDS.' FROM '.self::TABLE.' WHERE '.$statusCond.$this->pagination->getLimitQuery();
		$this->inmovables = $models->selectHandler($sql, $status, $types);
		$this->prepareRquest();

	}

    /** Method for get inmovables by idCondominium
     * @param $idCondominium
     */
	public function isNull() {
		return is_null($this->inmovables);
	}

    /** Method for get inmovables by idCondominium
     * @param $idCondominium
     */
	public function isCondominiumNull() {
		return is_null($this->condominium);
	}

    /** Method for get inmovables by idCondominium
     * @param $idCondominium
     */
	public function getCondominium() {
		return $this->condominium;
	}

    /** Method for get inmovables by idCondominium
     * @param $idCondominium
     */
	public function getPropertyStatus() {

		$propertyStatusResponse = $this->selectFrom('idPropertyStatus, status, class', 'property_status');

		if (!is_null($propertyStatusResponse)) {

			$propertyStatus = [];

			foreach ($propertyStatusResponse as $status) {

				$propertyStatus[$status['idPropertyStatus']] = [
					'status' => $status['status'],
					'class' => $status['class']
				];

			}

		}

		return $propertyStatus;

	}

    /** Method for get inmovables by idCondominium
     * @param $idCondominium
     */
	public function getImmovables() {
		return $this->inmovables;
	}

    /** Method for get inmovables by idCondominium
     * @param $idCondominium
     */
	public function get() {
		return json_encode([
			'inmovables' => $this->inmovables,
			'pagination' => $this->pagination->getData()
		]);
	}

    /** Method for get inmovables by 1 param condition
     */
	private function prepareCondominium() {

		if (!is_null($this->condominium)) {

			foreach ($this->condominium['inmovables'] as &$property) {

				$property['selected'] = false;
				$property['type'] = $this->requestPropertyTypes($property['idPropertyType'], $property['area']);
				$property['promos'] = $this->requestPromos($property['idProperty']);

			}
		}
	}

    /** Method for get inmovables by 1 param condition
     */
	private function prepareRquest() {

		if (!is_null($this->inmovables)) {

			foreach ($this->inmovables as &$property) {

				$property['selected'] = false;

				$property['condominium'] = $this->requestCondominium($property['idCondominium']);
				$property['status'] = $this->requestPropertyStatus($property['idPropertyStatus']);
				$property['promos'] = $this->requestPromos($property['idProperty']);

				$this->quote($property);

			}

		}

	}

	/** Method for reuqest property type by id
     * @param $idPropertyType
     * @param $area
     */
	private function quote(&$property) {

		$this->costHandler($property);
		$this->hookHandler($property);
		$this->increaseHandler($property);
		$this->discountHandler($property);
		$this->finalCostHandler($property);
		$this->hookDiscountHandler($property);

	}

	/** Method for reuqest property type by id
     * @param $idPropertyType
     * @param $area
     */
	private function costHandler(&$property) {

		$type = $this->selectBy('type, cost_m2', 'property_types', 'idPropertyType', $property['idPropertyType'], 'i');

		$property['class'] = $type[0]['type'];

		$property['cost'] = [
			'm2' => $type[0]['cost_m2'],
			'property' => $type[0]['cost_m2'] * $property['area']
		];

	}

	/** Method for reuqest property type by id
     * @param $idPropertyType
     * @param $area
     */
	private function hookHandler(&$property) {

		$property['hook'] = [
			'value' => 0,
			'total' => 0,
			'selected' => 0
		];

		if (!is_null($property['promos']['hook'])) {

			$property['hook']['value'] = $property['promos']['hook']['discount'];
			$property['hook']['total'] = $property['cost']['property'] * $property['hook']['value'];
			$property['hook']['selected'] = $property['promos']['hook']['idPromo'];

			$property['financing'] = $property['cost']['property'] - $property['hook']['total'];

		}

	}

	/** Method for reuqest property type by id
     * @param $idPropertyType
     * @param $area
     */
	private function increaseHandler(&$property) {

		$property['increase'] = [
			'amount' => 0,
			'cost' => [
				'm2' => 0,
				'property' => 0,
			],
			'hook' => 0,
			'financing' => 0
		];

		if (!is_null($property['promos']['cost_m2_increase'])) {

			$property['increase']['cost']['m2'] = $property['cost']['m2'];

			foreach ($property['promos']['cost_m2_increase'] as $increase) {

				for ($idx = 0; $idx < $increase['amount']; $idx++) {

					$valueIncrease = $property['increase']['cost']['m2'] * $increase['discount'];
					$property['increase']['amount'] += $valueIncrease;
					$property['increase']['cost']['m2'] += $valueIncrease;

				}

			}

			$property['increase']['cost']['property'] = $property['increase']['cost']['m2'] * $property['area'];

			$property['increase']['hook'] = $property['increase']['cost']['property'] * $property['hook']['value'];
			$property['increase']['financing'] = $property['increase']['cost']['property'] - $property['increase']['hook'];

		}

	}

	/** Method for reuqest property type by id
     * @param $idPropertyType
     * @param $area
     */
	private function discountHandler(&$property) {

		$property['discount'] = [
			'amount' => 0,
			'cost' => [
				'm2' => 0,
				'property' => 0,
			],
			'hook' => 0,
			'financing' => 0
		];

		if (!is_null($property['promos']['cost_m2_discount'])) {

			$costM2 = ($property['increase']['cost']['m2'] > 0) ? $property['increase']['cost']['m2'] : $property['cost']['m2'];

			foreach ($property['promos']['cost_m2_discount'] as $discount) {

				for ($idx = 0; $idx < $discount['amount']; $idx++) {

					$valueDiscount = $costM2 * $discount['discount'];
					$property['discount']['amount'] += $valueDiscount;
					$costM2 -= $valueDiscount;

				}

			}

			$property['discount']['cost']['m2'] = $costM2;
			$property['discount']['cost']['property'] = $costM2 * $property['area'];

			$property['discount']['hook'] = $property['discount']['cost']['property'] * $property['hook']['value'];
			$property['discount']['financing'] = $property['discount']['cost']['property'] - $property['discount']['hook'];

		}

	}

	/** Method for reuqest property type by id
     * @param $idPropertyType
     * @param $area
     */
	private function finalCostHandler(&$property) {

		$costM2 = ($property['discount']['cost']['m2'] > 0) ? $property['discount']['cost']['m2'] : $property['increase']['cost']['m2'];
		$costM2 = ($costM2 > 0) ? $costM2 : $property['cost']['m2'];

		$property['final'] = [
			'cost' => [
				'm2' => $costM2,
				'property' => $costM2 * $property['area']
			]
		];

		$property['final']['hook'] = [
			'total' => $property['final']['cost']['property'] * $property['hook']['value']
		];

		$property['final']['financing'] = $property['final']['cost']['property'] - $property['final']['hook']['total'];

	}

	/** Method for reuqest property type by id
     * @param $idPropertyType
     * @param $area
     */
	private function hookDiscountHandler(&$property) {

		$property['final']['hook']['discount'] = [
			'id' => 0,
			'selected' => 0,
			'amount' => 0,
			'total' => 0
		];

		$hookFinal = $property['final']['hook']['total'];

		if (!is_null($property['promos']['hook_discount'])) {

			$property['final']['hook']['discount']['id'] = $property['promos']['hook_discount']['idPromo'];
			$property['final']['hook']['discount']['selected'] = $property['promos']['hook_discount']['idPromo'];

			$property['final']['hook']['discount']['amount'] = $property['final']['hook']['total'] * $property['promos']['hook_discount']['discount'];
			$property['final']['hook']['discount']['total'] = $property['final']['hook']['total'] - $property['final']['hook']['discount']['amount'];

			$hookFinal = $property['final']['hook']['discount']['total'];

		}

		$property['amount'] = $property['final']['financing'] + $hookFinal;

	}

    /** Method for get inmovables by idCondominium
     * @param $idCondominium
     */
	public function getResults() {
		return $this->results;
	}

    /** Method for get inmovables by idCondominium
     * @param $idCondominium
     */
	public function isResults() {
		return !is_null($this->results) && !empty($this->results);
	}

    /** Method for get inmovables by 1 param condition
     */
	public function resultsHandler($id, $status, $field) {

		$models = new Models();

		$statusCond = '';
		$statusTypes = '';

		$params = array_merge([$id], $status);

		foreach ($status as $key => $st) {
			if ($key > 0) $statusCond .= ' OR ';
			$statusCond .= 'idPropertyStatus = ?';
			$statusTypes .= 'i';
		}

		$types = 'i'.$statusTypes;

		$sql = 'SELECT idProperty, area, idPropertyType FROM '.self::TABLE.' WHERE '.$field.' = ? AND ('.$statusCond.') ';
		$inmovables = $models->selectHandler($sql, $params, $types);
		$this->prepareResults($inmovables);

	}

    /** Method for get inmovables by 1 param condition
     */
	private function prepareResults($inmovables) {

		if (!is_null($inmovables)) {

			$this->initResult();
			$this->results['counters']['inmovables'] = count($inmovables);

			foreach ($inmovables as $property) {

				$property['promos'] = $this->requestPromos($property['idProperty']);

				$this->quote($property);

				$this->sumsHandler($property);

			}

			$this->averageHandler();

		}

	}

    /** Method for get inmovables by 1 param condition
     */
	private function sumsHandler($property) {

		$this->results['sums']['area'] += $property['area'];
		$this->results['sums']['cost']['m2'] += $property['cost']['m2'];
		$this->results['sums']['cost']['property'] += $property['cost']['property'];
		$this->results['sums']['hook']['total'] += $property['hook']['total'];
		$this->results['sums']['financing']['total'] += $property['financing'];

		$isIncreased = $property['increase']['cost']['m2'] > 0;

		if ($isIncreased) {

			$this->results['sums']['cost']['increase']['amount'] += $property['increase']['cost']['m2'];
			$this->results['sums']['cost']['increase']['m2'] += $property['increase']['cost']['m2'];
			$this->results['sums']['cost']['increase']['property'] += $property['increase']['cost']['property'];
			$this->results['sums']['hook']['increase'] += $property['increase']['hook'];
			$this->results['sums']['financing']['increase'] += $property['increase']['financing'];

			$this->results['counters']['increase']++;

		} else {

			$this->results['sums']['cost']['increase']['m2'] += $property['cost']['m2'];
			$this->results['sums']['cost']['increase']['property'] += $property['cost']['property'];
			$this->results['sums']['hook']['increase'] += $property['hook']['total'];
			$this->results['sums']['financing']['increase'] += $property['financing'];

		}

		$isDiscounted = $property['discount']['cost']['m2'] > 0;

		if ($isDiscounted) {

			$this->results['sums']['cost']['discount']['amount'] += $property['discount']['amount'];
			$this->results['sums']['cost']['discount']['m2'] += $property['discount']['cost']['m2'];
			$this->results['sums']['cost']['discount']['property'] += $property['discount']['cost']['property'];
			$this->results['sums']['hook']['discount'] += $property['discount']['hook'];
			$this->results['sums']['financing']['discount'] += $property['discount']['hook'];

			$this->results['counters']['discount']++;

		} else {

			if ($isIncreased) {

				$this->results['sums']['cost']['discount']['m2'] += $property['increase']['cost']['m2'];
				$this->results['sums']['cost']['discount']['property'] += $property['increase']['cost']['property'];
				$this->results['sums']['hook']['discount'] += $property['increase']['hook'];
				$this->results['sums']['financing']['discount'] += $property['increase']['financing'];

			} else {

				$this->results['sums']['cost']['discount']['m2'] += $property['cost']['m2'];
				$this->results['sums']['cost']['discount']['property'] += $property['cost']['property'];
				$this->results['sums']['hook']['discount'] += $property['hook']['total'];
				$this->results['sums']['financing']['discount'] += $property['financing'];

			}

		}

		$this->results['sums']['cost']['final']['m2'] += $property['final']['cost']['m2'];
		$this->results['sums']['cost']['final']['property'] += $property['final']['cost']['property'];
		$this->results['sums']['hook']['final']['total'] += $property['final']['hook']['total'];
		$this->results['sums']['financing']['final'] += $property['final']['financing'];
		
		if ($property['final']['hook']['discount']['total'] > 0) {
			
			$this->results['sums']['hook']['final']['discount']['amount'] += $property['final']['hook']['discount']['amount'];
			$this->results['sums']['hook']['final']['discount']['total'] += $property['final']['hook']['discount']['total'];

			$this->results['counters']['hookDiscount']++;

		} else {

			if ($isDiscounted) {

				$this->results['sums']['hook']['final']['discount']['total'] += $property['discount']['hook'];

			} else {

				$this->results['sums']['hook']['final']['discount']['total'] += ($isIncreased) ? $property['increase']['hook'] : $property['hook']['total'];

			}

		}

		$this->results['sums']['amount'] += $property['amount'];

	}

    /** Method for get inmovables by 1 param condition
     */
	private function averageHandler() {

		$this->results['averages']['area'] = $this->results['sums']['area'] / $this->results['counters']['inmovables'];
		$this->results['averages']['cost']['m2']['total'] = $this->results['sums']['cost']['m2'] / $this->results['counters']['inmovables'];

		if ($this->results['sums']['cost']['increase']['amount'] > 0) {

			$this->results['averages']['cost']['increase']['amount'] = $this->results['sums']['cost']['increase']['amount'] / $this->results['counters']['increase'];
			$this->results['averages']['cost']['increase']['m2'] = $this->results['sums']['cost']['increase']['m2'] / $this->results['counters']['inmovables'];

		}

		if ($this->results['sums']['cost']['discount']['amount'] > 0) {

			$this->results['averages']['cost']['discount']['m2'] = $this->results['sums']['cost']['discount']['m2'] / $this->results['counters']['inmovables'];
			$this->results['averages']['cost']['discount']['amount'] = $this->results['sums']['cost']['discount']['amount'] / $this->results['counters']['discount'];

		}

		$this->results['averages']['cost']['m2']['final'] = $this->results['sums']['cost']['final']['m2'] / $this->results['counters']['inmovables'];

	}

    /** Method for initialize inmovables by 1 param condition
     */
	private function initResult() {

		$this->results = [
			'sums' => [
				'area' => 0,
				'cost' => [
					'm2' => 0,
					'property' => 0,
					'increase' => [
						'amount' => 0,
						'm2' => 0,
						'property' => 0
					],
					'discount' => [
						'amount' => 0,
						'm2' => 0,
						'property' => 0
					],
					'final' => [
						'm2' => 0,
						'property' => 0
					]
				],
				'hook' => [
					'total' => 0,
					'increase' => 0,
					'discount' => 0,
					'final' => [
						'total' => 0,
						'discount' => [
							'amount' => 0,
							'total' => 0
						]
					],
				],
				'financing' => [
					'total' => 0,
					'increase' => 0,
					'discount' => 0,
					'final' => 0
				],
				'amount' => 0
			],
			'averages' => [
				'area' => 0,
				'cost' => [
					'm2' => [
						'total' => 0,
						'final' => 0
					],
					'increase' => [
						'amount' => 0,
						'm2' => 0
					],
					'discount' => [
						'amount' => 0,
						'm2' => 0
					]
				]
			],
			'counters' => [
				'inmovables' => 0,
				'increase' => 0,
				'discount' => 0,
				'hookDiscount' => 0
			]
		];

	}

	/** Method for reuqest condominium name by id
     * @param $idCondominium
     */
	private function requestCondominium($idCondominium) {
		$condominium = $this->selectBy('condominium', 'condos', 'idCondominium', $idCondominium, 'i');
		return $condominium[0]['condominium'];
	}

    /** Method for reuqest property type by id
     * @param $idPropertyType
     * @param $area
     */
	private function requestPropertyTypes($idPropertyType, $area) {

		$propertyType = $this->selectBy('type, cost_m2', 'property_types', 'idPropertyType', $idPropertyType, 'i');

		$propertyCost = $propertyType[0]['cost_m2'] * $area;

		$type = [
			'class' => $propertyType[0]['type'],
			'cost' => [
				'm2' => $propertyType[0]['cost_m2'],
				'property' => $propertyCost
			],
		];

		return $type;

    }

	/** Method for reuqest property status by id
     * @param $idPropertyStatus
     * return $status
     */
	private function requestPropertyStatus($idPropertyStatus) {
		$propertyStatus = $this->selectBy('status', 'property_status', 'idPropertyStatus', $idPropertyStatus, 'i');
		return $propertyStatus[0]['status'];
	}

}

?>
