<?php

class Condos {

    private const SELECT_MODELS = '../../models/request/select_models.php';
    private const BASE_SELECT = 'SELECT idCondominium, condominium FROM condos ';
    private const BY_PARCELA_ID = 'WHERE idParcela = ?';

    private $members;
    private $JSONResponse;
    private $length;

    function __construct() {
        $this->members = NULL;
        $this->JSONResponse = "";
        $this->length = 0;
    }

    public function requestByParcelaId($idParcela) {

        require_once self::SELECT_MODELS;
        $select = new SelectModels();

        $this->members = $select->selectBy(self::BASE_SELECT.self::BY_PARCELA_ID, [
            'params' => [$idParcela],
            'types' => 'i',
            'numFields' => 3
        ]);

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
