<?php 
    include 'select.php'; 
    include 'header.php';
    ?>

<html>
    <body class="container">
    <h1>Phone Book Dashboard</h1>
    <br><br>
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
            for ($x = 0; $x < count($data); $x++){
                echo "<tr>";
                echo "<th scope=\"row\">". $x + 1 ."</th>";
                echo "<th>". $data[$x]["last_name"] ."</th>";
                echo "<th>". $data[$x]["first_name"] ."</th>";
                echo "<th>". $data[$x]["phone_number"] ."</th>";
                echo "<th>". $data[$x]["phone_type"] ."</th>";
                echo "<th> 
                    <input type=\"hidden\" id=\"btn\" name=\"btn\" value=". $data[$x]["unique_id"]. ">
                    <button type=\"button\" class=\"btn btn-outline-primary update-btn\">Update</button>
                    <button type=\"button\" class=\"btn btn-outline-danger remove-btn\">Remove</button>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
    <br><br>
    <div class="row">
        <div class="col-6">
            <input id = "create_btn" class="btn btn-secondary" type="Submit" value="New Contact">
        </div>
        <div class="col-6">
            
        </div>
    </div>
    </body>
</html>

<script type="text/javascript">

    document.getElementById("create_btn").onclick = function () {
        location.href = "http://localhost/phonebook/index.php";
    };

    // document.querySelectorAll(".update-btn").forEach(e => e.addEventListener('click', () => {

    // }))):.onclick = function(){
    //     console.log("clicked new contact");
    // };

    // document.querySelectorAll(".remove-btn").onclick = function(){
    //     console.log("clicked delete contact");
    // };

</script>
