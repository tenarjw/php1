<?php
// !!! TO NIE JEST BEZPIECZNE!!
// uruchom na www i odśwież dwukrotnie - za  drugim razem "zalogowany admin"
function login($user, $password){
  if (($user=='admin') && ($password='abc')) {
     setcookie('user', 'admin', time() + 86400); // na 1 godzinę
     return true;
  } else {
     return false;
  }
}


$user = htmlspecialchars($_COOKIE['user']);
if (! $user) {
  print 'nie ma';
  print login('admin','abc');
} else {
 print 'zalogowany admin';
}