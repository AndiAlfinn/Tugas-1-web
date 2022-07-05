<?php
session_start();
if ( !isset($_SESSION["login"])) {
    header("Location: login/login.php");
    exit;
}

    require 'functions.php';

    if (isset($_POST["submit"])) {
        if (tambahpenyakit($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'adm_penyakit.php';
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'adm_penyakit.php';
                </script>
            ";
        }

        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="penyakit">Nama Penyakit</label>
        <input type="text" name="penyakit" id="penyakit" required><br>
        <label for="solusi">Solusi</label>
        <input type="text" name="solusi" id="solusi" required><br>
        <button type="submit" name="submit">KIRIM</button>
    </form>
    
</body>
</html>