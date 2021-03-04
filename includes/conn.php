<?php
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "laravel";

    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName) or die("Error: " . mysqli_error($con));
    mysqli_query($conn, "SET NAMES 'utf8' "); 
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>