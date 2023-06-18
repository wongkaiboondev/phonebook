<?php

session_start();
include 'connect.php';

// sql to delete a record
$sql = "DELETE FROM Contact WHERE first_name = 2";

if (mysqli_query($conn, $sql)) {
  session_unset(); 
  session_destroy(); 
  header ('Location: ./dashboard.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>