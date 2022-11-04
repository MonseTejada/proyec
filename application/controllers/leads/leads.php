<?php

class Leads {

    private const SELECT_MODELS = '../../models/request/select_models.php';
    private const MODELS = '../../models/models.php';
    private const PAGINATION = '../pagination.php';
    private const EMAIL = '../email.php';
    private const PHONE = '../phone.php';
    private const ADDRESS = '../address.php';

    private const TABLE = 'FROM leads ';

    private const FIELDS = 'idLead, name, last_name, idEmail, idPhone, idUser, idGender, idMedium, idAddress, create_at';
    private const SELECT_LEADS = 'SELECT idLead, name, last_name, idEmail, idPhone, idUser, idGender, idMedium, idAddress, create_at ';
    private const SELECT_LEADS_RE_STMT = 'SELECT idProperty FROM leads_inmovables WHERE idLead = ? ';
    private const SELECT_LEAD_BY_PROPERTY = 'SELECT idLead FROM leads_inmovables WHERE idProperty = ? ';

    private const BASE_COND = 'WHERE status = ? ';
    private const USER_COND = '&& idUser = ? ';

    private const NUM_FIELDS = 10;

    public function searchByName($keyword, $status, $page, $limit) {

        require_once self::SELECT_MODELS;
        $select = new SelectModels();

        require_once self::PAGINATION;
        $pagination = new Pagination($page, $limit);

        $response = [];

        $preperedKeyword = '%'.$keyword.'%';

        $config = [
            'params' => [
                $status,
                $preperedKeyword
            ],
            'types' => 'is',
            'numFields' => 1
        ];

        $leadsQuery = self::TABLE.self::BASE_COND.'AND CONCAT_WS(" ", name, last_name) LIKE ? ';

        $pagination->update($leadsQuery, $config);

        if ($pagination->getNumOfRows()) {

            $query = self::SELECT_LEADS.$leadsQuery.$pagination->getLimitQuery();
            $config['numFields'] = self::NUM_FIELDS;
            $result = $select->selectBy($query, $config);

            if (!is_null($result)) {

                $response['members'] = $this->prepareLeads($result);
                $response['pagination'] = $pagination->getData();

            }

        } else {

            $emailConfig = [
                'params' => [$status, 0, $preperedKeyword],
                'types' => 'iis',
                'numFields' => 1
            ];

            $emailQuery = 'FROM emails WHERE status = ? AND profile = ? AND email LIKE ? ';
            $pagination->update($emailQuery, $emailConfig);

            if ($pagination->getNumOfRows()) {

                $emailQuery = 'SELECT idEmail '.$emailQuery.$pagination->getLimitQuery();
                $emailResult = $select->selectBy($emailQuery, $emailConfig);

                if (!is_null($emailResult)) {

                    $leadsEmailConfig = [
                        'params' => [0],
                        'types' => 'i',
                        'numFields' => self::NUM_FIELDS
                    ];

                    $leadsByEmail = [];

                    foreach ($emailResult as $idEmail) {

                        $leadsEmailConfig['params'][0] = $idEmail;
                        $leadsByEmailQuery = self::SELECT_LEADS.self::TABLE.'WHERE idEmail = ? ';
                        $leadsByEmailResult = $select->selectBy($leadsByEmailQuery, $leadsEmailConfig);
                        (!is_null($leadsByEmailResult)) ? array_push($leadsByEmail, $leadsByEmailResult[0]) : NULL;

                    }

                    if (!empty($leadsByEmailResult)) {

                        $response['members'] = $this->prepareLeads($leadsByEmail);
                        $response['pagination'] = $pagination->getData();

                    }

                }

            } else {

                $phoneConfig = [
                    'params' => [$status, 2, $preperedKeyword],
                    'types' => 'iis',
                    'numFields' => 1
                ];

                $phoneQuery = 'FROM phones WHERE status = ? AND user = ? AND phone LIKE ? ';
                $pagination->update($phoneQuery, $phoneConfig);

                if ($pagination->getNumOfRows()) {

                    $phoneQuery = 'SELECT idPhone '.$phoneQuery.$pagination->getLimitQuery();
                    $phoneResult = $select->selectBy($phoneQuery, $phoneConfig);

                    if (!is_null($phoneResult)) {

                        $leadsPhoneConfig = [
                            'params' => [0],
                            'types' => 'i',
                            'numFields' => self::NUM_FIELDS
                        ];

                        $leadsByPhone = [];

                        foreach ($phoneResult as $idPhone) {

                            $leadsPhoneConfig['params'][0] = $idPhone;
                            $leadsByPhoneQuery = self::SELECT_LEADS.self::TABLE.'WHERE idPhone = ? ';
                            $leadsByPhoneResult = $select->selectBy($leadsByPhoneQuery, $leadsPhoneConfig);
                            (!is_null($leadsByPhoneResult)) ? array_push($leadsByPhone, $leadsByPhoneResult[0]) : NULL;

                        }

                        if (!empty($leadsByPhoneResult)) {

                            $response['members'] = $this->prepareLeads($leadsByPhone);
                            $response['pagination'] = $pagination->getData();

                        }

                    }

                }

            }

        }

        return $response;

    }

