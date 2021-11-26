<?php
/**
* DB 연결 클래스 
*
*/
class DB extends PDO {
	private static $instance;
	private function __construct() {
		try {
			$dsn = "mysql:host=localhost;dbname=test 연결";
			$username = "qhal2364";
			$password = "2364";
			parent::__construct($dsn, $username, $password);
		} catch (PDOException $e) {
			echo $e->getMessage();
			exit;
		}
	}
	
public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new DB();
		}
		
		return self::$instance;
	}
}