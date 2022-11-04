<?php

session_start();

require_once '../models/users_model.php';
$model = new Users_Model();

$statusResponse = -9;
$response;
if (isset($_SESSION['idUser'])) {

  $data = file_get_contents("php://input");
  $request = json_decode($data);

  $checkUsernameResponse = $model->selectBy('idUser', 'users', 'username', $request->username, 's');
  if (is_null($checkUsernameResponse)) {

    $checkEmailResponse = $model->checkEmail($request->email_name, $request->email_domain);
    if ($checkEmailResponse >= 0) {

      $checkPhoneResponse = $model->checkPhone($request->phone);
      if ($checkPhoneResponse > 0) {

        $insertEmailResponse = $model->insertEmail($request->email_name, $request->email_domain, $checkEmailResponse, 1, $request->idProfile);
        if ($insertEmailResponse > 0) {

          $insertUserResponse = $model->insertUser($request->username, password_hash($request->password, PASSWORD_DEFAULT), $request->name, $request->last_name, $insertEmailResponse, $_SESSION['idUser'], $request->idGender, $request->idProfile);
          if ($insertUserResponse > 0) {

            if ($request->idProfile == 2) {
              $selectIdTeamResponse = $model->select('SELECT idTeam FROM teams ORDER BY idTeam DESC LIMIT 1 ', NULL, NULL);
              if (!is_null($selectIdTeamResponse)) {
                $teamName = 'Equipo '.strval(++$selectIdTeamResponse[0]['idTeam']);
                $insertTeamResponse = $model->insertAB('teams', 'team', $teamName, 'description', 'Equipo de ventas', 'ss');
                if (!is_null($insertTeamResponse)) {
                  $insertUsersTeamsResponse = $model->insertABC('users_teams', 'idUser', $insertUserResponse, 'idTeam', $insertTeamResponse, 'idTeamProfile', 2, 'iii');
                }
              }
            }

            $statusResponse = 1;

            $insertPhoneResponse = $model->insertPhone($request->phone, 1, 2, 1, $request->idProfile);
            if ($insertPhoneResponse > 0) {
              $updateUserPhoneResponse = $model->update('users', 'idPhone', $insertPhoneResponse, 'idUser', $insertUserResponse, 'ii');
              $statusResponse = (!is_null($updateUserPhoneResponse)) ? 2 : -5;
            } else {
              $statusResponse = -4;
            }

            if (!empty($request->address)) {
              $insertAddressResponse = $model->insertABC('addresses', 'address', $request->address, 'idCountryCode', 1, 'idAddressType', $model::USER_ADDRESS_ID, 'sii');
              if ($insertAddressResponse > 0) {
                $updateAddressResponse = $model->update('users', 'idAddress', $insertAddressResponse, 'idUser', $insertUserResponse, 'ii');
                $statusResponse = (!is_null($updateAddressResponse)) ? 3 : -7;
              } else {
                $statusResponse = -6;
              }
            }

          } else {
            $statusResponse = -3;
          }
        } else {
          $statusResponse = -2;
        }
      } else {
        $statusResponse = -1;
      }
    } else {
      $statusResponse = 0;
    }
  } else {
    $statusResponse = -8;
  }


  $response ='{"status": '.$statusResponse.', "errorReport": '.json_encode($model->errorReport).'}';

} else {
	$model->destroySession();
	$response ='{"status": '.$statusResponse.'}';
}

echo $response;

?>