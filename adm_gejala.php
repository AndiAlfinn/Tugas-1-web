<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login/login.php");
    exit;
}
require 'functions.php';

$gejala = query("SELECT * FROM gejala");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Informasi Penyakit Jantung</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>
    <!-- pembuka navbar -->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button type="button" class="btn btn-primary">
            PAKAR <span class="badge badge-light">J</span>
            <span class="sr-only">unread messages</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="adm_penyakit.php">Penyakit <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adm_gejala.php">Gejala</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adm_relasi.php">Relasi Analisa</a>
                </li>

            </ul>
            <a href="login/logout.php"><button type="button" class="btn btn-danger">Log Out</button></a>
        </div>
    </nav>
    <!-- penutup navbar -->

    <!-- pembuka content -->
    <div class="container">

        <a href="tambahgejala.php" class="badge badge-primary">Tambah Data</a>
        <table class="data table table-stripped table-bordered table-hover">
            <tr>
                <h3>Gejala Jantung</h3>
            </tr>
            <tr>
                <th>NO</th>
                <th>Kode Gejala</th>
                <th>Nama Gejala</th>
                <th>Kode Penyakit</th>
                <th colspan="2">Opsi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($gejala as $gjala) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $gjala["id"]; ?></td>
                    <td><?= $gjala["gejala"]; ?></td>
                    <td><?= $gjala["penyakit_id"]; ?></td>
                    <td><a href="ubahgejala.php?id=<?= $gjala["id"]; ?>" class="badge badge-primary">Edit</a></td>
                    <td><a href="hapusgejala.php?id=<?= $gjala["id"]; ?>"
                     onclick="return confirm('Apakah anda yakin ingin menghapus?');" class="badge badge-primary"; >Hapus</a></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>

        </table>

    </div>












    <!-- penutup content -->


    <!-- pembuka footer -->
    <div class="footer">
        <p>Kelompok 8 @darmawati @mulkimoehammadsean</p>
    </div>
    <!-- penutup footer -->




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>

</html>