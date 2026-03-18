<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "web_db";

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn){
    // die("Connection Failed:" . mysqli_connect_error());
    
    echo "Connect Failed!";
}else{
    echo "Connection Successfull!";
}


?>