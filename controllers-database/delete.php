<?php

    include "../includes/config.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM php_contacts WHERE id = '$id'";

    if(mysqli_query($conn,$sql)){
        // echo "Data deleted successfully!";
        header("Location: ../my-account.php");
    }else{
        echo "Somthing went wrong!";
    }


?>