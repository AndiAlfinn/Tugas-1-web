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
$gejala = query("SELECT * FROM gejala WHERE id = $kode")[0];

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (ubahgejala($_POST) > 0) {
        echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'adm_gejala.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'adm_gejala.php';
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

        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $gejala["id"]; ?>">
            <table cellpadding="20">
                <tr>
                    <td><label for="gejala">Masukkan Gejala</label></td>
                    <td><input type="text" name="gejala" id="gejala" required value="<?= $gejala["gejala"]; ?>"></td>
                </tr>
                <tr>
                    <td><label for="penyakit_id">Masukkan Kode Penyakit</label></td>
                    <td><input type="text" name="penyakit_id" id="penyakit_id" required value="<?= $gejala["penyakit_id"]; ?>"></td>
                </tr>
                <tr>
                    <th colspan="2"><button type="submit" name="submit">KIRIM</button></th>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>