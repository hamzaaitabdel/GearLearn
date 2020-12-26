<?php
session_start();
$_SESSION['birthday']="";
$_SESSION['email']="";
$_SESSION['Password']="";
$_POST['username']="";
$_SESSION['name']="";
$_SESSION['score']="";
$_SESSION['']="";
header('Location: sign-in.php');
?>