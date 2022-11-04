<?php

session_start();

require_once '../models/users_model.php';
$model = new Users_Model();

$statusResponse = -1;
$response;
if (isset($_SESSION['idUser'])) {

    $data = file_get_contents("php://input");
    $request = json_decode($data);

    $updateProfileResponse = $model->update('users', 'idProfile', $request->idProfile, 'idUser', $request->idUser, 'ii');

    if ($updateProfileResponse) {

        $statusResponse = 1;

        $selectUserDataResponse = $model->selectBy('idEmail, idPhone', 'users', 'idUser', $request->idUser, 'i');

        if (!is_null($selectUserDataResponse)) {

            $model->update('emails', 'profile', $request->idProfile, 'idEmail', $selectUserDataResponse[0]['idEmail'], 'ii');
            $model->update('phones', 'profile', $request->idProfile, 'idPhone', $selectUserDataResponse[0]['idPhone'], 'ii');

        }

        if ($request->idProfile == 2) {

            $selectIdTeamResponse = $model->selectBy('idTeam', 'users_teams', 'idUser', $request->idUser, 'i');

            if (is_null($selectIdTeamResponse)) {

                $selectTeamsResponse = $model->select('SELECT idTeam FROM teams ORDER BY idTeam DESC LIMIT 1 ', NULL, NULL);

                if (!is_null($selectTeamsResponse)) {

                    $teamName = 'Equipo '.strval(++$selectTeamsResponse[0]['idTeam']);
                    $insertTeamResponse = $model->insertAB('teams', 'team', $teamName, 'description', 'Equipo de ventas', 'ss');

                    if (!is_null($insertTeamResponse)) {
                        $insertUsersTeamsResponse = $model->insertABC('users_teams', 'idUser', $request->idUser, 'idTeam', $insertTeamResponse, 'idTeamProfile', 2, 'iii');
                    }

                }

            }

        }

        $response ='{"status": '.$statusResponse.', "errorReport": '.json_encode($model->errorReport).'}';

    } else {

        print_r('Nope');
        $statusResponse = 0;

    }

} else {

    $model->destroySession();
    $response ='{"status": '.$statusResponse.'}';

}

echo $response;

?>