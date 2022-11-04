<?php

require '../../models/request/select_models.php';

class SelectUsersCtrl extends SelectModels {

    private const TABLE = 'FROM users';

    public function selectUsersByIdUser($idUser, $status) {
        $query = 'SELECT username, name, last_name, idEmail, idPhone, idGender, idAddress, idProfile '.self::TABLE.' WHERE idUser = ? && status = ?';
        $config = ['params' => [$idUser, $status], 'types' => 'ii', 'numFields' => 8];
        return $this->selectBy($query, $config);
    }

    public function selectUsersByIdProfile($idProfile, $status) {
        $query = 'SELECT idUser, username, name, last_name, idEmail, idPhone, idGender, idAddress '.self::TABLE.' WHERE idUser = ? && status = ?';
        $config = ['params' => [$idUser, $status], 'types' => 'ii', 'numFields' => 8];
        return $this->selectBy($query, $config);
    }

    public function selectUsersByIdEmail($idEmail, $status) {
        $query = 'SELECT idUser, username, name, last_name, idPhone, idGender, idAddress, idProfile '.self::TABLE.' WHERE idEmail = ? && status = ?';
        $config = ['params' => [$idEmail, $status], 'types' => 'ii', 'numFields' => 8];
        return $this->selectBy($query, $config);
    }

    public function selectUsersByIdPhone($idPhone, $status) {
        $query = 'SELECT idUser, username, name, last_name, idEmail, idGender, idAddress, idProfile '.self::TABLE.' WHERE idPhone = ? && status = ?';
        $config = ['params' => [$idPhone, $status], 'types' => 'ii', 'numFields' => 8];
        return $this->selectBy($query, $config);
    }

    public function selectUsersByIdGender($idGender, $status) {
        $query = 'SELECT idUser, username, name, last_name, idEmail, idPhone, idAddress, idProfile '.self::TABLE.' WHERE idGender = ? && status = ?';
        $config = ['params' => [$idGender, $status], 'types' => 'ii', 'numFields' => 8];
        return $this->selectBy($query, $config);
    }

    public function selectUsersByStatus($status) {
        $query = 'SELECT idUser, username, name, last_name, idEmail, idPhone, idGender, idAddress, idProfile '.self::TABLE.' WHERE status = ?';
        $config = ['params' => [$status], 'types' => 'i', 'numFields' => 9];
        return $this->selectBy($query, $config);
    }
}

?>
