<?php

include "../../includes/config.php";


// $id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$message = $_POST['message'];



$sql = "INSERT INTO form(name, email, phone, city, message)

VALUES('$name' , '$email' , '$phone' , '$city', '$message')";

if(mysqli_query($conn, $sql)){
    // echo "Data inserted successfully!";
    header("Location: ../contact.php");

}else{
    echo "Data failed!";
}

?>