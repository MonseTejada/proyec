<?php

require_once "model.php";

class Auth_Model extends Model {

    /** Method for get users by username
     * @param $username
     * @return $response
     */
	public function auth($username, $password) {
		$userResult = $this->selectBy('*', 'users', 'username', $username, 's');
		$response = 0;
		if (!is_null($userResult)) {
			if ($userResult[0]['status'] && password_verify($password, $userResult[0]["password"])) {
				ini_set('session.gc_maxlifetime', 3600);
				session_set_cookie_params(3600);
				session_start();
				$_SESSION['idUser'] = $userResult[0]['idUser'];
				$_SESSION['username'] = $userResult[0]['username'];
				$_SESSION['name'] = $userResult[0]['name'];
				$_SESSION['last_name'] = $userResult[0]['last_name'];
				$_SESSION['idProfile'] = $userResult[0]['idProfile'];
				$_SESSION['userStatus'] = $userResult[0]['status'];
				$response = 1;
			}
		}
		return $response;
    }
}

?>