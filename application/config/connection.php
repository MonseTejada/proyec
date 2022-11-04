<?php

abstract class Connection {

    private const DB_HOST = 'localhost:33065';
    private const DB_USER = 'root'; // bbbme11_ccima
    private const DB_PASS = ''; //Ccdbrt-10.02
	private const DB_NAME = 'ccima';
	private const COLLATION = '"utf8"';
	
	private $conn;
	private $stmt;

    public function __construct() {
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json; charset=UTF-8');
        $this->conn = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
		$conn->query('SET NAMES '.self::COLLATION);
		if ($conn->connect_error) {
			die("Connection Failed: " . $conn->connect_error);
		}
	}
}

?>
