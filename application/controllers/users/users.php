<?php

class Users {

    private const MODELS = '../../models/models.php';

    private const SELECT_MODELS = '../../models/request/select_models.php';
    private const PAGINATION = '../pagination.php';
    private const EMAIL = '../email.php';
    private const PHONE = '../phone.php';
    private const ADDRESS = '../address.php';

    private const TABLE = 'FROM users ';
    private const USERS_TEAMS_TABLE = 'FROM users_teams WHERE ';

    private const FIELDS = 'idUser, username, name, last_name, idEmail, idPhone, idGender, idAddress, idProfile, create_at';

    private const SELECT_USERS = 'SELECT idUser, username, name, last_name, idEmail, idPhone, idGender, idAddress, idProfile, create_at ';
    private const SELECT_ID_USER = 'SELECT idUser ';
    private const SELECT_ID_TEAM = 'SELECT idTeam ';

    private const BASE_COND = 'WHERE status = ? ';
    private const USER_COND = 'idUser = ? ';
    private const PROFILE_COND = '&& idProfile = ? ';
    private const TEAM_PROFILE_COND = 'idTeamProfile = ? ';
    private const TEAM_COND = '&& idTeam = ? ';
    private const NOT_USER_COND = ' idUser <> ? ';

    private const NUM_FIELDS = 10;

    private const SELECT_TEAM = 'SELECT idTeam FROM users_teams WHERE idUser = ?';

    function __construct() { 
        ;
    }

    public function getAdvisersByManager($idUser, $status, $page, $limit) {

        require_once self::SELECT_MODELS;
        $select = new SelectModels();

        require_once self::PAGINATION;
        $pagination = new Pagination($page, $limit);

        $response = NULL;

        $config = [
            'params' => [2, $idUser],
            'types' => 'ii',
            'numFields' => 1
        ];

        $queryTeam = self::SELECT_ID_TEAM.self::USERS_TEAMS_TABLE.self::TEAM_PROFILE_COND.'&& '.self::USER_COND;
        $IdTeamResult = $select->selectBy($queryTeam, $config);

        if (!is_null($IdTeamResult)) {

            $config['params'] = [3, $IdTeamResult[0]];

            $pagination->update(self::USERS_TEAMS_TABLE.self::TEAM_PROFILE_COND.self::TEAM_COND, $config);

            $query = self::SELECT_ID_USER.self::USERS_TEAMS_TABLE.self::TEAM_PROFILE_COND.self::TEAM_COND.$pagination->getLimitQuery();
            $IdUsersTeamResult = $select->selectBy($query, $config);

            if (!is_null($IdUsersTeamResult)) {
                $users = [];
                $i = 0;
                foreach ($IdUsersTeamResult as $id) {
                    $membersResult = $this->selectUserById($id, $status);
                    if (!is_null($membersResult)) {
                        $users[$i++] = $membersResult;
                    }
                }
                $response['members'] = $this->prepareUsers($users);
                $response['pagination'] = $pagination->getData();
            }
        }
        return $response;
    }

    public function getUsersByProfile($idProfile, $status, $page, $limit) {

        require_once self::SELECT_MODELS;
        $select = new SelectModels();

        require_once self::PAGINATION;
        $pagination = new Pagination($page, $limit);

        $response = NULL;

        $config = [
            'params' => [
                $status,
                $idProfile
            ],
            'types' => 'ii',
            'numFields' => 1
        ];

        $pagination->update(self::TABLE.self::BASE_COND.self::PROFILE_COND, $config);
        $query = self::SELECT_USERS.self::TABLE.self::BASE_COND.self::PROFILE_COND.$pagination->getLimitQuery();
        $config['numFields'] = self::NUM_FIELDS;
        $result = $select->selectBy($query, $config);

        if (!is_null($result)) {
            $response['members'] = $this->prepareUsers($result);
            $response['pagination'] = $pagination->getData();
        }

        return $response;

    }

