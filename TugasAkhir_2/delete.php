<?php
    session_start();
    include 'koneksidb.php';
    $id = $_SESSION['id'];

    $query = mysqli_query($conn, "DELETE FROM catatan WHERE id_pengguna = '$id'");

    if($query){
        header("location:catatan.php");
    }
?>