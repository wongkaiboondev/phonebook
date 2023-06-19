<?php 

include 'connect.php';

$sql = "
SELECT a.id, a.last_name, a.first_name, a.number as phone_number, b.description as phone_type FROM Contact a 
left join phone_type b
on b.type = a.phone_type
order by a.last_name asc
";

$result = mysqli_query($conn, $sql);
$counter = 0;
$data = array();

if(mysqli_num_rows($result) > 0) {
    //output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        $data[$counter]['first_name'] = $row["first_name"];
        $data[$counter]['last_name']  = $row["last_name"];
        $data[$counter]['phone_number'] = $row["phone_number"];
        $data[$counter]['phone_type'] = $row["phone_type"];
        $data[$counter]['unique_id'] = base64_encode($row["first_name"].$row["last_name"]."-".$row["id"]);
        // $i[$data] = $row["first_name"]. " " .$row["last_name"]. " " .$row["phone_number"]. " ".$row["phone_type"]. "<br><br>";
        $counter++;
    }
}

mysqli_close($conn);
?>