    public function getFreeUsersByProfile($idProfile, $status, $page, $limit) {

        $response = NULL;
        $users = $this->getAllUsersByProfile($idProfile, $status);

        if (!is_null($users)) {
            $freeUsersResult = $this->prepareFreeUsers($users, 3);
            if (!is_null($freeUsersResult)) {

                require_once self::PAGINATION;
                $pagination = new Pagination($page, $limit);

                $pagination->setNumOfRows(count($freeUsersResult));
                $pagination->pagination();

                $response = [];

                if ($pagination->getNumOfRows() <= $limit) {
                    $response['members'] = $freeUsersResult;
                } else {
                    $response['members'] = array_slice($freeUsersResult, $pagination->getStart(), $limit);
                }
                $response['pagination'] = $pagination->getData();
            }
        }
        return $response;
    }

    private function prepareFreeUsers($users, $idProfile) {
        $freeUsersResult = [];
        foreach ($users as $key => $user) {
            $teamResult = $this->getTeamByUserProfile($user[0], $idProfile);
            (!is_null($teamResult)) ? : array_push($freeUsersResult, $user);
        }
        return (empty($freeUsersResult)) ? NULL : $this->prepareUsers($freeUsersResult);
    }

    private function getTeamByUserProfile($idUser, $idProfile) {

        require_once self::SELECT_MODELS;
        $select = new SelectModels();

        $config = [
            'params' => [$idUser, $idProfile],
            'types' => 'ii',
            'numFields' => 1
        ];

        $result = NULL;

        $query = self::SELECT_ID_TEAM.self::USERS_TEAMS_TABLE.self::USER_COND.'&& '.self::TEAM_PROFILE_COND;
        $result = $select->selectBy($query, $config);

        return (!is_null($result)) ? $result[0] : $result;
    }

    private function getAllUsersByProfile($idProfile, $status) {

        require_once self::SELECT_MODELS;
        $select = new SelectModels();

        $config = [
            'params' => [
                $status,
                $idProfile,
            ],
            'types' => 'ii',
            'numFields' => self::NUM_FIELDS
        ];

        $query = self::SELECT_USERS.self::TABLE.self::BASE_COND.self::PROFILE_COND;

        return $select->selectBy($query, $config);

    }

    public function searchByName($keyword, $idProfile, $status, $page, $limit) {

        require_once self::SELECT_MODELS;
        $select = new SelectModels();

        require_once self::PAGINATION;
        $pagination = new Pagination($page, $limit);

        $response = NULL;

        $preperedKeyword = '%'.$keyword.'%';

        $usersNameConfig = [
            'params' => [
                $status,
                $idProfile,
                $preperedKeyword
            ],
            'types' => 'iis',
            'numFields' => 1
        ];

        $nameCond = '&& CONCAT_WS(" ", name, last_name) LIKE ? ';
        $pagination->update(self::TABLE.self::BASE_COND.self::PROFILE_COND.$nameCond, $usersNameConfig);

        if ($pagination->getNumOfRows()) {
            
            $usersNameQuery = self::SELECT_USERS.self::TABLE.self::BASE_COND.self::PROFILE_COND.$nameCond.$pagination->getLimitQuery();
            $usersNameConfig['numFields'] = self::NUM_FIELDS;
            $usersNameResult = $select->selectBy($usersNameQuery, $usersNameConfig);

            if (!is_null($usersNameResult)) {
    
                $response['members'] = $this->prepareUsers($usersNameResult);
                $response['pagination'] = $pagination->getData();
    
            }

        } else {

            $emailConfig = [
                'params' => [$status, $idProfile, $preperedKeyword],
                'types' => 'iis',
                'numFields' => 1
            ];

            $emailQuery = 'FROM emails WHERE status = ? AND profile = ? AND email LIKE ? ';
            $pagination->update($emailQuery, $emailConfig);

            if ($pagination->getNumOfRows()) {

                $emailQuery = 'SELECT idEmail '.$emailQuery.$pagination->getLimitQuery();
                $emailResult = $select->selectBy($emailQuery, $emailConfig);

                if (!is_null($emailResult)) {

                    $usersEmailConfig = [
                        'params' => [0],
                        'types' => 'i',
                        'numFields' => self::NUM_FIELDS
                    ];

                    $usersByEmail = [];

                    foreach ($emailResult as $idEmail) {

                        $usersEmailConfig['params'][0] = $idEmail;
                        $usersByEmailQuery = self::SELECT_USERS.self::TABLE.'WHERE idEmail = ? ';
                        $usersByEmailResult = $select->selectBy($usersByEmailQuery, $usersEmailConfig);
                        (!is_null($usersByEmailResult)) ? array_push($usersByEmail, $usersByEmailResult[0]) : NULL;

                    }

                    if (!empty($usersByEmail)) {

                        $response['members'] = $this->prepareUsers($usersByEmail);
                        $response['pagination'] = $pagination->getData();

                    }

                }

            } else {

                $phoneConfig = [
                    'params' => [$status, 1, $idProfile, $preperedKeyword],
                    'types' => 'iiis',
                    'numFields' => 1
                ];

                $phoneQuery = 'FROM phones WHERE status = ? AND user = ? AND profile = ? AND phone LIKE ? ';
                $pagination->update($phoneQuery, $phoneConfig);

                if ($pagination->getNumOfRows()) {

                    $phoneQuery = 'SELECT idPhone '.$phoneQuery.$pagination->getLimitQuery();
                    $phoneResult = $select->selectBy($phoneQuery, $phoneConfig);

                    if (!is_null($phoneResult)) {

                        $usersPhoneConfig = [
                            'params' => [0],
                            'types' => 'i',
                            'numFields' => self::NUM_FIELDS
                        ];

                        $usersByPhone = [];

                        foreach ($phoneResult as $idPhone) {

                            $usersPhoneConfig['params'][0] = $idPhone;
                            $usersByPhoneQuery = self::SELECT_USERS.self::TABLE.'WHERE idPhone = ? ';
                            $usersByPhoneResult = $select->selectBy($usersByPhoneQuery, $usersPhoneConfig);
                            (!is_null($usersByPhoneResult)) ? array_push($usersByPhone, $usersByPhoneResult[0]) : NULL;

                        }

                        if (!empty($usersByPhoneResult)) {

                            $response['members'] = $this->prepareUsers($usersByPhone);
                            $response['pagination'] = $pagination->getData();

                        }

                    }

                }

            }

        }

        return $response;

    }

