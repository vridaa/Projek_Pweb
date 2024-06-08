<?php
    include 'koneksidb.php';

    $id_pengguna = $_GET['id'];

    $query = mysqli_query($conn, "UPDATE pengguna SET status='Suspend' WHERE id_pengguna = '$id_pengguna'")or die (mysqli_error($conn));

    if($query){
        header("location:admin.php");
    }
?>