<?php
session_start();

$username = $_POST["username"]  ?? "";
$password = $_POst["password"]  ?? "";
$hasUsernameError = true;
$hasPasswordError = true;

echo "<h1>hello Mr, $username</h1>";
echo "<h3>We know your password...$password, right?</h3>";

if(!$username){
    $_SESSION["usernameErr"] = "User is required";
    $hasUsernameError = true;

} else{
    unset($_SESSION["usernameErr"]);
    $hasUsernameError = false;
}







?>