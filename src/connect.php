<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PhoneBook";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected Successfully";
?>