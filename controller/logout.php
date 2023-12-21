<?php
session_start();


$_SESSION = array();

session_destroy();


if(isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    setcookie('email', '', time() - 3600, '/'); 
    setcookie('password', '', time() - 3600, '/'); 
}


header("Location: ../view/login.php");
exit();
?>
