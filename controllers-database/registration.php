<?php

    include "../includes/config.php";

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    // $message = $_POST['message'];


$sql = "INSERT INTO users(First_Name, Last_Name, Email, Password, Phone, State)
        VALUES('$first_name', '$last_name', '$email', '$password', '$phone', '$state')";



if(mysqli_query($conn, $sql)){
    echo "Data inserted successfully!";
        // header("Location: ../register.php");

}else{
    echo "Data failed!";    
}

?>