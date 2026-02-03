<?php

    $host = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'auth_system';

    $con = mysqli_connect($host,$username,$pass,$db) or die ("connectionfailed" . mysqli_connect_error());
 

    $query = "SELECT name , phone FROM `crud1` where id = 1";
    $sql = mysqli_query($con , $query);
     
    if($result){echo "<h5 style='color:green;'>Data inserted successfully</h5>";}
    else{echo "<h5 style='color:red;'>Data not inserted". mysqli_error($con)."</h5>";}





?>
