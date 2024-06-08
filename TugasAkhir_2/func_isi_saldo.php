<?php
    include 'koneksidb.php';
    session_start();

    $id_pengguna = $_SESSION['id'];
    $nominal = $_POST['nominal'];
    // $keterangan = $_POST['keterangan'];

    $tanggal_sekarang = date("Y-m-d");
    $query3 = mysqli_query($conn, "SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'");
    $data = mysqli_fetch_assoc($query3);

    if($data['status'] == 'Suspend'){
        header("location:isi_saldo.php?info=suspend");
    }
    else{
        $query = mysqli_query($conn, "UPDATE pengguna SET saldo = saldo + '$nominal' WHERE id_pengguna = '$id_pengguna'");
        $query2 = mysqli_query($conn, "INSERT INTO transaksi VALUES ('', 'Isi Saldo', '$tanggal_sekarang', '$nominal', 'Tambah Saldo', 'in', '-', '$id_pengguna')") or die (mysqli_error($conn));
    
        if($query&&$query2){
            header("location: dashboard.php");
        }
    }
    
?>