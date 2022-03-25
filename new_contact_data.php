<?php

include "database.php";

    $name= $_POST["first_name"];
    $family= $_POST["last_name"];
    $email = $_POST["email"];
    $mobile = $_POST["phone_number"];
    $phone = $_POST["landline_number"];

    mysqli_query($connection, "INSERT INTO contacts(first_name,last_name,email,phone_number,landline_number) VALUES('$name','$family','$email','$mobile','$phone')");
    
    header("location: index.php");
?>
