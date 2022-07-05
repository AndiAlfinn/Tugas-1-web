<?php
session_start();
if ( !isset($_SESSION["login"])) {
    header("Location: login/login.php");
    exit;
}

    require 'functions.php';

    if (isset($_POST["submit"])) {
        if (tambahgejala($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'adm_gejala.php';
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'adm_gejala.php';
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

    <form action="" method="post">
        <label for="gejala">Masukkan Gejala</label>
        <input type="text" name="gejala" id="gejala" required><br>
        <label for="penyakit_id">Masukkan Kode Penyakit</label>
        <input type="text" name="penyakit_id" id="penyakit_id" required><br>


        <button type="submit" name="submit">KIRIM</button>
    </form>
    
</body>
</html>