<?php 

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include 'connect.php';

// Insert into contact

if(!isset($_SESSION["first_name"]) == "" OR !isset($_SESSION["first_name"]) == "" OR !isset($_SESSION["first_name"]) == "" OR !isset($_SESSION["first_name"]) == "") {

$first_name = $_SESSION["first_name"];
$last_name = $_SESSION["last_name"];
$phone_number = $_SESSION["phone_number"];
$phone_type = $_SESSION["phone_type"];

$sql = "INSERT INTO contact (first_name, last_name, number, phone_type)
VALUES ('$first_name', '$last_name', $phone_number, '$phone_type')";

if (mysqli_query($conn, $sql)) {
    session_unset(); 
    session_destroy(); 
    header ('Location: ./dashboard.php');
} else {
    echo "Error: ".$sql. "<br>". mysqli_error($conn);
}

mysqli_close($conn);
}

?>