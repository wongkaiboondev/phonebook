<?php 
    include 'select.php'; 
    include 'header.php';
?>
<html>
    <body class="container">
    <h1>Phone Book Dashboard</h1>
    <table class="table table-bordered">
        <thead>
            <tr> 
                <th scope="col">No</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Number</th>
                <th scope="col">Phone Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // echo count($data);
            // echo $data[0]["first_name"]
            for ($x = 0; $x < count($data); $x++){
                echo "<tr>";
                echo "<th scope=\"row\">". $x ."</th>";
                echo "<th>". $data[$x]["last_name"] ."</th>";
                echo "<th>". $data[$x]["first_name"] ."</th>";
                echo "<th>". $data[$x]["phone_number"] ."</th>";
                echo "<th>". $data[$x]["phone_type"] ."</th>";
                echo "<th> 
                    <button type=\"button\" class=\"btn btn-outline-primary\">Update</button>
                    <button type=\"button\" class=\"btn btn-outline-danger\">Remove</button>";
                echo "</tr>";
            }
            echo $_SERVER["PHP_SELF"];
            ?>
        </tbody>
    </body>

</html>

<script>

</script>
