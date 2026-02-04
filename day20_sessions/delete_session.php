<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Session</title>
</head>
<body>
    <h1>Delete Session</h1>
    <?php
        if (isset($_SESSION["username"])) {
            unset($_SESSION["username"]);
            echo "Username session deleted.";
        } else {
            echo "No username session found.";
        }
    ?>
</body>
</html>