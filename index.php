<?php   
session_start();


if(!isset($_SESSION["email"])){
    header("Location: login.php");
}
if($_SESSION["role"] == "user"){
    header("Location: home.user.php");
}elseif($_SESSION["role"] == "admin"){
    header("Location: home.admin.php");
}elseif($_SESSION["role"] == "manager"){
    header("Location: home.manager.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h3>Index Page Mod-5</h3><hr>
    <!-- <?php
        // "Welcome ";
        // echo "Welcome ". $_SESSION["username"];
        // echo "<br>";
        // echo "Role: ". $_SESSION["role"];
        // echo "<br>";
    ?> -->
<hr>
    <a href="/logout.php">Logout</a>
</body>
</html>