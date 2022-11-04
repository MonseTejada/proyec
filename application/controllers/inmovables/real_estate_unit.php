<?php

require_once 'parcel.php';

class RealEstateUnit {

    private const RE_UNIT_FIELDS = 'idCompany, company';
    private const DEVELOPMENTS_FIELDS = 'idDevelopment, devlopment, idCompany';
    private const CLUSTERS_FIELDS = 'idParcela, parcela, idDevelopment';
    private const CONDOS_FIELDS = 'idCondominium, condominium, idParcela';

    private const RE_UNIT_TABLE = 'companies';
    private const DEVELOPMENTS_TABLE = 'developments';
    private const CLUSTERS_TABLE = 'parcelas';
    private const CONDOS_TABLE = 'condos';

    private const RE_UNIT_NAME_FIELD = 'company';
    private const RE_UNIT_ID_FIELD = 'idCompany';
    private const DEVELOPMENT_ID_FIELD = 'idDevelopment';
    private const CLUSTER_ID_FIELD = 'idParcela';

    private $realEstateUnit;
    private $developments;
    private $clusters;
    private $condos;

    function __construct() {
        $this->realEstateUnit = new Parcel();
        $this->developments = new Parcel();
        $this->clusters = new Parcel();
        $this->condos = new Parcel();
    }

    public function selecRealEstateById($idCompany) {
        $this->realEstateUnit->select(self::RE_UNIT_FIELDS, self::RE_UNIT_TABLE, self::RE_UNIT_ID_FIELD, $idCompany, 'i');
        return $this->realEstateUnit->isSet();
    }

    public function selectRealEstateUnitByName($name) {
        $this->realEstateUnit->select(self::RE_UNIT_FIELDS, self::RE_UNIT_TABLE, self::RE_UNIT_NAME_FIELD, $name, 's');
        return $this->realEstateUnit->isSet();
    }

    public function selectDevelopments($idCompany) {
        $this->developments->select(self::DEVELOPMENTS_FIELDS, self::DEVELOPMENTS_TABLE, self::RE_UNIT_ID_FIELD, $idCompany, 'i');
        return $this->developments->isSet();
    }

    public function selectClusters($idDevelopment) {
        $this->clusters->select(self::CLUSTERS_FIELDS, self::CLUSTERS_TABLE, self::DEVELOPMENT_ID_FIELD, $idDevelopment, 'i');
        return $this->clusters->isSet();
    }

    public function selectCondos($idCluster) {
        $this->condos->select(self::CONDOS_FIELDS, self::CONDOS_TABLE, self::CLUSTER_ID_FIELD, $idCluster, 'i');
        return $this->condos->isSet();
    }

    public function selectEnviroment($idCompany) {
        return ($this->selectDevelopments($idCompany)) ? $this->selectDevelopmentEnviroment($this->developments->getFirst()[self::DEVELOPMENT_ID_FIELD]) : false;
    }

    public function selectDevelopmentEnviroment($idDevelopment) {
        return ($this->selectClusters($idDevelopment)) ? $this->selectCondos($this->clusters->getFirst()[self::CLUSTER_ID_FIELD]) : false;
    }

    public function getRealEstatUnit() {
        return $this->realEstateUnit->get();
    }

    public function getDevelopments() {
        return $this->developments->get();
    }

    public function getClusters() {
        return $this->clusters->get();
    }

    public function getCondos() {
        return $this->condos->get();
    }

    public function getEnviroment() {
        return json_encode([
            'developments' => $this->developments->get(),
            'clusters' => $this->clusters->get(),
            'condos' => $this->condos->get()
        ]);
    }

    public function getDevelopmentEnviroment() {
        return json_encode([
            'clusters' => $this->clusters->get(),
            'condos' => $this->condos->get()
        ]);
    }

}

?>
