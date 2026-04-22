<?php 
session_start();

$username =$_POST["username"]       ?? "";
$email =$_POST["username"]          ?? "";
$password =$_POST["username"]       ?? "";
$confirm_password=$_POST["username"]?? "";


$hasUsernameError = true;
$hasEmailError = true;
$hasPasswordError = true;
$hasConfirmError = true;

if(!$username){
$_SESSION["usernameErr"] = "Username is required";
    $hasUsernameError = true;
}elseif(strlen($username) < 3){
 $_SESSION["usernameErr"] = "Username must be at least 3 characters";
    $hasUsernameError = true;
}else{
unset($_SESSION["usernameErr"]);
    $hasUsernameError = false;
}

if(!$email){$_SESSION["emailErr"] = "Email is required";
    $hasEmailError = true;}
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    { $_SESSION["emailErr"] = "Invalid email format";
    $hasEmailError = true;}
    else{unset($_SESSION["emailErr"]);
    $hasEmailError = false;}



if(!$password){$_SESSION["passErr"] = "pass is required";
    $haspassworsError = true;}
    elseif(strlen($password) < 6){
    $_SESSION["passErr"] = "Password must be at least 6 characters";
    $hasPasswordError = true;
}else{
    unset($_SESSION["passErr"]);
    $hasPasswordError = false;
}

if(!$confirm_password){
  $_SESSION["confirmErr"] = "Please confirm your password";
    $hasConfirmError = true;
}elseif($password !== $confirm_password){$_SESSION["confirmErr"] = "Passwords do not match";
    $hasConfirmError = true;}
else {
    $_SESSION["confirmErr"] = "Passwords do not match";
    $hasConfirmError = true;
    
}
if($hasUsernameError || $hasEmailError || $hasPasswordError || $hasConfirmError){
    $_SESSION["username"] = $username;
    $_SESSION["email"]    = $email;
    Header("Location: ../View/register.php");}else{
        $users = array("Tasfia" => "1234567", "maisha" => "998877");
    foreach($users as $user => $pass){
        if($username == $user && $password == $pass){
            $_SESSION["username"]   = $username;
            $_SESSION["isLoggedIn"] = true;
            Header("Location: ../View/dashboard.php");
            exit();
        }else{
            $_SESSION["loginErr"] = "Username or password doesn't match. Please try again.";
            Header("Location: ../View/login.php");
            exit();
    }
?>

