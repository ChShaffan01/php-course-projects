<?php 

$password = $_POST['pwd'];

# to covert hashed password (signup)
$hashed_password = password_hash($password, PASSWORD_BCRYPT);


#  to compare hashed password with plain password (login)
if($row = $result->fetch_assoc()){
        if(password_verify($password, $row['Pasword'])){
            $_SESSION['user_id'] = $row['Id'];
            $_SESSION['user'] = $row['Name'];
            $_SESSION['loggedin'] = true;
            header("Location:../index.php");
            exit;
        }}
?>