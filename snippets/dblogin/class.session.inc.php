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

	public function update_session() {
            $pdo=db::connect();
		$time = $_SERVER['REQUEST_TIME']; 
		$this->session_duration = SESSION_DURATION; 
			$userquery = "SELECT unique_id, users.uid FROM sessions INNER JOIN users ON users.uid = sessions.user_id WHERE user_id = '".
			             $_SESSION['USER_ID']."'";
			foreach($pdo->query($userquery) as $row) {
				$unique_id = $row['unique_id'];
			}

		//if session cookie does not match server generated cookie, redirect to home page
		if ($_SESSION['UNIQUE_ID'] !== $unique_id) {
			$this->destroy_session();
		}
		//if inactive for longer than 60 seconds, re login 
		if (isset($_SESSION['CREATE_TIME']) && 
		    ($time - $_SESSION['CREATE_TIME'] > $this->session_duration)) {
			$this->destroy_session();
		}

		//if there is no user agent, ask to log in 
		if (!isset($_SESSION['HTTP_USER_AGENT'])) {
			$this->destroy_session();
		}

		//if the user agent does not match the one used to login, re login 
		if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])) {
			$this->destroy_session();
		}
		$page = $_SERVER['REQUEST_URI'];
		$update = $pdo->prepare(
			"UPDATE sessions SET page = :page WHERE unique_id = :unique_id;
			 UPDATE sessions SET lastaccess = NULL WHERE unique_id = :unique_id");
		$update->bindValue(':page', $page, PDO::PARAM_STR);
		$update->bindValue(':unique_id', $unique_id, PDO::PARAM_INT);
		$update->execute();
		session_regenerate_id(); 
	}

	public function destroy_session() {
		if(!empty($_SESSION)){
			$delete = $pdo->prepare(
				"DELETE FROM sessions WHERE user_id = :user_id");
			$delete->bindValue(':user_id', $_SESSION['USER_ID'], PDO::PARAM_INT);
			$delete->execute();
			$_SESSION = array();
			header('Location: '.WEB_ROOT);
		}
	} 

}


?>