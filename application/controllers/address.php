<?php

class Address {
    
    private const SELECT_MODELS = '../../models/request/select_models.php';

    private const SELECT_ADDRESS = 'SELECT address, idCountryCode FROM addresses WHERE idAddress = ?';

    private $address;

    function __construct() {
        $this->address = NULL;
    }

    public function update($id) {
        $this->address['id'] = $id;
        $result = $this->selectAddressById($this->address['id']);
        if (!is_null($result)) {
            $this->address['dir'] = $result[0][0];
            $this->address['idCountryCode'] = $result[0][1];
        } else {
            $this->address = NULL;
        }
    }

    public function getAddress() {
        return $this->address;
    }

    private function selectAddressById($idAddress) {
        require_once self::SELECT_MODELS;
        $select = new SelectModels();
        $config = ['params' => [$idAddress], 'types' => 'i', 'numFields' => 2];
        return $select->selectBy(self::SELECT_ADDRESS, $config);
    }

}

?>
