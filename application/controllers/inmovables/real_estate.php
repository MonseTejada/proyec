<?php

require_once 'parcels.php';

class RealEstate {

    private const GET_DEVS_BY_COMPANY = 'SELECT idDevelopment, devlopment FROM developments WHERE idCompany = ?';
    private const GET_CLUSTERS_BY_DEV = 'SELECT idParcela, parcela FROM parcelas WHERE idDevelopment = ?';
    private const GET_CONDOS_BY_CLUSTER = 'SELECT idCondominium, condominium FROM condos WHERE idParcela = ?';

    private $realEstate;
    private $devs;
    private $clusters;
    private $condos;
    private $config;

    function __construct() {

        $this->realEstate = NULL;
        $this->devs = new Parcels();
        $this->clusters = new Parcels();
        $this->condos = new Parcels();

        $this->config = [
            'params' => [],
            'types' => 'i',
            'numFields' => 2
        ];

    }

    public function request($idCompany) {
        $this->getDevsByCompany($idCompany);
        if (!$this->devs->isEmpty()) {
            $this->getClustersByDev($this->devs->getByKey(0)['id']);
            if (!$this->clusters->isEmpty()) {
                $this->getCondosByCluster($this->clusters->getByKey(0)['id']);
                if (!$this->condos->isEmpty()) {
                    $this->realEstate = [
                        'devs' => $this->devs->get(),
                        'clusters' => $this->clusters->get(),
                        'condos' => $this->condos->get()
                    ];
                    return true;
                }
            }
        }
        return false;
    }

    public function updateDevelopment($idDevelopment) {
        $this->getClustersByDev($idDevelopment);
        if (!$this->clusters->isEmpty()) {
            $this->getCondosByCluster($this->clusters->getByKey(0)['id']);
            if (!$this->condos->isEmpty()) {
                $this->realEstate = [
                    'clusters' => $this->clusters->get(),
                    'condos' => $this->condos->get()
                ];
                return true;
            }
        }
        return false;
    }

    public function updateCluster($idCluster) {
        $this->getCondosByCluster($idCluster);
        if (!$this->condos->isEmpty()) {
            $this->realEstate = [
                'condos' => $this->condos->get()
            ];
            return true;
        }
        return false;
    }

    public function getAsJSON() {
        return json_encode($this->realEstate);
    }

    private function getDevsByCompany($idCompany) {
        $this->config['params'][0] = $idCompany;
        $this->devs->select(self::GET_DEVS_BY_COMPANY, $this->config);
    }

    private function getClustersByDev($idDevelopment) {
        $this->config['params'][0] = $idDevelopment;
        $this->clusters->select(self::GET_CLUSTERS_BY_DEV, $this->config);
    }

    private function getCondosByCluster($idCluster) {
        $this->config['params'][0] = $idCluster;
        $this->condos->select(self::GET_CONDOS_BY_CLUSTER, $this->config);
    }

}

?>
