<?php

include 'connect.php';

$user_id = "";
$status = "";

if (isset($_POST["id"])){
  $decoded_userid = base64_decode($_POST["id"]);
  $user_id =  explode("-", $decoded_userid);
  $user_id = $user_id[1];
}

// sql to delete a record
$sql = "DELETE FROM Contact WHERE id = " . $user_id;

if (mysqli_query($conn, $sql)) {
  $status = 1;
  return $status;

} else {
  $status = 0;
  return $status;

}

mysqli_close($conn);
?>