<?php

class Phone {
    
    private const SELECT_MODELS = '../../models/request/select_models.php';

    private const SELECT_PHONE = 'SELECT phone, idCountryCode FROM phones WHERE idPhone = ?';

    private $phone;

    function __construct() {
        $this->phone = NULL;
    }

    public function update($id) {
        $this->phone['id'] = $id;
        $result = $this->selectPhoneById($this->phone['id']);
        if (!is_null($result)) {
            $this->phone['number'] = $result[0][0];
            $this->phone['idCountryCode'] = $result[0][1];
        } else {
            $this->phone = NULL;
        }
    }

    public function getPhone() {
        return $this->phone;
    }

    private function selectPhoneById() {
        require_once self::SELECT_MODELS;
        $select = new SelectModels();
        $config = ['params' => [$this->phone['id']], 'types' => 'i', 'numFields' => 2];
        return $select->selectBy(self::SELECT_PHONE, $config);
    }

}

?>
