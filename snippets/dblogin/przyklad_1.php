<?php
// uruchom na www i odśwież dwukrotnie - za  drugim razem "zalogowany admin"
function login($user, $password){
  if(!isset($_SESSION)){
    session_start();
  }
  if (array_key_exists('USER', $_SESSION) == true) {
     $user = $_SESSION['USER'];
     print 'już jest';
  } else {
    if (($user=='admin') && ($password='abc')) {
//       setcookie('user', 'admin', time() + 86400); // na 1 godzinę
      $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']); 
      $_SESSION['USER'] = $user;
      $_SESSION['CREATE_TIME'] = $_SERVER['REQUEST_TIME'];
    } else {
       $user=null;
    }
  }
  return $user;
}


//$user = htmlspecialchars($_COOKIE['user']);
$user= login('admin','abc1');
if (! $user) {
  print 'nie ma'; 
} else {
 print 'zalogowany'.$user;
}

?>