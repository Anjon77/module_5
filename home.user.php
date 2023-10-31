<?php
session_start();
if(!isset($_SESSION["role"]) || $_SESSION["role"] != "user"){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User </title>
</head>
<body>
    <h3>User Home page Mod-5</h3><hr>
    <?php

        echo "Welcome ". strtoupper($_SESSION["username"]). "!";
        echo "<br>";
        echo "Role: ". strtoupper($_SESSION["role"]);
        echo "<br>";
    ?>
<hr>
    <a href="/logout.php">Logout</a>
</body>
</html>