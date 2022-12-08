<?php

session_start();

$_SESSION["usertype"] = "competitor";
$_SESSION["name"] = "camp";


$user = $_SESSION["usertype"] ;

echo $user;

//print_r($_SESSION);

//session_unset();


?>