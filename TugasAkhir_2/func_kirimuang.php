<?php
    include 'koneksidb.php';
    session_start();

    $id_tujuan = $_GET['id_pengguna_away'];
    $id_asal = $_SESSION['id'];
    $nominal = $_POST['nominal'];
    $keterangan=$_POST['keterangan'];
    $nominal_negatif = -$nominal;

    $data1 = mysqli_query($conn, "SELECT * FROM pengguna WHERE id_pengguna='$id_tujuan'");
    $data2 = mysqli_query($conn, "SELECT * FROM pengguna WHERE id_pengguna='$id_asal'");

    $result1 = mysqli_fetch_assoc($data1); 
    $result2 = mysqli_fetch_assoc($data2);

    if($result2['status'] == 'Suspend'){
        header("location:kirim_uang.php?info=suspend");
    }
    else if($result1['status'] == 'Suspend'){
        header("location:kirim_uang.php?info=tersuspend");
    }
    else{
        if($nominal > $result2['saldo']){
            header("location:kirim_uang.php?info=uangkurang");
        }
        else{
            $tanggal_sekarang = date("Y-m-d");
        
            $query = mysqli_query($conn, "UPDATE pengguna SET saldo = saldo + '$nominal' WHERE id_pengguna = '$id_tujuan'");
            $query2 = mysqli_query($conn, "UPDATE pengguna SET saldo = saldo - '$nominal' WHERE id_pengguna = '$id_asal'");
            $query3 = mysqli_query($conn, "INSERT INTO transaksi VALUES ('', 'Kirim Uang Ke ".$result1['nama_lengkap']."', '$tanggal_sekarang', '$nominal_negatif', 'Kirim Uang', 'out', '$keterangan', '$id_asal')");
            $query4 = mysqli_query($conn, "INSERT INTO transaksi VALUES ('', 'Terima Uang Dari ".$result2['nama_lengkap']."', '$tanggal_sekarang', '$nominal', 'Terima Uang', 'in', '$keterangan', '$id_tujuan')");
        
            if($query&&$query2&&$query3&&$query4){
                header("location:kirim_uang.php?id_pengguna=".$result2['id_pengguna']."&info=berhasil");
            }
        }
    }


?>