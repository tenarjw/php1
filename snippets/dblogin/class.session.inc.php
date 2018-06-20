    <?php
class session  {

	public function __construct() {
            if(!isset($_SESSION)){
		session_start();	
            }
	}

        public function is_logged_in() {
		if (array_key_exists('UNIQUE_ID', $_SESSION) == true) {
			$unique_id = $_SESSION['UNIQUE_ID'];
		} else {
			$unique_id = '';   
		}
                $pdo=db::connect();
		foreach ($pdo->query(
			"SELECT unique_id FROM sessions WHERE unique_id = '$unique_id'") as $row) {
			if(!$row) {
				return false;
			} else {
				return true;   
			}
		}
	}

	public function begin_database_session($username, $user_id) {
			$unique = substr(md5(rand()), 0, 30);
			$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']); 
			$_SESSION['UNIQUE_ID'] = $unique;
			$_SESSION['USER_ID'] = $user_id;
			$_SESSION['CREATE_TIME'] = $_SERVER['REQUEST_TIME'];
                        $q_insert=
				"INSERT INTO sessions 
				(unique_id,user_id,page) 
				VALUES 
				('$unique', '$user_id', '/')";
                        echo $q_insert;
                        $pdo=db::connect();
                        $pdo->beginTransaction();
                        $result=$pdo->exec($q_insert);
                        $pdo->commit();
                        print $result;
                        return true;			
	}


}


?>