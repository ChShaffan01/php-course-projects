      <?php 
      $host = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'auth_system';

    $con = mysqli_connect($host,$username,$pass,$db) or die ("connectionfailed" . mysqli_connect_error());
 
    $sql = "INSERT INTO `registration_data`(`Id`, `First_name`, `Last_name`, `Emai l`, `Pasword`, `Phone`, `File_name`, `Gender`) VALUES (NULL, '$first_name', '$last_name', '$email', '$password', '$phone', '$folder', '$gender')";

    $result = mysqli_query($con, $sql);

    if($result){echo "<h5 style='color:green;'>Data inserted successfully</h5>";}
    else{echo "<h5 style='color:red;'>Data not inserted". mysqli_error($con)."</h5>";}

?>