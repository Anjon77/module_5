<?php
session_start();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$errorMessage = '';

$roles = [];
$emails = [];
$passwords = [];
$usernames = [];

$fp = fopen('./data/users.txt', 'r');
while ($line = fgets($fp)) {
    $values = explode(", ", $line); // role, email, password, username
    array_push($roles, trim($values[0]));
    array_push($emails, trim($values[1]));
    array_push($passwords, trim($values[2]));
    array_push($usernames, trim($values[3]));
}
fclose($fp);

for ($i = 0; $i < count($roles); $i++) {
    if ($email == $emails[$i] && $password == $passwords[$i]) {
        $_SESSION["role"] = $roles[$i];
        $_SESSION["email"] = $emails[$i];
        $_SESSION["username"] = $usernames[$i];
        header("Location: index.php");
    } else if ($email != '' && $password != '') {
        $errorMessage = 'Invalid email or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <h3>Login Mod-5</h3>
    <hr>

    <?php echo $errorMessage; ?>

    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Enter Email" required><br><br>
        <input type="password" name="password" placeholder="Enter Password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
    <p>Don't you have an account? <a href="signup.php">Signup here</a></p>
</body>

</html>