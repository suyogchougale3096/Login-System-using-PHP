<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "attendence_management_system";

// Check connection
$conn = new mysqli($servername,$username,$password,$db_name);

if($conn -> connect_error){
    echo("Connection error : " . $conn -> connect_error);
}
else{
    // echo "Successfully connected with the database.";
}
?>