<?php
        session_start();

        include 'koneksidb.php';
    
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $data = mysqli_query($conn, "SELECT * FROM pengguna WHERE username='$username' AND password='$password'")
                            or die (mysqli_error($conn));
    
        $cek = mysqli_num_rows($data);
        $result = mysqli_fetch_assoc($data);
        if($cek > 0){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            $_SESSION['id'] = $result['id_pengguna'];
            if($username == "admin"){
                $_SESSION['admin'] = 'admin';
                header("location: admin.php");
             }
             else{
                 header("location:dashboard.php");
             }
        }else{
            header("location:loginn.php?info=gagal");
        }
?>