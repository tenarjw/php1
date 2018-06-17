<?php
include('classes.inc.php');
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new user();
    $user->login($username,$password);
} else {
    print 'nieudane!';
    include "index.php"; 
}
?>