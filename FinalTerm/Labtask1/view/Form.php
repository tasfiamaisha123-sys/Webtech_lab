<!-- so the task is .. -->
 <!-- You are building a basic server-side form for a website. The form collects user information and sends it to the server, where PHP processes and validates the data before displaying the result. This task helps you understand how PHP receives data from the client using superglobal variables. The Form may include username, name, email, phone number, etc. 
 
Task Requirements(Create two files): 
        • form.php  
        • formValidation.php 
 
Part A: HTML Form (form.php) 
Part B: Form Data Processing (formValidation.php) 
Part C: Server-Side Validation 
Part D: Show validation error in form.php 
 
Instructions: 
Must Use MVC Format 
Use the POST Method -->
<?php 

session_start();
$usernameErr = $_SESSION["usernameErr"] ?? "";
$passwordErr = $_SESSION["passwordErr"] ?? "";

$username = $_SESSION["username"]  ??"";
$password = $_SESSION["passsword"]  ??"";

$loginErr = $_SESSION["loginErr"]   ??"";

$isLoggedIn = $_SESSION["isLoggedIn"]   ??false;

if($isLoggedIn){
     Header("Location:dashboard.php");
     exit();
}

unset($_SESSION["usernameErr"]);

unset($_SESSION["passwordErr"]);
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION["loginErr"]);

?>
<html><head>
<title>Loginpage</title>
</head>

<body>
<h2>Login</h2>
<form method="POST" action="../Controller/loginValidation.php">
    <table>
<tr>
<td>Username</td>
<td><input type="text" name="username" placeholder="Enter username" value="<?php echo $username;?>"/></td>
<td><?php echo "$usernameErr";?></td>
</tr>
<tr>
<td>Password</td>
<td><input type ="password" name="password" placeholder="Enter password" value="<?php echo $password;?>"/></td>
<td><p style='color:red'><?php echo"$passwordErr";?></p></td>
</tr>
<tr>
<td></td>
<td><p style='color:red;'><?php echo "$loginErr";?></p></td>
<td><input type="submit" name="submit"/></td>
</tr>
</table>
</form>
</body>
</html>






















</html>