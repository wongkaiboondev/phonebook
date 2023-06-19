<?php 

    include './select_all.php'; 
    include './header.php';
?>
    <body class="container">
    <h1>Contact List</h1>
    <br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table class="table table-bordered">
            <thead>
                <tr> 
                    <th scope="col">No</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Phone Type</th>
                    <th scope="col">Number</th>
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
                    echo "<th>". $data[$x]["phone_type"] ."</th>";
                    echo "<th>". $data[$x]["phone_number"] ."</th>";
                    echo "<th> 
                        <input type=\"hidden\" class=\"pb_btn\" name=\"pb_btn\" value=". $data[$x]["unique_id"]. ">
                        <button type=\"button\" class=\"btn btn-outline-primary update-btn\">Update</button>
                        <button type=\"button\" class=\"btn btn-outline-danger remove-btn\">Remove</button>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </form>
    <br><br>
    <div class="row">
        <div class="col-6">
            <input id = "create_btn" class="btn btn-secondary" type="Submit" value="New Contact">
        </div>
        <div class="col-6">
            
        </div>
    </div>
    </body>

<?php 
    include './footer.php'; 
?>

<script type="text/javascript">

$(document).ready(function() {

    document.getElementById("create_btn").onclick = function () {
        location.href = "../index.php";
    };
    var unique_id;
    console.log("console");

    $(".remove-btn").click(function(){
        //get the encode id
        unique_id = $(this).siblings(".pb_btn").val();
        remove(unique_id);
    });

    $(".update-btn").click(function(){
        //get the encode id
        unique_id = $(this).siblings(".pb_btn").val();
        update(unique_id);
    });

    function update(unique_id) {

        jQuery.ajax({
            type: "POST",
            url: "select_one.php",
            data: {
                id: unique_id
            },
            success: function(data) 
            {
                // console.log(data);
                location.href = "update_list.php";
            },
            error: function() {
                console.log('There was some error performing the AJAX call');
            }
        });
    }
    function remove(unique_id) {

        jQuery.ajax({
            type: "POST",
            url: "remove.php",
            data: {
                id: unique_id
            },
            success: function(data) 
            {
                if(data == 1){
                    location.href = 'dashboard.php';
                }
                else {
                    console.log('Ajax return failed');
                }
            },
            error: function() {
                console.log('There was some error performing the AJAX call');
            }
        });
    }
})

</script>