<?php
	

class db {
    public static $pdo = null;	

    static function connect() {
        if (self::$pdo == null) {
            try {
                self::$pdo = new PDO("sqlite:login.db");
            } catch(PDOException $e) {
		echo $e->getMessage();
		die(); // kończymy aplikacje
            } catch(Exception $e) {
		echo $e->getMessage();
		die(); // kończymy aplikacje
            }
        }
        return self::$pdo;
    }
}
?>