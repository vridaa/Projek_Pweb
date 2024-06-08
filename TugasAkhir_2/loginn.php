<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | Tabunganqu</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body background="bg.png">
    <br><br>
<div class="container text-end my-5">
    <div class="row align-items-center">
    <div class="col">
    <div class="container2 my-5 py-5 w-50 text-center border ">
        <img class="w-50" src="logo.png" alt="">
        <br>
    <p class="font-monospace">WELCOME TO OUR WEBSITE^^</p>
    <?php
        if(isset($_GET['info'])){
            if($_GET['info'] == "gagal"){
                echo "Username/Password Mu Salah Nih Keknya";
            }
            if($_GET['info'] == "logout"){
                echo "Anda Telah Berhasil Logout";
            }
        }
    ?>
    <div class="row align-items-center">
        <div class="col">
        <form action="func_login_cek.php"method="POST">
            <div class="container text-center mt-3 mb-3 w-75">
                <input type="username" name="username"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="container text-center mt-3 mb-3 w-75">
                <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <center>
                <br>
            <button type="submit" class="btn btn-primary" style="width: 200px;">Login</button>
            </center>
        </form>
        </div>
    </div>
    <a href="home.php" class="text-start">Kembali</a>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
</body>
</html>