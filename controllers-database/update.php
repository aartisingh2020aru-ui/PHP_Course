<?php

include "../includes/config.php";


$id = $_POST['id'];
$full_name = $_POST['full_Name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "UPDATE php_contacts SET Name = '$full_name', Email='$email', Phone='$phone', Message ='$message' WHERE ID = '$id'";

if(mysqli_query($conn,$sql)){
    echo "Data Updated Successfully!";
}else{
    echo "Updation Failed!";
}

?>