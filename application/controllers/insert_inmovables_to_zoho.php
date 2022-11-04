<?php

define('ZOHO_CLIENT_ID', '1000.6VRHJKGRKBH5302BFI8R76BWZZPXNH');
define('ZOHO_CLIENT_SECRET', 'ca76cd3cc460ca06f8ac8682891ad31fbf7dd37b90');
define('ZOHO_REFRESH_TOKEN', '1000.9ac37ec509ec526a9c9444ca3281ab8e.93e196256155c5e7dbf662302d2d9e8e');

require_once '../models/leads_model.php';
$model = new Leads_Model();

$inmovables = $model->select('SELECT * FROM inmovables LIMIT 1600, 100', NULL, NULL);


$postFieldsInsertInmovables = '{"data": [';

$inmovablesLen = count($inmovables);

$propertyClass = [
    'null',
    '"Nave"',
    '"Terreno"',
    '"Terreno"'
];

for ($i = 0; $i < $inmovablesLen; $i++) {

    $propertyData = '{';
    $propertyData .= '"Name": "'.$inmovables[$i]['reference'].'",';


    $propertyData .= '"N_mero": "'.$inmovables[$i]['number'].'",';

    $dev = $model->selectBy('devlopment, idCompany', 'developments', 'idDevelopment', $inmovables[$i]['idDevelopment'], 'i');
    $propertyData .= '"Desarrollo": "'.$dev[0]['devlopment'].'",';

    $com = $model->selectBy('company', 'companies', 'idCompany', $dev[0]['idCompany'], 'i');
    $propertyData .= '"Empresa": "'.$com[0]['company'].'",';

    $condominium = $model->selectBy('condominium', 'condos', 'idCondominium', $inmovables[$i]['idCondominium'], 'i');
    $propertyData .= '"Condominio": "'.$condominium[0]['condominium'].'",';

    $parcela = $model->selectBy('parcela', 'parcelas', 'idParcela', $inmovables[$i]['idParcela'], 'i');
    $propertyData .= '"Cl_ster": "'.$parcela[0]['parcela'].'",';

    $type = $model->selectBy('cost_m2, type', 'property_types', 'idPropertyType', $inmovables[$i]['idPropertyType'], 'i');
    $propertyData .= '"P_U_Lista": '.$type[0]['cost_m2'].',';
    $propertyData .= '"Clase_de_Propiedad": "'.$type[0]['type'].'",';

    $propertyData .= '"Superficie": '.$inmovables[$i]['area'].',';

    $increase_field = '"Aumento": 0,';
    $discount_field = '"Descuento": 0,';
    $hook_field = '"Enganche1": 0,';
    $hook_discount_field = '"Descuento_Enganche": 0,';
    
    $propertyPromosResponse = $model->selectBy('idPromo', 'inmovables_promos', 'idProperty', $inmovables[$i]['idProperty'], 'i');
    if (!is_null($propertyPromosResponse)) {
        $propertyPromosResponseLen = count($propertyPromosResponse);
        for ($indexPropertyPromos = 0; $indexPropertyPromos < $propertyPromosResponseLen; $indexPropertyPromos++) {
            $promosResponse = $model->selectBy('idPromo, description, discount, idPromoTypes', 'promos', 'idPromo', $propertyPromosResponse[$indexPropertyPromos]['idPromo'], 'i');
            $promosResponseLen = count($promosResponse);
            for ($indexPromos = 0; $indexPromos < $promosResponseLen; $indexPromos++) {
                switch ($promosResponse[$indexPromos]['idPromoTypes']) {

                    case 1:
                        $discount_field = '"Descuento": '.$promosResponse[$indexPromos]['discount'].',';
                        break;

                    case 2:
                        $hook_discount_field = '"Descuento_Enganche": '.$promosResponse[$indexPromos]['discount'].',';
                        break;

                    case 3:
                        $increase_field = '"Aumento": '.$promosResponse[$indexPromos]['discount'].',';
                        break;
                    
                    case 4:
                        $hook_field = '"Enganche1": '.$promosResponse[$indexPromos]['discount'].',';
                        $propertyData .= '"Tipo_de_Propiedad": '.$promosResponse[$indexPromos]['description'].',';

                }
            }
        }
    }

    $propertyData .= $increase_field;
    $propertyData .= $discount_field;
    $propertyData .= $hook_field;
    $propertyData .= $hook_discount_field;

    
    $lead = $model->selectBy('idLead', 'leads_inmovables', 'idProperty', $inmovables[$i]['idProperty'], 'i');
    if (!is_null($lead)) {
        $leadName = $model->selectBy('name, last_name', 'leads', 'idLead', $lead[0]['idLead'], 'i');
        $propertyData .= '"Nombre_del_Cliente": "'.($leadName[0]['name'].' '.$leadName[0]['last_name']).'",';
    }
    
    $status = $model->selectBy('status', 'property_status', 'idPropertyStatus', $inmovables[$i]['idPropertyStatus'], 'i');
    
    $propertyData .= (!is_null($inmovables[$i]['idModule'])) ? '"M_dulo": "'.$inmovables[$i]['idModule'].'",' : '"M_dulo": "0",';

    $propertyData .= '"Estatus": "'.$status[0]['status'].'"}';
    $propertyData .= ($i >= ($inmovablesLen-1)) ? '' : ',';
    $postFieldsInsertInmovables .= $propertyData;
}


$postFieldsInsertInmovables .= '],"trigger": ["approval","workflow","blueprint"]}';

$curl_handle = curl_init();
					
$postFieldsAccessTokenRequest =
    'refresh_token='.ZOHO_REFRESH_TOKEN.'&'.
    'client_id='.ZOHO_CLIENT_ID.'&'.
    'client_secret='.ZOHO_CLIENT_SECRET.'&'.
    'grant_type=refresh_token';

$accessTokenUrl = 'https://accounts.zoho.com/oauth/v2/token';

curl_setopt_array($curl_handle, [
    CURLOPT_URL => $accessTokenUrl ,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $postFieldsAccessTokenRequest,
    CURLOPT_HTTPHEADER => [
        'cache-control: no-cache',
        'Content-Type: application/x-www-form-urlencoded'
    ]
]);

$accessTokenResult = curl_exec($curl_handle);

$accessTokenResultJSON = json_decode($accessTokenResult);

if (isset($accessTokenResultJSON->access_token)) {

    $insertContactsUrl = 'https://www.zohoapis.com/crm/v2/Inventario';

    curl_setopt_array($curl_handle, [
        CURLOPT_URL => $insertContactsUrl ,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $postFieldsInsertInmovables,
        CURLOPT_HTTPHEADER => [
            'Authorization: Zoho-oauthtoken '.$accessTokenResultJSON->access_token
        ]
    ]);

    $result = curl_exec($curl_handle);

    print_r($result);
}

curl_close ($curl_handle);

?>