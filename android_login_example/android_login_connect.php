<?php
class android_login_connect{
	private $conn;

	public function connect(){
		require_once 'android_login_config.php';
	
	$this->conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	return $this->conn;
	}
}
?>