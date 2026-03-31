<?php

include "../includes/config.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$hash_password = password_hash($password, PASSWORD_DEFAULT);
// $message = $_POST['message'];


$query = "SELECT *FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    echo "email alredy exist!";
} else {
    $sql = "INSERT INTO users(First_Name, Last_Name, Email, Password, Phone, State)
        VALUES('$first_name', '$last_name', '$email', '$hash_password', '$phone', '$state')";

    if (mysqli_query($conn, $sql)) {
        // echo "Data inserted successfully!";
        header("Location: ../register.php");
    } else {
        echo "Data failed!";
    }
}






