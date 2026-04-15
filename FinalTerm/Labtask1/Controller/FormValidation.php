<?php
session_start();

$username = $_POST["username"] ?? "";

$password = $_POST["password"] ?? "";

$hasUsernameErr = true;
$hasPasswordErr = true;

echo "<h1>Hello Mr,$username</h1>";

if(!$username){
    $_SESSION["usernameErr"] = "user name is required";
    $hasUsernameErr = true;
}else{
    unset($_SESSION["usernameErr"]);
    $hasUsernameErr = false;

}

if(!$password){
    $_SESSION["passwordErr"] = "Password is required";
    $hasPasswordErr = true;
}
else{
    unset($_SESSION["passwordErr"]);
    $hasPasswordErr = false;
}

if($hasUsernameErr|| $hasPasswordErr){
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
}
else{
$users = array("tasfia"=>"123","maisha"=>"456");
$loggedIn= false;
foreach($users as $user => $pass){

    if($username == $user && $password == $pass){
    $_SESSION["username"] = $username;
    $_SESSION["isLoggedIn"] = true;
    $loggedIn = true ;
    break;}}
    if($loggedIn){
            Header("Location: ../View/dashboard.php");
            exit();
    }else{
         $_SESSION["loginErr"] = "Username or password do not match please try again .";
         Header("Location: ../view/login.php");
         exit();
    }
}













?>