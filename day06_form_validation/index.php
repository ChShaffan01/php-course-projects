<?php
 $name = $f_Name = $email = $password = $phone = $gender = "";
 $error = [];
 function clean_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
  
  if(empty(clean_input($_POST['name'])) || strlen(clean_input($_POST['name'])) < 3){
  $error[] = "Name is required and must be at least 3 characters long";
  $error[] = "Name is required";

}

elseif(empty(clean_input($_POST['fname'])) || strlen(clean_input($_POST['fname'])) < 3){
  $error[] = "Father Name is required and must be at least 3 characters long";
  $error[] = "Father Name is required";
}


elseif(empty(clean_input($_POST['email'])) || !filter_var(clean_input($_POST['email']), FILTER_VALIDATE_EMAIL)){
  $error[] = "Valid Email is required";
  $error[] = "Email is required";
}


elseif(empty(clean_input($_POST['password'])) || strlen(clean_input($_POST['password'])) < 6){
  $error[] = "Password is required and must be at least 6 characters long";
  $error[] = "Password is required";
}


elseif(empty( clean_input($_POST['phone'])) || !preg_match('/^[0-9]{10}+$/', clean_input($_POST['phone']))){
  $error[] = "Valid phone number is required";
  $error[] = "phone number is required";
}

elseif(empty($_POST['gender'])){
  $error[] = "gender is required";
}

if(count($error) > 0){
    foreach($error as $err){
        echo "<p style='color:red;'>$err</p>";
    }
}
else{
    echo "<p style='color:green;'>Form submitted successfully!</p>";
    $name = clean_input($_POST['name']);
    $f_Name = clean_input($_POST['fname']);
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);
    $phone = clean_input($_POST['phone']);
    $gender = $_POST['gender'];
    echo "<h2>Your Input:</h2>";
    echo "Name: " . $name; 
    echo "<br>Father Name: " . $f_Name;
    echo "<br>Email: " . $email;
    echo "<br>Password: " . $password;
    echo "<br>Phone: " . $phone;
    echo "<br>Gender: " . $gender;
}


?>