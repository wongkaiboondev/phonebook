<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include 'connect.php';

$user_id = "";
$status = "";

if (isset($_POST["id"])) {
    $decoded_userid = base64_decode($_POST["id"]);
    $user_id =  explode("-", $decoded_userid);
    $user_id = $user_id[1];
} 

$_SESSION['user_id'] = $user_id;

$sql = "
SELECT a.id, a.last_name, a.first_name, a.number as phone_number, b.description as phone_type FROM Contact a 
left join phone_type b
on b.type = a.phone_type
where a.id =  ". $user_id ." order by a.last_name asc
";

$result = mysqli_query($conn, $sql);
$data = array();

if(mysqli_num_rows($result) > 0) {
    //output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        $_SESSION['first_name'] = $row["first_name"];
        $_SESSION['last_name']  = $row["last_name"];
        $_SESSION['phone_number'] = $row["phone_number"];
        $_SESSION['phone_type'] = $row["phone_type"];
    }
}

mysqli_close($conn);
?>