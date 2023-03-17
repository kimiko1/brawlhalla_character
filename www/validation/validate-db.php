<?php
session_start();
require("../../models/BDD.php") ; 
use Model\BDD ; 
$email = $_POST["email"];
$password = $_POST["password"];
$email = str_replace("'", "", "$email");
$password = str_replace("'", "", "$password");
$username = $_POST["username"];


if (password_verify($password, BDD::passwordhash($email)))
{
    $_SESSION['email'] = $email ; 
    $_SESSION['password'] = BDD::passwordhash($email) ; 
    $_SESSION['username'] = $username ; 

    header("Location: ../user/home_page.php") ; 
    exit();
}
else{
    echo "fail mon reuf" ; 
}




?>