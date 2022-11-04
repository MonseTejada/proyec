<?php

$response = [
    'status' => 503,
    'message' => 'Servidor no disponible',
    'result' => NULL
];

session_start();

if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
    $params = json_decode($data, true);

    require_once "../leads/leads.php";
    $leads = new Leads();

    require_once "../users/users.php";
    $users = new Users();

    require_once "../../models/models.php";
    $models = new Models();

    $idLead = $leads->selectIdLeadByIdProperty($params['idProperty']);

    if (!is_null($idLead)) {

        $lead = $leads->selectLeadById($idLead);

        if (!is_null($lead)) {

            $email = $models->selectBy('email, idEmailDomain', 'emails', 'idEmail', $lead['idEmail'], 'i');
            $domain = $models->selectBy('domain', 'email_domains', 'idEmailDomain', $email[0]['idEmailDomain'], 'i');
            $phone = $models->selectBy('phone', 'phones', 'idPhone', $lead['idPhone'], 'i');
            $medium = $models->selectBy('medium', 'contact_media', 'idMedium', $lead['idMedium'], 'i');
            $gender = $models->selectBy('gender', 'genders', 'idGender', $lead['idGender'], 'i');
            $address = (!is_null($lead['idAddress'])) ? $models->selectBy('address', 'addresses', 'idAddress', $lead['idAddress'], 'i') : NULL;

            $lead['email'] = $email[0]['email'] . '@' . $domain[0]['domain'];
            $lead['phone'] = $phone[0]['phone'];
            $lead['medium'] = $medium[0]['medium'];
            $lead['gender'] = $gender[0]['gender'];
            $lead['address'] = (!is_null($address)) ? $address[0]['address'] : 'Sin especificar';
            $lead['create_at'] = (!is_null($lead['create_at'])) ? $lead['create_at'] : 'Sin especificar';

            $user = $users->selectUser($lead['idUser']);

            if (!is_null($user)) {

                $email = $models->selectBy('email, idEmailDomain', 'emails', 'idEmail', $user['idEmail'], 'i');
                $domain = $models->selectBy('domain', 'email_domains', 'idEmailDomain', $email[0]['idEmailDomain'], 'i');
                $phone = $models->selectBy('phone', 'phones', 'idPhone', $user['idPhone'], 'i');
                $gender = $models->selectBy('gender', 'genders', 'idGender', $user['idGender'], 'i');
                $address = (!is_null($user['idAddress'])) ? $models->selectBy('address', 'addresses', 'idAddress', $user['idAddress'], 'i') : NULL;

                $user['email'] = $email[0]['email'] . '@' . $domain[0]['domain'];
                $user['phone'] = $phone[0]['phone'];
                $user['gender'] = $gender[0]['gender'];
                $user['address'] = (!is_null($address)) ? $address[0]['address'] : 'Sin especificar';
                $user['create_at'] = (!is_null($user['create_at'])) ? $user['create_at'] : 'Sin especificar';

            } else {
                $user = [
                    'name' => '-',
                    'last_name' => '-',
                    'email' => '-',
                    'phone' => '-',
                    'gender' => '-',
                    'address' => '-',
                    'create_at' => '-'
                ];
            }
        }

        $response['status'] = 200;
        $response['message'] = 'SUCCESS';
        $response['result'] = [
            'lead' => $lead,
            'user' => $user
        ];

	} else {

        $response['status'] = 204;
        $response['message'] = 'Error al solicitar datos de Desarrollos';

    }

} else {

    $response['status'] = 511;
    $response['message'] = 'Se necesita autentificación';

}

echo json_encode($response);

?>
