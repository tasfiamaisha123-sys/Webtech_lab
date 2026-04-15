<?php
session_start();

$username = $_SESSION["username"] ?? "";

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if(!$isLoggedIn){
    Header("Location: login.php");
    exit();
}





?>

<html>
    <body>
        <h1>Welcome to dashboard</h1>
    </body>
</html>