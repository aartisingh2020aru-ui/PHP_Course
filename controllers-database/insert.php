<?php

include "../includes/config.php";


// $id = $_POST['id'];
$full_name = $_POST['full_Name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// echo $full_name;
// echo $email;
// echo $phone;
// echo $message;

$sql = "INSERT INTO php_contacts(Name, Email, Phone, Message)

VALUES('$full_name' , '$email' , '$phone' , '$message')";

if(mysqli_query($conn, $sql)){
    echo "Data inserted successfully!";
}else{
    echo "Data failed!";
}

?>