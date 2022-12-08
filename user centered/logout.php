<?php

setcookie('email', $_COOKIE['email'],  time() - 3600);
session_start();
session_unset();
session_destroy();
$_SESSION = array();
header("location:index.php");
?>
