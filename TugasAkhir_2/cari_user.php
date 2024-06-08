<?php
    include 'koneksidb.php';
    session_start();
    $keyword = $_GET['keyword'];
    $id_pengguna = $_SESSION['id'];
    // echo $id_pengguna;

    $query = "SELECT rekening.*, pengguna.* FROM rekening INNER JOIN pengguna ON pengguna.id_pengguna = rekening.id_pengguna WHERE rekening.nomor_rekening LIKE '%$keyword%' AND pengguna.id_pengguna != '$id_pengguna' AND rekening.id_pengguna != '$id_pengguna' LIMIT 10";
    $queryy = mysqli_query($conn, $query);
    
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<table class="table table-striped table-hover">
    <?php
        while ($data = mysqli_fetch_assoc($queryy)){

    ?>
        <tr onclick="location.href='button_kirim_uang.php?id_pengguna_away=<?php echo $data['id_pengguna']; ?>'">
            <td><?php echo $data['nama_lengkap']; ?></td>
            <td><?php echo $data['nomor_rekening']; ?></td>
        </tr>
    <?php
        }
    ?>
</table>