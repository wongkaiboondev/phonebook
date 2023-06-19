<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

include 'connect.php';

$sql = "
UPDATE Contact 
SET first_name = \"{$_SESSION["first_name"]}\"
, last_name = \"{$_SESSION["last_name"]}\"
, phone_type = \"{$_SESSION["phone_type"]}\"
, number = \"{$_SESSION["phone_number"]}\"
WHERE id = {$_SESSION["user_id"]};";

echo $sql;

if (mysqli_query($conn, $sql)) {
    session_unset(); 
    session_destroy(); 
    header ('Location: ./dashboard.php');
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>