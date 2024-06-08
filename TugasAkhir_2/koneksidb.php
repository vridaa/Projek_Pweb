<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tabunganqu2";

    $conn = new mysqli($hostname,$username,$password,$database);

    if($conn->connect_error){
        die ('Database Gagal Tersambung'. $conn->connect_error);
    }

    // echo "Versi MySQL: " . mysqli_get_server_info($conn);
?>