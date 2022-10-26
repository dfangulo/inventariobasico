<?php
    $host = "192.168.122.218";
    $user = "invbasdb";
    $pass = "Lanix2012$";
    $dbname = "inventariobasico";
    $conn = new mysqli($host , $user, $pass, $dbname);
    mysqli_query($conn , "SET character set utf8");
    if($conn->connect_error){
        die("Database Error : " . $conn->connect_error);
    }
?>