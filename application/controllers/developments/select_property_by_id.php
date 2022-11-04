<?php

$response = [
    'status' => 503,
    'message' => 'Servidor no disponible'
];

$data = file_get_contents("php://input");
$params = json_decode($data, true);

require_once "../inmovables/inmovables.php";
$inmovables = new Inmovables(0, 0);

require_once "../leads/leads.php";
$leads = new Leads();

require_once "../users/users.php";
$users = new Users();

$response['property'] = $inmovables->selectPropertyById($params['idProperty']);

if (!is_null($response['property'])) {

    $idLead = $leads->selectIdLeadByIdProperty($params['idProperty']);

    if (!is_null($idLead)) {

        $lead = $leads->selectLeadById($idLead);

        if (!is_null($lead)) {

            $email = $inmovables->selectBy('email, idEmailDomain', 'emails', 'idEmail', $lead['idEmail'], 'i');
            $domain = $inmovables->selectBy('domain', 'email_domains', 'idEmailDomain', $email[0]['idEmailDomain'], 'i');
            $phone = $inmovables->selectBy('phone', 'phones', 'idPhone', $lead['idPhone'], 'i');
            $medium = $inmovables->selectBy('medium', 'contact_media', 'idMedium', $lead['idMedium'], 'i');
            $gender = $inmovables->selectBy('gender', 'genders', 'idGender', $lead['idGender'], 'i');
            $address = (!is_null($lead['idAddress'])) ? $inmovables->selectBy('address', 'addresses', 'idAddress', $lead['idAddress'], 'i') : NULL;

            $lead['email'] = $email[0]['email'] . '@' . $domain[0]['domain'];
            $lead['phone'] = $phone[0]['phone'];
            $lead['medium'] = $medium[0]['medium'];
            $lead['gender'] = $gender[0]['gender'];
            $lead['address'] = (!is_null($address)) ? $address[0]['address'] : 'Sin especificar';
            $lead['create_at'] = (!is_null($lead['create_at'])) ? $lead['create_at'] : 'Sin especificar';

            $user = $users->selectUser($lead['idUser']);

            if (!is_null($user)) {

                $email = $inmovables->selectBy('email, idEmailDomain', 'emails', 'idEmail', $user['idEmail'], 'i');
                $domain = $inmovables->selectBy('domain', 'email_domains', 'idEmailDomain', $email[0]['idEmailDomain'], 'i');
                $phone = $inmovables->selectBy('phone', 'phones', 'idPhone', $user['idPhone'], 'i');
                $gender = $inmovables->selectBy('gender', 'genders', 'idGender', $user['idGender'], 'i');
                $address = (!is_null($user['idAddress'])) ? $inmovables->selectBy('address', 'addresses', 'idAddress', $user['idAddress'], 'i') : NULL;

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

        $response['property']['owner'] = $lead;
        $response['property']['adviser'] = $user;

    }

    $response['status'] = 200;
    $response['message'] = 'SUCCESS';

} else {

	$response['status'] = 204;
	$response['message'] = 'Error al solicitar datos de Propiedad';

}

echo json_encode($response);

?>
