<?php 
	class ConnectDB {
		public $conn;
		function connect(){
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$database = '18php04-minhsmart';
			$this->conn = mysqli_connect($server, $username, $password, $database);
			mysqli_set_charset($this->conn,"utf8");
			return $this->conn;
		}
	}
?>