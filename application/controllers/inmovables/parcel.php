<?php

class Parcel {

    private const MODELS = '../../models/models.php';

    private $parcel;

    function __construct() {
        $this->parcel = NULL;
    }

    public function select($field, $table, $where, $value, $type) {

        require_once self::MODELS;
        $models = new Models();

        $this->parcel = $models->selectBy($field, $table, $where, $value, $type);

    }

    public function get() {
        return $this->parcel;
    }

    public function getFirst() {
        return $this->parcel[0];
    }

    public function isEmpty() {
        return is_null($this->parcel);
    }

    public function isSet() {
        return !$this->isEmpty($this->parcel);
    }

}

?>
