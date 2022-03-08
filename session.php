<?php

//startsession
session_start();

//redirect if logged include
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;

if(isset($_SESSION['username']) === true) {
    header("location: index2.php");
    exit;
}

 ?>
