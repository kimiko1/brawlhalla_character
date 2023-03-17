<?php
session_start();
$email = htmlspecialchars($_POST["email"]);
$password = password_hash($_POST["password"], PASSWORD_ARGON2I);
$email = str_replace("'", "", "$email");
$password = str_replace("'", "", "$password");
$username = htmlspecialchars($_POST["username"]);

$db = new SQLite3('../../data/data.db');
$create = $db->prepare("INSERT INTO user(email,username,password) values('$email','$username','$password')");
@$create->execute();
sleep(5);
header("Location: ../user/login.php");

?>