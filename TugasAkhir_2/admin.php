
<?php
    session_start();
    if(empty($_SESSION['admin'])){
        header ("location:loginn.php?pesan=belum_login");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=raleway"> -->
    <title>Admin | TabunganQu</title>
</head>
<body background="bg.png" class="overflow-y-hidden">
    <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 cal-auto col-md-2 min-vh-100" style="height: 100vh; width:17vw; background-color: rgba(139, 200, 230, 0.8);">
            <div class="d-flex p-3">
                <img src="logo.png" alt="" style="width: 150px">
            </div>
            <br>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto mx-1 w-25">
                <li class="nav-item">
                    <a class="nav-link Active" style="width: 200px;" aria-current="page" href="admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                    </svg>&nbsp;Dashboard</a>
                </li>
                <br>
                <br>
                <br><br><br><br><br><br>
                <div class="my-5">
                <hr>
                <!-- <li class="nav-item">
                    <a class="nav-link text-black" style="width: 200px;" aria-current="page" href="profil_pengguna.php">Profil</a>
                </li> -->
                <br>
                <center>
                <a href="logout.php"><button type="submit" class="btn btn-danger m-1 p-2" style="width: 150px;">Logout</button></a>
                </center>
                </div>
            </ul>
        </div>

        <!-- PHP DATA -->
        <?php
            include 'koneksidb.php';
            $query = mysqli_query($conn, "SELECT rekening.*, pengguna.* FROM rekening INNER JOIN pengguna ON pengguna.id_pengguna = rekening.id_pengguna");
            // $data = mysqli_fetch_assoc($query);
        ?>
        

        <!-- PHP DATA -->


        <div class="d-flex flex-grow mx-5 overflow-y-scroll mb-5" style="height: 100vh; width: 83vw">
            <div class="container m-5 p-3 w-auto rounded bg-light">
                <div class="table table-dark table-hover ">
                    <table border="1px" class="table table-hover" style="width: 800px; table-layout:fixed;">
                                <tr class="sticky-top">
                                        <td>ID Pengguna</td>
                                        <td>Nama Lengkap</td>
                                        <td>Username</td>
                                        <td>Password</td>
                                        <td>Nomor Rekening</td>
                                        <td>Saldo</td>
                                        <td>Aksi</td>
                                    </tr><?php
                                while ($data = mysqli_fetch_assoc($query)){
                        ?>
                                    
                                    <tr  class="table-primary" onclick="location.href='admin_riwayat.php?id=<?php echo $data['id_pengguna']; ?>'">
                                        <td><?php echo $data['id_pengguna']; ?></td>
                                        <td><?php echo $data['nama_lengkap']; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['password']; ?></td>
                                        <td><?php echo $data['nomor_rekening']; ?></td>
                                        <td><?php echo "Rp.".$data['saldo']; ?></td>
                                        <?php
                                            if($data['status'] == 'Active'){
                                        ?>
                                            <td><a href="func_suspend.php?id=<?php echo $data['id_pengguna'];?>"><button class="btn btn-danger">Suspend</button></a></td>
                                        <?php
                                            }
                                            else{
                                        ?>
                                            <td><a href="func_active.php?id=<?php echo $data['id_pengguna'];?>"><button class="btn btn-success">Activate</button></a></td>
                                        <?php
                                            }
                                        ?>
                                    </tr>
                    <?php
                            }
                        ?>
                        </table>
                            </div>
            </div>
        </div>
    </div>

    <!-- <div class="">
        <nav class="nav flex-column nav-underline bg-secondary w-25 h-100 p-5">
        <div class="container h-25 w-25">
                <h4>TabunganQu</h4>
        </div>
        <a class="nav-link active" aria-current="page" href="#">Profile</a>
        <a class="nav-link" href="#">Transaksi</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </nav>
    </div> -->
</body>
</html>