<?php
    session_start();
    include 'koneksidb.php';
    $id = $_SESSION['id'];
    $isi = $_POST['isi'];
    $tanggal_sekarang = date("Y-m-d");

    $query = mysqli_query($conn, "INSERT INTO catatan VALUES ('', '$isi', '$tanggal_sekarang', '$id')");

    if($query){
        header("location:catatan.php");
    }
?>