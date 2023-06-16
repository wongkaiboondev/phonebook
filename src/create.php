<?php 

// include 'connect.php';

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

// echo "Connected Successfully";

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$phone_number = $_POST["phone_number"];
$phone_type = $_POST["phone_type"];

// Insert into contact

$sql = "INSERT INTO contact (first_name, last_name, number, phone_type)
VALUES ('$first_name', '$last_name', $phone_number, '$phone_type')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: ".$sql. "<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>

