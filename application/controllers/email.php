<?php

class Email {
    
    private const SELECT_MODELS = '../../models/request/select_models.php';

    private const SELECT_EMAIL = 'SELECT email, idEmailDomain FROM emails WHERE idEmail = ?';
    private const SELECT_EMAIL_DOMAIN = 'SELECT domain FROM email_domains WHERE idEmailDomain = ?';

    private $email;

    function __construct() {
        $this->email = [];
    }

    public function update($id) {
        $this->email['id'] = $id;
        $emailResult = $this->selectEmailById($this->email['id']);
        $this->email['username'] = $emailResult[0][0];
        $emailDomainResult = $this->selectEmailDomainById($emailResult[0][1]);
        $this->email['domain'] = [
            'id' => $emailResult[0][1],
            'name' => $emailDomainResult[0]
        ];
    }

    public function getEmail() {
        return $this->email;
    }

    private function selectEmailById($idEmail) {
        require_once self::SELECT_MODELS;
        $select = new SelectModels();
        $config = ['params' => [$idEmail], 'types' => 'i', 'numFields' => 2];
        $resultEmail = $select->selectBy(self::SELECT_EMAIL, $config);
        return $resultEmail;
    }

    private function selectEmailDomainById($idEmailDomain) {
        require_once self::SELECT_MODELS;
        $select = new SelectModels();
        $config = ['params' => [$idEmailDomain], 'types' => 'i', 'numFields' => 1];
        return $select->selectBy(self::SELECT_EMAIL_DOMAIN, $config);
    }

}

?>
