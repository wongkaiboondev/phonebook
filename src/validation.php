<?php

include 'filter_input.php';

// declare variable
$first_name = "";
$last_name = "";
$phone_number = "";
$phone_type = "";

$first_name_msg = "";
$last_name_msg = "";
$phone_number_msg = "";
$phone_type_msg = "";

$validation = FALSE;

// Validation Empty Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["first_name"])) {
        $first_name_msg = "Please fill in your First Name";
    } else {
        $first_name = filter($_POST["first_name"]);
        $_SESSION["first_name"] = $first_name;
    }

    if (empty($_POST["last_name"])) {
        $last_name_msg = "Please fill in your Last Name";
    } else {
        $last_name = filter($_POST["last_name"]);
        $_SESSION["last_name"] = $last_name;
    }

    if (empty($_POST["phone_number"])) {
        $phone_number_msg = "Please fill in your phone number";
    } else {
        $phone_number = (int)filter($_POST["phone_number"]);
        
        if (!filter_var($phone_number, FILTER_VALIDATE_INT) === FALSE) {
            $_SESSION["phone_number"] = $phone_number;

        } else {

            $phone_number_msg = "Fill your phone number in this format. Exp: 0123456789 ";
        }
    }

    if (empty($_POST["phone_type"])) {
        $phone_type_msg = "Please Select your Phone Type";
        
    } else {
        $phone_type = filter($_POST["phone_type"]);
        $_SESSION["phone_type"] = $phone_type;
    }

    $validation = TRUE;
} 

if (!$validation == FALSE) {

    header ('Location: ./src/create.php');
}
?>