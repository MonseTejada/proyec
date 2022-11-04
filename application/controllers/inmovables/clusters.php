<?php

class Clusters {

    private const MODELS = '../../models/models.php';
    private const FIELDS = 'idParcela, parcela';
    private const TABLE = 'parcelas';

    private $members;
    private $JSONResponse;
    private $length;

    function __construct() {
        $this->members = NULL;
        $this->JSONResponse = "";
        $this->length = 0;
    }

    public function requestByDevelopmentId($idDevelopment) {

        require_once self::MODELS;
        $models = new Models();

        $this->members = $models->selectBy(self::FIELDS, self::TABLE, 'idDevelopment', $idDevelopment, 'i');

        $this->prepareResponse();

    }

    public function get() {
        return $this->members;
    }

    public function getByKey($key) {
        return $this->members[$key];
    }

    public function getAsJSON() {
        return $this->JSONResponse;
    }

    public function length() {
        return $this->length;
    }

    public function isEmpty() {
        return is_null($this->members);
    }

    private function reset() {
        $this->members = NULL;
        $this->JSONResponse = "";
        $this->length = 0;
    }

    private function prepareResponse() {

        if (!is_null($this->members)) {

            $this->length = count($this->members);

            foreach ($this->members as $member) {

                $this->JSONResponse .= ($this->JSONResponse == "") ? : ",";

                $this->JSONResponse .= '{"id": '.$member['0'].',';
                $this->JSONResponse .= '"name": '.$member['1'].'}';

            }

        } else {

            $this->reset();

        }
 
    }

}

?>
