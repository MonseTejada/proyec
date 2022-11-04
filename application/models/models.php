<?php

class Models {

    const CONN_PATH = '../../config/database.php';
    public $errorReport;

    function __construct() {
        $this->errorReport = array();
    }

    function __destruct() {
        ;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return Array
     */
	public function selectBy($fields, $table, $where, $value, $type) {
    	$sql = 'SELECT '.$fields.' FROM '.$table.' WHERE '.$where.' = ?';
        return $this->select($sql, $value, $type);
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
	public function selectPageBy($fields, $table, $where, $value, $type, $limit) {
    	$sql = 'SELECT '.$fields.' FROM '.$table.' WHERE '.$where.' = ? '.$limit;
        return $this->select($sql, $value, $type);
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectAB($fields, $table, $whereA, $valueA, $whereB, $valueB, $types) {
        $sql = 'SELECT '.$fields.' FROM '.$table.' WHERE '.$whereA.' = ? AND '.$whereB.' = ?';
        return $this->selectByAB($sql, $valueA, $valueB, $types);
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectPageByAB($fields, $table, $whereA, $valueA, $whereB, $valueB, $types, $limit) {
        $sql = 'SELECT '.$fields.' FROM '.$table.' WHERE '.$whereA.' = ? AND '.$whereB.' = ? '.$limit;
        return $this->selectByAB($sql, $valueA, $valueB, $types);
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectBy2Handler($fields, $table, $whereA, $valueA, $whereB, $valueB, $types) {
        $sql = 'SELECT '.$fields.' FROM '.$table.' WHERE '.$whereA.' = ? AND '.$whereB.' = ?';
        return $this->selectByAB($sql, $valueA, $valueB, $types);
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return Array
     */
    public function selectFrom($fields, $table) {
        $sql = 'SELECT '.$fields.' FROM '.$table;
        return $this->select($sql, NULL, NULL);
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectPageFrom($fields, $table, $limit) {
        $sql = 'SELECT '.$fields.' FROM '.$table.' '.$limit;
        return $this->select($sql, NULL, NULL);
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return Array
     */
    public function select($sql, $value, $type) {
        require self::CONN_PATH;
        $response = NULL;
        if ($stmt = $conn->prepare($sql)) {
            if (!is_null($value)) {
                $stmt->bind_param($type, $valueParam);
                $valueParam = $value;
            }
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if (mysqli_num_rows($result) > 0) {
                    $response = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($response, $row);
                    }
                }
            }
        }
        mysqli_free_result($result);
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectNull($sql) {
        require self::CONN_PATH;
        $response = NULL;

        $result = $conn->query($sql);
        if ($stmt = $conn->prepare($sql)) {
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if (mysqli_num_rows($result) > 0) {
                    $response = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($response, $row);
                    }
                }
            }
        }
        mysqli_free_result($result);
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function select1By2($config) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'SELECT '.$config['field'].' FROM '.$config['table'].' WHERE '.$config['whereA'].' = ? '. $config['operator']. ' ' .$config['whereB'].' = ?';
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($config['types'], $paramValueA, $paramValueB);
            $paramValueA = $config['valueA'];
            $paramValueB = $config['valueB'];
            if ($stmt->execute()) {
                $stmt->bind_result($result);
                $stmt->store_result();
                if ($stmt->num_rows > 0) {
                    $response = array();
                    while ($stmt->fetch()) {
                        array_push($response, $result);
                    }
                }
            }
            $stmt->free_result();
            $stmt->close();
        }
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectByAB($sql, $valueA, $valueB, $types) {
        require self::CONN_PATH;
        $response = NULL;
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $valueParamA, $valueParamB);
            $valueParamA = $valueA;
            $valueParamB = $valueB;
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if (mysqli_num_rows($result) > 0) {
                    $response = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($response, $row);
                    }
                }
            }
        }
        mysqli_free_result($result);
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function insert($table, $field, $value, $type) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'INSERT INTO '.$table.' ('.$field.') VALUES (?)';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($type, $param);
            $param = $value;
            if ($stmt->execute()) {
                $response = $conn->insert_id;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function insertAB($table, $fieldA, $valueA, $fieldB, $valueB, $types) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'INSERT INTO '.$table.' ('.$fieldA.', '.$fieldB.') VALUES (?, ?)';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $paramA, $paramB);
            $paramA = $valueA;
            $paramB = $valueB;
            if ($stmt->execute()) {
                $response = $conn->insert_id;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function insertABC($table, $fieldA, $valueA, $fieldB, $valueB, $fieldC, $valueC, $types) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'INSERT INTO '.$table.' ('.$fieldA.', '.$fieldB.', '.$fieldC.') VALUES (?, ?, ?)';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $paramA, $paramB, $paramC);
            $paramA = $valueA;
            $paramB = $valueB;
            $paramC = $valueC;
            if ($stmt->execute()) {
                $response = $conn->insert_id;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function insertABCD($table, $fieldA, $valueA, $fieldB, $valueB, $fieldC, $valueC, $fieldD, $valueD, $types) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'INSERT INTO '.$table.' ('.$fieldA.', '.$fieldB.', '.$fieldC.', '.$fieldD.') VALUES (?, ?, ?, ?)';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $paramA, $paramB, $paramC, $paramD);
            $paramA = $valueA;
            $paramB = $valueB;
            $paramC = $valueC;
            $paramD = $valueD;
            if ($stmt->execute()) {
                $response = $conn->insert_id;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function insertABCDE($table, $fieldA, $valueA, $fieldB, $valueB, $fieldC, $valueC, $fieldD, $valueD, $fieldE, $valueE, $types) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'INSERT INTO '.$table.' ('.$fieldA.', '.$fieldB.', '.$fieldC.', '.$fieldD.', '.$fieldE.') VALUES (?, ?, ?, ?, ?)';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $paramA, $paramB, $paramC, $paramD, $paramE);
            $paramA = $valueA;
            $paramB = $valueB;
            $paramC = $valueC;
            $paramD = $valueD;
            $paramE = $valueE;
            if ($stmt->execute()) {
                $response = $conn->insert_id;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function insertABCDEF($table, $fieldA, $valueA, $fieldB, $valueB, $fieldC, $valueC, $fieldD, $valueD, $fieldE, $valueE, $fieldF, $valueF, $types) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'INSERT INTO '.$table.' ('.$fieldA.', '.$fieldB.', '.$fieldC.', '.$fieldD.', '.$fieldE.', '.$fieldF.') VALUES (?, ?, ?, ?, ?, ?)';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $paramA, $paramB, $paramC, $paramD, $paramE, $paramF);
            $paramA = $valueA;
            $paramB = $valueB;
            $paramC = $valueC;
            $paramD = $valueD;
            $paramE = $valueE;
            $paramF = $valueF;
            if ($stmt->execute()) {
                $response = $conn->insert_id;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function insertABCDEFG($table, $fieldA, $valueA, $fieldB, $valueB, $fieldC, $valueC, $fieldD, $valueD, $fieldE, $valueE, $fieldF, $valueF, $fieldG, $valueG, $types) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'INSERT INTO '.$table.' ('.$fieldA.', '.$fieldB.', '.$fieldC.', '.$fieldD.', '.$fieldE.', '.$fieldF.', '.$fieldG.') VALUES (?, ?, ?, ?, ?, ?, ?)';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $paramA, $paramB, $paramC, $paramD, $paramE, $paramF, $paramG);
            $paramA = $valueA;
            $paramB = $valueB;
            $paramC = $valueC;
            $paramD = $valueD;
            $paramE = $valueE;
            $paramF = $valueF;
            $paramG = $valueG;
            if ($stmt->execute()) {
                $response = $conn->insert_id;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function update($table, $field, $valueField, $where, $valueWhere, $types) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'UPDATE '.$table.' SET '.$field.' = ? WHERE '.$where.' = ?';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $paramA, $paramB);
            $paramA = $valueField;
            $paramB = $valueWhere;
            if ($stmt->execute()) {
                $response = 1;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function updateAB($table, $fieldA, $valueFieldA, $fieldB, $valueFieldB, $where, $valueWhere, $types) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'UPDATE '.$table.' SET '.$fieldA.' = ?, '.$fieldB.' = ? WHERE '.$where.' = ?';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $paramA, $paramB, $paramC);
            $paramA = $valueFieldA;
            $paramB = $valueFieldB;
            $paramC = $valueWhere;
            if ($stmt->execute()) {
                $response = 1;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function updateByAB($table, $field, $valueField, $whereA, $valueWhereA, $whereB, $valueWhereB, $types) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'UPDATE '.$table.' SET '.$field.' = ? WHERE '.$whereA.' = ? AND '.$whereB.' = ?';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $paramA, $paramB, $paramC);
            $paramA = $valueField;
            $paramB = $valueWhereA;
            $paramC = $valueWhereB;
            if ($stmt->execute()) {
                $response = 1;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function delete($table, $where, $value, $type) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'DELETE FROM '.$table.' WHERE '.$where.' = ?';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($type, $param);
            $param = $value;
            if ($stmt->execute()) {
                $response = 1;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function deleteByAB($table, $whereA, $valueWhereA, $whereB, $valueWhereB, $type) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'DELETE FROM '.$table.' WHERE '.$whereA.' = ? AND '.$whereB.' = ?';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($type, $paramA, $paramB);
            $paramA = $valueWhereA;
            $paramB = $valueWhereB;
            if ($stmt->execute()) {
                $response = 1;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function delete1ByAB($table, $whereA, $valueWhereA, $whereB, $valueWhereB, $type) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'DELETE FROM '.$table.' WHERE '.$whereA.' = ? AND '.$whereB.' = ? LIMIT 1';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($type, $paramA, $paramB);
            $paramA = $valueWhereA;
            $paramB = $valueWhereB;
            if ($stmt->execute()) {
                $response = 1;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function deleteAB($table, $whereA, $valueA, $whereB, $valueB, $types) {
        require self::CONN_PATH;
        $response = NULL;
        $sql = 'DELETE FROM '.$table.' WHERE '.$whereA.' = ? AND '.$whereB.' = ?';
        if($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $paramA, $paramB);
            $paramA = $valueA;
            $paramB = $valueB;
            if ($stmt->execute()) {
                $response = 1;
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    public function destroySession() {
        // Destruir todas las variables de sesión.
        $_SESSION = array();

        // Borra la cookie de sesión.
        // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Finalmente, destruir la sesión.
        session_destroy();
    }

    /** Method for get leads by idUser
	 * @param $idUser
	 * @return $response
	 */
	public function checkEmail($email, $domain) {
		$selectEmailDomainResponse = $this->selectBy('idEmailDomain', 'email_domains', 'domain', $domain, 's');
		if (!is_null($selectEmailDomainResponse)) {
			$selectEmailResponse = $this->selectByAB('SELECT idEmail FROM emails WHERE email = ? AND idEmailDomain = ?', $email, $selectEmailDomainResponse[0]['idEmailDomain'], 'si');
			if (is_null($selectEmailResponse)) {
				$this->errorReport['checkEmail'] = $selectEmailDomainResponse[0]['idEmailDomain'];
				return $selectEmailDomainResponse[0]['idEmailDomain'];
			} else {
				$this->errorReport['checkEmail'] = -1;
				return -1;
			}
		} else {
			$this->errorReport['checkEmail'] = 0;
			return 0;
		}
		$this->errorReport['checkEmail'] = -2;
		return -2;
	}

	/** Method for get leads by idUser
	 * @param $idUser
	 * @return $response
	 */
	public function insertEmail($email, $domain, $idEmailDomain, $idEmailType, $profile) {
		if ($idEmailDomain < 1) {
			$idEmailDomain = $this->insertEmailDomain($domain);
			if ($idEmailDomain < 1) {
				$this->errorReport['insertEmail'] = -1;
				return -1;
			}
		}
		$insertEmailResponse = $this->insertABCD('emails', 'email', $email, 'idEmailDomain', $idEmailDomain, 'idEmailType', $idEmailType, 'profile', $profile, 'siii');
		if (!is_null($insertEmailResponse)) {
			$this->errorReport['insertEmail'] = $insertEmailResponse;
			return $insertEmailResponse;
		} else {
			$this->errorReport['insertEmail'] = 0;
			return 0;
		}
		$this->errorReport['insertEmail'] = -2;
		return -2;
	}

	/** Method for get leads by idUser
	 * @param $idUser
	 * @return $response
	 */
	public function insertEmailDomain($domain) {
		$insertEmailDomainResponse = $this->insert('email_domains', 'domain', $domain, 's');
		if (!is_null($insertEmailDomainResponse)) {
			$this->errorReport['insertEmailDomain'] = $insertEmailDomainResponse;
			return $insertEmailDomainResponse;
		} else {
			$this->errorReport['insertEmailDomain'] = 0;
			return 0;
		}
		$this->errorReport['insertEmailDomain'] = -1;
		return -1;
	}

	/** Method for get leads by idUser
	 * @param $idUser
	 * @return $response
	 */
	public function checkPhone($phone) {
		$selectPhoneResponse = $this->selectBy('idPhone', 'phones', 'phone', $phone, 's');
		if (is_null($selectPhoneResponse)) {
			$this->errorReport['checkPhone'] = 1;
			return 1;
		} else {
			$this->errorReport['checkPhone'] = 0;
			return 0;
		}
		$this->errorReport['checkPhone'] = -1;
		return -1;
	}

	/** Method for get leads by idUser
	 * @param $idUser
	 * @return $response
	 */
	public function insertPhone($phone, $idCountryCode, $idPhoneType) {
		$insertPhoneResponse = $this->insertABC('phones', 'phone', $phone, 'idCountryCode', $idCountryCode, 'idPhoneType', $idPhoneType, 'sii');
		if (!is_null($insertPhoneResponse)) {
			$this->errorReport['insertPhone'] = $insertPhoneResponse;
			return $insertPhoneResponse;
		} else {
			$this->errorReport['insertPhone'] = 0;
			return 0;
		}
		$this->errorReport['insertPhone'] = -1;
		return -1;
	}

	/** Method for set connection path
	 * @param $connPath
	 */
	public function setConnPath($connPath) {
		$this->connPath = $connPath;
	}

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectHandler($sql, $values, $types) {
        $numParams = count($values);
        $selectBy = 'selectBy'.$numParams;
        $selectByParams = [
            $sql
        ];
        foreach ($values as $key => $value) {
            array_push($selectByParams, $value);
        }
        array_push($selectByParams, $types);
        return call_user_func_array([$this, $selectBy], $selectByParams);
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectBy2($sql, $valueA, $valueB, $types) {
        require self::CONN_PATH;
        $response = NULL;
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $valueParamA, $valueParamB);
            $valueParamA = $valueA;
            $valueParamB = $valueB;
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if (mysqli_num_rows($result) > 0) {
                    $response = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($response, $row);
                    }
                }
                mysqli_free_result($result);
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectBy3($sql, $valueA, $valueB, $valueC, $types) {
        require self::CONN_PATH;
        $response = NULL;
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $valueParamA, $valueParamB, $valueParamC);
            $valueParamA = $valueA;
            $valueParamB = $valueB;
            $valueParamC = $valueC;
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if (mysqli_num_rows($result) > 0) {
                    $response = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($response, $row);
                    }
                }
                mysqli_free_result($result);
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectBy4($sql, $valueA, $valueB, $valueC, $valueD, $types) {
        require self::CONN_PATH;
        $response = NULL;
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $valueParamA, $valueParamB, $valueParamC, $valueParamD);
            $valueParamA = $valueA;
            $valueParamB = $valueB;
            $valueParamC = $valueC;
            $valueParamD = $valueD;
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if (mysqli_num_rows($result) > 0) {
                    $response = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($response, $row);
                    }
                }
                mysqli_free_result($result);
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectBy5($sql, $valueA, $valueB, $valueC, $valueD, $valueE, $types) {
        require self::CONN_PATH;
        $response = NULL;
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $valueParamA, $valueParamB, $valueParamC, $valueParamD, $valueParamE);
            $valueParamA = $valueA;
            $valueParamB = $valueB;
            $valueParamC = $valueC;
            $valueParamC = $valueC;
            $valueParamD = $valueD;
            $valueParamE = $valueE;
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if (mysqli_num_rows($result) > 0) {
                    $response = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($response, $row);
                    }
                }
                mysqli_free_result($result);
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectBy6($sql, $valueA, $valueB, $valueC, $valueD, $valueE, $valueF, $types) {
        require self::CONN_PATH;
        $response = NULL;
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $valueParamA, $valueParamB, $valueParamC, $valueParamD, $valueParamE, $valueParamF);
            $valueParamA = $valueA;
            $valueParamB = $valueB;
            $valueParamC = $valueC;
            $valueParamD = $valueD;
            $valueParamE = $valueE;
            $valueParamF = $valueF;
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if (mysqli_num_rows($result) > 0) {
                    $response = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($response, $row);
                    }
                }
                mysqli_free_result($result);
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectBy7($sql, $valueA, $valueB, $valueC, $valueD, $valueE, $valueF, $valueG, $types) {
        require self::CONN_PATH;
        $response = NULL;
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param($types, $valueParamA, $valueParamB, $valueParamC, $valueParamD, $valueParamE, $valueParamF, $valueParamG);
            $valueParamA = $valueA;
            $valueParamB = $valueB;
            $valueParamC = $valueC;
            $valueParamD = $valueD;
            $valueParamE = $valueE;
            $valueParamF = $valueF;
            $valueParamG = $valueG;
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if (mysqli_num_rows($result) > 0) {
                    $response = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($response, $row);
                    }
                }
                mysqli_free_result($result);
            }
        }
        $stmt->close();
        $conn->close();
        return $response;
    }

}

?>
