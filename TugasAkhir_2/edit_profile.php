<?php
    session_start();
    if(empty($_SESSION['username'])){
        header ("location:login.php?pesan=belum_login");
    }
    $id_pengguna = $_SESSION['id'];
?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile | TabunganQu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body background="bg.png" class="overflow-y-hidden overflow-x-hidden">
    <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 cal-auto col-md-2 min-vh-100" style="height: 100%; background-color: rgba(139, 200, 230, 0.8);">
            <div class="d-flex p-3">
                <img src="logo.png" alt="" style="width: 150px">
            </div>
            <br>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto mx-1 w-25">
                <li class="nav-item">
                    <a class="nav-link text-black " style="width: 14vw;" aria-current="page" href="dashboard.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                    </svg>&nbsp;Dashboard</a>
                </li>
                <br>
                <li class="nav-item">
                    <a class="nav-link text-black" style="width: 14vw;" aria-current="page" href="daftar_transaksi.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>&nbsp;Riwayat Transaksi</a>
                </li>
                <br>
                <li class="nav-item">
                    <a class="nav-link text-black" style="width: 14vw;" aria-current="page" href="kirim_uang.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                    </svg>&nbsp;Kirim Uang</a>
                </li>
                <br><br>
                <div class="my-5">
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link text-black" style="width: 200px;" aria-current="page" href="catatan.php">Catatan Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="profil_pengguna.php"><u>Profil</u></a>
                    </li>
                    <br>
                    <center>
                    <a href="logout.php"><button type="submit" class="btn btn-danger m-1 p-2" style="width: 150px;">Logout</button></a>
                    </center>
                </div>
            </ul>
        </div>
    
        <div d-flex flex-grow my-5 text-center mx-5>
        <?php
            include 'koneksidb.php';
            $query = mysqli_query($conn, "SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'");
            $data = mysqli_fetch_array($query);
        ?>
        <div class="container-fluid rounded mx-5" style="height: 500px; width: 1000px; background-color: none">
        <div class="card mx-5 mb-3 text-center my-5" style="width: 850px;">
        
                        <div class="row g-0">
                            <div class="col-md-4 my-5 py-5">
                            <img src="profile.webp" alt="" class="rounded-circle" style="width: 150px;">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body text-start w-75">
                                <h3 class="card-title text-start mx-5">Profil Saya</h3>
                                <br>
                                <?php
                                    if(isset($_GET['info'])){
                                        if($_GET['info'] == 'terpakai'){
                                            echo "Username Telah Terpakai";
                                        }
                                    }
                                ?>
                                <p class="card-text">
                                <form action="update_profil.php" method="post">
                                    <div class="row mb-3 ">
                                        <label class="col-sm-3 col-form-label">ID User&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                                        <div class="col-sm-9 text-start">
                                        <input readonly type="text" class="form-control" name="id_pengguna" value="<?php echo $data['id_pengguna']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3 ">
                                        <label  class="col-sm-3 col-form-label">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                                        <div class="col-sm-9 text-start">
                                        <input readonly type="text" class="form-control" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3 ">
                                        <label  class="col-sm-3 col-form-label" >Username&nbsp;: </label>
                                        <div class="col-sm-9 text-start">
                                        <input type="username" class="form-control" name="username" value="<?php echo $data['username']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label  class="col-sm-3 col-form-label" >Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                                        <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Telepon&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                                        <div class="col-sm-9">
                                        <input type="tel" class="form-control" name="no_telp" value="<?php echo $data['no_telp']; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="alamat" class="col-sm-3 col-form-label">Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>">
                                        </div>
                                    </div>
                                </p>
                                <br><br>
                                <button type="submit" class="btn btn-primary px-5">Edit</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        </form>
            
        </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>