<?php
session_start();
if(!isset($_SESSION["role"]) || $_SESSION["role"] != "admin"){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
</head>
<body>
    <h3>Admin Home page Mod-5</h3><a href="/logout.php">Logout</a><hr>
    <?php

        echo "Welcome ". strtoupper($_SESSION["username"]). "!";
        echo "<br>";
        echo "Role: ". strtoupper($_SESSION["role"]);
        echo "<br>";
    ?>
<hr>
    
</body>
</html>