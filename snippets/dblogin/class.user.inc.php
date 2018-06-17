<?php
class user {

    public function __construct() {
        $this->HashOptions = array('cost' => 15);
        $this->HashAlgorithm = PASSWORD_DEFAULT; 
        // http://php.net/manual/en/function.password-hash.php
    }
    
    public function create($username, $password) {      
        if ($this->does_exist($username) == true) {
            header('Location: '.SITE_ROOT);
            exit();
        } 
        $hash = password_hash(
            $password,
            $this->HashAlgorithm,
            $this->HashOptions
        );   
        if ($this->does_exist($username) == false) {
            $pdo=db::connect();
            $pdo->beginTransaction();
            $insert = $pdo->prepare(
                "INSERT INTO users (username,password,role) 
                 VALUES (:username, :password, '1')");
            $insert->bindValue(':username', $username, PDO::PARAM_STR);
            $insert->bindValue(':password', $hash, PDO::PARAM_STR);
            $insert->execute();
            $pdo->commit();
            if (isset($session) && ($session->isLoggedIn() == false)) {
                $this->login($username, $password);
            }
        } 
    }

    public function login($username, $password) {
        print 'start';
        $pdo=db::connect();
        $sth = $pdo->prepare(
            "SELECT uid, password from users WHERE username = :username LIMIT 1");
        $sth->bindParam(':username',$username);
        var_dump($sth);
        $result=$sth->execute();
        $user = $sth->fetch(PDO::FETCH_OBJ);
        if ((! isset($user)) || (!$user)) {
            var_dump($result);
            echo 'nieudane logowanie';
            die();
            // header('Location: '.WEB_ROOT.'?error'); 
        }
        if ( crypt($password, $user->password) === $user->password) {
            $user_id=$user->uid;
            $session = new session();
            if (! $session->begin_database_session($username,$user_id) ) {
                print 'Nieudany start sesji';
                die();
            }
            header('Location: '.POST_LOGIN); 
            //password matches, process in session
        }
        else {
            header('Location: '.WEB_ROOT.'?error'); 
        }
    }

    private function does_exist($username) {
        $pdo=db::connect();
        $exists = $pdo->query(
            "SELECT username from users WHERE username = '$username'")->rowCount();
        if($exists >= 1) {
        	return true;   
        }
        else {
        	return false;   
        }
    }

}
?>