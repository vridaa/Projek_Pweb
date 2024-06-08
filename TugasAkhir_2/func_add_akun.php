<?php
    session_start();

    include 'koneksidb.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $nama_lengkap = $_POST['nama_lengkap'];
    if(isset($_POST["check"])){
        $checkbox = $_POST["check"];
    }

    function generateRandomAccountNumber($conn) {
        $unique = false;
        $nomorRekening = '';
    
        while (!$unique) {
            $nomorRekening = str_pad(mt_rand(1, 99999), 7, '0', STR_PAD_LEFT);
    
            // Periksa apakah nomor rekening sudah ada dalam database
            $result = $conn->query("SELECT 1 FROM rekening WHERE nomor_rekening = '$nomorRekening'");
            
            if ($result && $result->num_rows == 0) {
                $unique = true;
            }
        }
    
        return $nomorRekening;
    }

    $cek_data = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");

    $username_cek = mysqli_num_rows($cek_data);

    if($username_cek > 0){
        header("location: registerr.php?info=salah");
    }
    else{
        $query = mysqli_query($conn, "INSERT INTO pengguna VALUES ('$username', '$password', '$email', '$no_telp', '$alamat', '$nama_lengkap', '0', UUID(), 'Active')") or die (mysqli_error($conn));

        if($query){
            $nomorRekeningBaru = generateRandomAccountNumber($conn);
            $data = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");
            $data_pengguna = mysqli_fetch_array($data);
            $id_pengguna = $data_pengguna['id_pengguna'];

            $query_rekening = mysqli_query($conn, "INSERT INTO rekening VALUES ('', '$nomorRekeningBaru', '$id_pengguna')");
        }


        header("location: loginn.php?info=benar");
    }


?>