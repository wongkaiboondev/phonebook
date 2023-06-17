<?php 

include 'connect.php';
include 'filter_input.php';

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