<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login/login.php");
    exit;
}

require 'functions.php';

//ambil data di URL
$kode = $_GET["id"];

//query data mahasiswa berdasarkan kode
$penyakit = query("SELECT * FROM penyakit WHERE id = $kode")[0];

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (ubahpenyakit($_POST) > 0) {
        echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'adm_penyakit.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'adm_penyakit.php';
                </script>
            ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ubah Data</title>
    <link rel="stylesheet" href="css/css/style.css">
</head>

<body>
    <div class="bg">
        <h1 style="text-align: center">Ubah Data</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $penyakit["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $penyakit["gambar"]; ?>">
            <table cellpadding="20">
                <tr>
                    <td><label for="penyakit">Nama Penyakit</label></td>
                    <td><input type="text" name="penyakit" id="penyakit" required value="<?= $penyakit["penyakit"]; ?>"></td>
                </tr>
                <tr>
                    <td><label for="solusi">Solusi</label></td>
                    <td><input type="text" name="solusi" id="solusi" required value="<?= $penyakit["solusi"]; ?>"></td>
                </tr>
                <tr>
                    <td><label for="gambar">Gambar</label></td>
                    <td><img src="img/<?= $penyakit["gambar"]; ?>" alt="" width="200"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="file" name="gambar" id="gambar" ></td>
                </tr>
                <tr>
                    <th colspan="2"><button type="submit" name="submit">KIRIM</button></th>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>