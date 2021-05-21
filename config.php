<?php

	class config{
		public static function getConnection() {
			$db_name = "registerdb";$db_username = "root";$db_password = "";$db_host = "localhost";
			
			return new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
		}
		
	}

?>