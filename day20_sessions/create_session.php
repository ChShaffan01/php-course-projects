<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Session</title>
</head>
<body>
    <h1>Create Session</h1>
<?php

$_SESSION["username"] = "admin";
$_SESSION["email"] = "admin@example.com";

?>
</body>
</html>