<?php
session_start();
$usernameError = $_SESSION["usernameErr"]  ?? "";
$passwordError = $_SESSION["passErr"] ?? "";
$emailError = $_SESSION["emailErr"] ?? "";
$confirmError = $_SESSION["confirmErr"] ?? "";

$username = $_SESSION["username"]  ?? "";
$email = $_SESSION["email"] ?? "";

unset($_SESSION["usernameErr"], $_SESSION["emailErr"],
      $_SESSION["passErr"],     $_SESSION["confirmErr"],
      $_SESSION["username"],    $_SESSION["email"]);
      if(!empty($_SESSION["isLoggedIn"])){
    header("Location: dashboard.php");
    exit();
      }
      ?>
<html>
<head>
<title>Register</title></head>
<body>
    <h1>Registration Form </h1>
<form method="post" action="../controller/register/validationphp">
<table>
<tr>
    <td>Username</td>
    <td><input type="text" name="username"
                 value="<?php echo htmlspecialchars($username); ?>"
                 placeholder="Enter username"/></td>

                 <td style="color:red;"><?php echo $usernameError; ?></td></tr>

<tr>
<td>Email</td>
            <td><input type="text" name="email"
                 value="<?php echo htmlspecialchars($email); ?>"
                 placeholder="Enter email"/></td>
            <td style="color:red;"><?php echo $emailError; ?></td>
</tr>
<tr>

<td>Password</td>
            <td><input type="password" name="password"
                 placeholder="Enter password"/></td>
            <td style="color:red;"><?php echo $passwordError; ?></td>
        </tr>

<tr>
<td>Confirm Password</td>
            <td><input type="password" name="confirm_password"
                 placeholder="Confirm password"/></td>
            <td style="color:red;"><?php echo $confirmError; ?></td>
        </tr>

        <tr>
        <td></td>
            <td><input type="submit" value="Register"/></td>
       
</tr>



</table>
</form></body>
</html>