    private function prepareUsers($users) {

        require_once self::EMAIL;
        require_once self::PHONE;
        require_once self::ADDRESS;

        $email = new Email();
        $phone = new Phone();
        $address = new Address();

        $usersResult = [];

        foreach ($users as $key => $user) {

            $usersResult[$key] = [
                'id' => $user[0],
                'username' => $user[1],
                'name' => [
                    'first' => $user[2],
                    'last' => $user[3]
                ],
                'idGender' => $user[6],
                'idProfile' => $user[8],
                'create_at' => $user[9]
            ];

            $email->update($user[4]);
            $usersResult[$key]['email'] = $email->getEmail();
            
            (is_null($user[5])) ? : $phone->update($user[5]);
            $usersResult[$key]['phone'] = $phone->getPhone();

            (is_null($user[7])) ? : $address->update($user[7]);
            $usersResult[$key]['address'] = $address->getAddress();

            $teamId = $this->selectTeamByUser($usersResult[$key]['id']);
            $usersResult[$key]['team'] = (is_null($teamId)) ? 0 : $teamId[0];
        }

        return $usersResult;
    }

    // private function selectUsersByProfile($idProfile, $limit) {
    //     $select = new SelectModels();
    //     $query = self::SELECT_USERS.self::TABLE.self::BASE_COND.self::PROFILE_COND;
    //     $config = ['params' => [$idTeam, $idManager], 'types' => 'ii', 'numFields' => 1];
    //     $result = $select->selectBy($query, $config);
    //     return $result;
    // }

    private function selectUserById($idUser, $status) {
        $select = new SelectModels();
        $query = self::SELECT_USERS.self::TABLE.self::BASE_COND.'&& '.self::USER_COND;
        $config = ['params' => [$status, $idUser], 'types' => 'ii', 'numFields' => self::NUM_FIELDS];
        $result = $select->selectBy($query, $config);
        return (!is_null($result)) ? $result[0] : $result;
    }

    public function selectUser($idUser) {

        require_once self::MODELS;
        $models = new Models();

        $result = $models->selectBy(self::FIELDS, 'users', 'idUser', $idUser, 'i');

        return (!is_null($result)) ? $result[0] : $result;

    }

    private function selectTeamByUser($idUser) {
        $select = new SelectModels();
        $config = ['params' => [$idUser], 'types' => 'i', 'numFields' => 1];
        return $select->selectBy(self::SELECT_TEAM, $config);
    }

}

?>
