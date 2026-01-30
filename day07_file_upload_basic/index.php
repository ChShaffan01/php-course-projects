<?php

$name = $_POST['name'];
$file_name = $_FILES['myfile']['name'];
$temp_name = $_FILES['myfile']['tmp_name'];
$file_size = $_FILES['myfile']['size'];
$uniquename = time() . "_" . $file_name;
$folder = "uploads/" . $uniquename;

echo "Name: " . $name . "<br>";
$allow = ['jpg', 'png', 'gif', 'pdf', 'docx'];
$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

if(!in_array($file_ext , $allow)){
    die("File type not allowed.");
}
elseif($file_size > 2 * 1028 * 1028){
    die("File Too Large! Max 2mb Size Allowed");
}
else{
    if(move_uploaded_file($temp_name, $folder)) {
    echo "File uploaded successfully <br>";
    echo "<img src='uploads/$uniquename' width='200'>";
} else {
    echo "Failed to upload file.";
}
}







?><a href="form.html">Go Back</a>