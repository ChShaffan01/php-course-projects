<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Session</title>
</head>
<body>
    <h1>Read Session</h1>
    <?php
        if (isset($_SESSION["username"])) {
            echo "Username: " . htmlspecialchars($_SESSION["username"]);
        } else {
            echo "No username session found.";
        }
    ?>
</body>
</html>