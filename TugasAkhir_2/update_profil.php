<?php
    include 'koneksidb.php';
    $id_pengguna=$_POST['id_pengguna'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $cek_data = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");

    $username_cek = mysqli_num_rows($cek_data);

    if($username_cek > 0){
        header("location:edit_profile.php?info=terpakai");
    }
    else{
        $query = mysqli_query($conn, "UPDATE pengguna SET username='$username',email='$email',no_telp='$no_telp',alamat='$alamat' WHERE id_pengguna = '$id_pengguna'") 
        or die (mysqli_error($conn));
    
        if($query){
            header("location: profil_pengguna.php");
        }
    }
?>