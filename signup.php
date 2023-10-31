<?php 
session_start();
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$username = $_POST["username"] ?? "";


$role = "user";
// $role = "manager";
// $role = "admin";

$errorMessage = "";
$successMessages = "";

if($email != "" && $password != ""){
    $fp = fopen("./data/users.txt", "a"); 
    fwrite($fp, "\n{$role}, {$email}, {$password}, {$username}");
    fclose($fp);
    header("Location: index.php");
}else{
    $errorMessage = "Please enter Email or Password";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h3>SignUp Form</h3><hr>
    <div>
        <?php echo $errorMessage; ?>

    </div>
    <form action="signup.php" method="POST">
        <input type="text" name="username" placeholder="username"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="SignUp">
    </form><hr>
    <p>Do you have an account? Login here <a href="login.php">Login here</a></p>
</body>
</html>