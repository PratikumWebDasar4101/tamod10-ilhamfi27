<?php
class Koneksi{
	private $host;
	private $username;
	private $password;
	private $db;

	function __construct(){
		$this->host 	= "localhost";
		$this->username = "root";
		$this->password = "";
		$this->db 		= "ta_webdas-10";
	}

	public function db_connect(){
		$connect = new mysqli($this->host,$this->username,$this->password,$this->db);
		return $connect;
	}

}
?>
