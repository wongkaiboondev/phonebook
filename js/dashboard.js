$(document).ready(function() {

    document.getElementById("create_btn").onclick = function () {
        location.href = "../index.php";
    };
    var unique_id;

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
            url: "../src/remove.php",
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