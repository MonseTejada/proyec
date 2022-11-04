<?php

require '../../models/request/select_models.php';

class SelectLeadsCtrl extends SelectModels {

    private const SELECT_LEADS_STMT = 'SELECT idLead, name, last_name, idEmail, idPhone, idUser, idGender, idMedium, idAddress FROM leads WHERE status = ? ';
    private const USER_LEADS_COND = '&& idUser = ? LIMIT ';
    private const TABLE = 'FROM leads';
    private const LIMIT = 25;

    private const SELECT_EMAIL = 'SELECT email, idEmailDomain FROM emails WHERE idEmail = ?';
    private const SELECT_EMAIL_DOMAIN = 'SELECT domain FROM email_domains WHERE idEmailDomain = ?';
    private const SELECT_PHONE = 'SELECT phone, idCountryCode FROM phones WHERE idPhone = ?';
    private const SELECT_ADDRESS = 'SELECT address, idCountryCode FROM addresses WHERE idAddress = ?';
    private const SELECT_LEADS_RE_STMT = 'SELECT idProperty FROM leads_inmovables WHERE idLead = ?';

    public function getLeadsByUser($idUser, $status, $page) {
        $response = [];
        $leads = $this->getLeadsByIdUser($idUser, $status, $page);
        if (!is_null($leads)) {
            foreach ($leads as $key => $lead) {
                $response[$key] = $this->prepareUser($lead);
            }
        }
        return $response;
    }

    public function getLeadsByIdUser($idUser, $status, $page) {
        $start = ($page - 1) * self::LIMIT;
        $query = self::SELECT_LEADS_STMT.self::USER_LEADS_COND.$start.', '.self::LIMIT;;
        $config = ['params' => [$status, $idUser], 'types' => 'ii', 'numFields' => 9];
        return $this->selectBy($query, $config);
    }

    private function prepareUser($lead) {

        $leadData = [
            'id' => $lead[0],
            'name' => [
                'first' => $lead[1],
                'last' => $lead[2]
            ],
            'email' => [
                'id' => $lead[3]
            ],
            'phone' => [
                'id' => $lead[4]
            ],
            'idGender' => $lead[6],
            'idMedium' => $lead[7]
        ];

        $emailData = $this->selectEmailById($leadData['email']['id']);
        $emailDomain = $this->selectEmailDomainById($emailData[0][1]);
        $leadData['email']['name'] = $emailData[0][0];
        $leadData['email']['domain'] = [
            'id' => $emailData[0][1],
            'name' => $emailDomain[0]
        ];
        
        $phoneData = $this->selectPhoneById($leadData['phone']['id']);
        if (!is_null($phoneData)) {
            $leadData['phone']['number'] = $phoneData[0][0];
            $leadData['phone']['idCountryCode'] = $phoneData[0][1];
        }

        $addressData = (is_null($lead[8])) ? NULL : $this->selectAddressById($lead[8]);
        if (!is_null($addressData)) {
            $leadData['address'] = [
                'id' => $lead[8],
                'dir' => $addressData[0][0],
                'idCountryCode' => $addressData[0][1]
            ];
        } else {
            $leadData['address'] = NULL;
        }

        $leadData['real_estate'] = $this->selectLeadsInmovablesByLead($leadData['id']);

        return $leadData;
    }

    private function selectLeadsInmovablesByLead($idLead) {
        $config = ['params' => [$idLead], 'types' => 'i', 'numFields' => 1];
        $leadsInmovables = $this->selectBy(self::SELECT_LEADS_RE_STMT, $config);
        return $leadsInmovables;
    }

    private function selectEmailById($idEmail) {
        $config = ['params' => [$idEmail], 'types' => 'i', 'numFields' => 2];
        $resultEmail = $this->selectBy(self::SELECT_EMAIL, $config);
        return $resultEmail;
    }

    private function selectEmailDomainById($idEmailDomain) {
        $config = ['params' => [$idEmailDomain], 'types' => 'i', 'numFields' => 1];
        return $this->selectBy(self::SELECT_EMAIL_DOMAIN, $config);
    }

    private function selectPhoneById($idPhone) {
        $config = ['params' => [$idPhone], 'types' => 'i', 'numFields' => 2];
        return $this->selectBy(self::SELECT_PHONE, $config);
    }

    private function selectAddressById($idAddress) {
        $config = ['params' => [$idAddress], 'types' => 'i', 'numFields' => 2];
        return $this->selectBy(self::SELECT_ADDRESS, $config);
    }




    public function selectLeadsByIdLead($idLead, $status) {
        $query = 'SELECT name, last_name, idEmail, idPhone, idUser, idGender, idMedium, idAddress '.self::TABLE.' WHERE idLead = ? && status = ?';
        $config = ['params' => [$idLead, $status], 'types' => 'ii', 'numFields' => 8];
        return $this->selectBy($query, $config);
    }

    public function selectLeadsByIdUser($idUser, $status) {
        $query = 'SELECT idLead, name, last_name, idEmail, idPhone, idGender, idMedium, idAddress '.self::TABLE.' WHERE idUser = ? && status = ?';
        $config = ['params' => [$idUser, $status], 'types' => 'ii', 'numFields' => 8];
        return $this->selectBy($query, $config);
    }

    public function selectLeadsByIdEmail($idEmail, $status) {
        $query = 'SELECT idLead, name, last_name, idPhone, idUser, idGender, idMedium, idAddress '.self::TABLE.' WHERE idEmail = ? && status = ?';
        $config = ['params' => [$idEmail, $status], 'types' => 'ii', 'numFields' => 8];
        return $this->selectBy($query, $config);
    }

    public function selectLeadsByIdPhone($idPhone, $status) {
        $query = 'SELECT idLead, name, last_name, idEmail, idUser, idGender, idMedium, idAddress '.self::TABLE.' WHERE idPhone = ? && status = ?';
        $config = ['params' => [$idPhone, $status], 'types' => 'ii', 'numFields' => 8];
        return $this->selectBy($query, $config);
    }

    public function selectLeadsByIdMedium($idMedium, $status) {
        $query = 'SELECT idLead, name, last_name, idEmail, idPhone, idUser, idGender, idAddress '.self::TABLE.' WHERE idMedium = ? && status = ?';
        $config = ['params' => [$idMedium, $status], 'types' => 'ii', 'numFields' => 8];
        return $this->selectBy($query, $config);
    }

    public function selectLeadsByIdGender($idGender, $status) {
        $query = 'SELECT idLead, name, last_name, idEmail, idPhone, idUser, idMedium, idAddress '.self::TABLE.' WHERE idGender = ? && status = ?';
        $config = ['params' => [$idGender, $status], 'types' => 'ii', 'numFields' => 8];
        return $this->selectBy($query, $config);
    }

    public function selectLeadsByStatus($status) {
        $query = 'SELECT idLead, name, last_name, idEmail, idPhone, idUser, idGender, idMedium, idAddress '.self::TABLE.' WHERE status = ?';
        $config = ['params' => [$status], 'types' => 'i', 'numFields' => 9];
        return $this->selectBy($query, $config);
    }
}

?>
