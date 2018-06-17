<?php
	class db {
		public static $pdo;	
		static function connect() {
			self::$pdo = new PDO('mysql:dbname='.DB_NAME.';host=localhost', 
			                DB_USER, DB_PASS);
			return $pdo;
		}
	}
?>