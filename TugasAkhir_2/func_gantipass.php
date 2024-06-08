<?php
    include 'koneksidb.php';
    session_start();
    $id = $_SESSION['id'];
    $old_pass = $_POST['op'];
    $new_pass = $_POST['np'];

    $query = mysqli_query($conn, "SELECT * FROM pengguna WHERE id_pengguna = '$id' AND password = '$old_pass'");
    $cek_data = mysqli_num_rows($query);

    if($cek_data == 0){
        header("location:ganti_password.php?info=tidakada");
    }
    else{
        $query2 = mysqli_query($conn, "UPDATE pengguna SET password = '$new_pass' WHERE id_pengguna = '$id'");
        if($query2){
            header("location:profil_pengguna.php?info=berhasil");
        }
    }

?>