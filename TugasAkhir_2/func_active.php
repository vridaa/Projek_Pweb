<?php
    session_start();
    include 'koneksidb.php';

    $id_pengguna = $_GET['id'];

    $query = mysqli_query($conn, "UPDATE pengguna SET status = 'Active' WHERE id_pengguna = '$id_pengguna'");

    if($query){
        header("location:admin.php");
    }
?>