<?php

class SelectModels { // Abstact it

    private const BIND_PARAMS = 'bindParams';
    private const SELECT_BY = 'selectBy';

    private $stmt;

    function __construct() {
        ;
    }

    function __destruct() {
        ;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectBy($query, $config) {
        require '../../config/database.php';
        $response = NULL;
        if ($this->stmt = $conn->prepare($query)) {
            $response = $this->selectByConfig($config);
            $this->stmt->free_result();
            $this->stmt->close();
        }
        $this->stmt = NULL;
        $conn->close();
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    public function selectByConfig($config) {
        $numParams = count($config['params']);
        $bindParamsFunct = self::BIND_PARAMS.$numParams;
        $bindParamsFunctParams = [
            $config['types'],
            $config['params']
        ];
        call_user_func_array([$this, $bindParamsFunct], $bindParamsFunctParams);
        if ($this->stmt->execute()) {
            $selectByFunct = self::SELECT_BY.$config['numFields'];
            return call_user_func_array([$this, $selectByFunct], []);
        }
        return NULL;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function bindParams1($type, $param) {
        $this->stmt->bind_param($type, $paramA);
        $paramA = $param[0];
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function bindParams2($types, $params) {
        $this->stmt->bind_param($types, $paramA, $paramB);
        $paramA = $params[0];
        $paramB = $params[1];
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function bindParams3($types, $params) {
        $this->stmt->bind_param($types, $valueA, $valueB, $valueC);
        $valueA = $params[0];
        $valueB = $params[1];
        $valueC = $params[2];
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function bindParams4($types, $params) {
        $this->stmt->bind_param($types, $valueA, $valueB, $valueC, $valueD);
        $valueA = $params[0];
        $valueB = $params[1];
        $valueC = $params[2];
        $valueD = $params[3];
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function bindParams5($types, $params) {
        $this->stmt->bind_param($types, $valueA, $valueB, $valueC, $valueD, $valueE);
        $valueA = $params[0];
        $valueB = $params[1];
        $valueC = $params[2];
        $valueD = $params[3];
        $valueE = $params[4];
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function bindParams6($types, $params) {
        $this->stmt->bind_param($types, $valueA, $valueB, $valueC, $valueD, $valueE, $valueF);
        $valueA = $params[0];
        $valueB = $params[1];
        $valueC = $params[2];
        $valueD = $params[3];
        $valueE = $params[4];
        $valueF = $params[5];
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function bindParams7($types, $params) {
        $this->stmt->bind_param($types, $valueA, $valueB, $valueC, $valueD, $valueE, $valueF, $valueG);
        $valueA = $params[0];
        $valueB = $params[1];
        $valueC = $params[2];
        $valueD = $params[3];
        $valueE = $params[4];
        $valueF = $params[5];
        $valueG = $params[6];
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function bindParams8($types, $params) {
        $this->stmt->bind_param($types, $valueA, $valueB, $valueC, $valueD, $valueE, $valueF, $valueG, $valueH);
        $valueA = $params[0];
        $valueB = $params[1];
        $valueC = $params[2];
        $valueD = $params[3];
        $valueE = $params[4];
        $valueF = $params[5];
        $valueG = $params[6];
        $valueH = $params[8];
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy1() {
        $this->stmt->bind_result($result);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                array_push($response, $result);
            }
        }
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy2() {
        $this->stmt->bind_result($resultA, $resultB);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                $result = [$resultA, $resultB];
                array_push($response, $result);
            }
        }
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy3() {
        $this->stmt->bind_result($resultA, $resultB, $resultC);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                $result = [$resultA, $resultB, $resultC];
                array_push($response, $result);
            }
        }
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy4() {
        $this->stmt->bind_result($resultA, $resultB, $resultC, $resultD);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                $result = [$resultA, $resultB, $resultC, $resultD];
                array_push($response, $result);
            }
        }
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy5() {
        $this->stmt->bind_result($resultA, $resultB, $resultC, $resultD, $resultE);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                $result = [$resultA, $resultB, $resultC, $resultD, $resultE];
                array_push($response, $result);
            }
        }
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy6() {
        $this->stmt->bind_result($resultA, $resultB, $resultC, $resultD, $resultE, $resultF);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                $result = [$resultA, $resultB, $resultC, $resultD, $resultE, $resultF];
                array_push($response, $result);
            }
        }
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy7() {
        $this->stmt->bind_result($resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                $result = [$resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG];
                array_push($response, $result);
            }
        }
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy8() {
        $this->stmt->bind_result($resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG, $resultH);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                $result = [$resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG, $resultH];
                array_push($response, $result);
            }
        }
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy9() {
        $this->stmt->bind_result($resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG, $resultH, $resultI);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                $result = [$resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG, $resultH, $resultI];
                array_push($response, $result);
            }
        }
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy10() {
        $this->stmt->bind_result($resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG, $resultH, $resultI, $resultJ);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                $result = [$resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG, $resultH, $resultI, $resultJ];
                array_push($response, $result);
            }
        }
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy11() {
        $this->stmt->bind_result($resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG, $resultH, $resultI, $resultJ, $resultK);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                $result = [$resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG, $resultH, $resultI, $resultJ, $resultK];
                array_push($response, $result);
            }
        }
        return $response;
    }

    /** Method for get any table by any value
     * @param $table, $where, $value
     * @return null
     */
    private function selectBy12() {
        $this->stmt->bind_result($resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG, $resultH, $resultI, $resultJ, $resultK, $resultL);
        $this->stmt->store_result();
        $response = NULL;
        if ($this->stmt->num_rows > 0) {
            $response = [];
            while ($this->stmt->fetch()) {
                $result = [$resultA, $resultB, $resultC, $resultD, $resultE, $resultF, $resultG, $resultH, $resultI, $resultJ, $resultK, $resultL];
                array_push($response, $result);
            }
        }
        return $response;
    }
}

?>