    public function getLeadsByStatus($status, $page, $limit) {

        require_once self::SELECT_MODELS;
        $select = new SelectModels();

        require_once self::PAGINATION;
        $pagination = new Pagination($page, $limit);

        $response = NULL;

        $config = [
            'params' => [
                $status
            ],
            'types' => 'i',
            'numFields' => 1
        ];

        $pagination->update(self::TABLE.self::BASE_COND, $config);
        $query = self::SELECT_LEADS.self::TABLE.self::BASE_COND.$pagination->getLimitQuery();
        $config['numFields'] = self::NUM_FIELDS;
        $result = $select->selectBy($query, $config);

        if (!is_null($result)) {
            $response['members'] = $this->prepareLeads($result);
            $response['pagination'] = $pagination->getData();
        }

        return $response;

    }

    public function getLeadsByIdUser($idUser, $status, $page, $limit) {

        require_once self::SELECT_MODELS;
        $select = new SelectModels();

        require_once self::PAGINATION;
        $pagination = new Pagination($page, $limit);

        $response = NULL;

        $config = [
            'params' => [
                $status,
                $idUser
            ],
            'types' => 'ii',
            'numFields' => 1
        ];

        $pagination->update(self::TABLE.self::BASE_COND.self::USER_COND, $config);
        $query = self::SELECT_LEADS.self::TABLE.self::BASE_COND.self::USER_COND.$pagination->getLimitQuery();;
        $config['numFields'] = self::NUM_FIELDS;
        $result = $select->selectBy($query, $config);

        if (!is_null($result)) {
            $response['members'] = $this->prepareLeads($result);
            $response['pagination'] = $pagination->getData();
        }

        return $response;

    }

    private function prepareLeads($leads) {

        require_once self::EMAIL;
        require_once self::PHONE;
        require_once self::ADDRESS;
        
        $email = new Email();
        $phone = new Phone();
        $address = new Address();

        $leadsResult = [];

        foreach ($leads as $key => $lead) {

            $leadsResult[$key] = [
                'id' => $lead[0],
                'name' => [
                    'first' => $lead[1],
                    'last' => $lead[2]
                ],
                'idGender' => $lead[6],
                'idMedium' => $lead[7],
                'create_at' => $lead[9]
            ];

            $email->update($lead[3]);
            $leadsResult[$key]['email'] = $email->getEmail();
            
            (is_null($lead[4])) ? : $phone->update($lead[4]);
            $leadsResult[$key]['phone'] = $phone->getPhone();

            (is_null($lead[8])) ? : $address->update($lead[8]);
            $leadsResult[$key]['address'] = $address->getAddress();
        }

        $leadsResult[$key]['real_estate'] = $this->selectLeadsInmovablesByLead($leadsResult[$key]['id']);

        return $leadsResult;
    }

    private function selectLeadsInmovablesByLead($idLead) {
        $select = new SelectModels();
        $config = ['params' => [$idLead], 'types' => 'i', 'numFields' => 1];
        $leadsInmovables = $select->selectBy(self::SELECT_LEADS_RE_STMT, $config);
        return $leadsInmovables;
    }

    public function selectIdLeadByIdProperty($idProperty) {

        require_once self::MODELS;
        $models = new Models();

        $idLead = $models->selectBy('idLead', 'leads_inmovables', 'idProperty', $idProperty, 'i');

        return (is_null($idLead)) ? NULL : $idLead[0]['idLead'];

    }

    public function selectLeadById($idLead) {

        require_once self::MODELS;
        $models = new Models();

        $lead = $models->selectBy(self::FIELDS, 'leads', 'idLead', $idLead, 'i');

        return (is_null($lead)) ? NULL : $lead[0];

    }

    public function selectLeadsByStatus($status) {

        require_once self::MODELS;
        $models = new Models();

        $lead = $models->selectBy(self::FIELDS, 'leads', 'status', $status, 'i');

        return $lead;

    }

}

?>
