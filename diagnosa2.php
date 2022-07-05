<?php 

require 'functions.php';

if (isset($_POST["submit"]) ) {
    $gjala = $_POST["gejala"];
    $count_values = array_count_values($gjala);//menghitung jumlah yg duplikat
    function findDuplicates($count_values) {
        return $count_values > 1;
    }
    $duplicates = array_filter(array_count_values($gjala), "findDuplicates");//menampilkan item yg duplikat saja
    $clear_array = array_unique($gjala);//menghapus nilai yang duplikat, jdi cuma ada satu data sja
    //die(print_r($clear_array));

    $values = array_values($clear_array);
    for ($i=0; $i < count($values); $i++) { 
        $query = "SELECT * FROM penyakit WHERE id = '$values[$i]'";
        $result[$i] = mysqli_query($conn, $query);
        $data[$i] = mysqli_fetch_assoc($result[$i]);
    }
    

    
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Diagnosa</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/style.css">
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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="diagnosa.php">Diagnosa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bantuan.php">Bantuan</a>
                </li>

            </ul>
            <a href="login/login.php"><button type="button" class="btn btn-outline-danger">Admin</button></a>
        </div>
    </nav>

    <!-- penutup navbar -->

    <!-- pembuka content -->
    <div class="container">

            <table  class="data table table-stripped table-bordered table-hover">
                <tr>
                    <h3>Penyakit dari Jantung Anda Adalah</h3>
                </tr>
                <tr>
                    <th>Kode</th>
                    <th>Penyakit</th>
                    <th>Solusi</th>
                </tr>
                <?php foreach ($data as $pnyakit) : ?>
                <tr>
                    <th><?= $pnyakit["id"]?></th>
                    <th><?= $pnyakit["penyakit"]?></th>
                    <th><?= $pnyakit["solusi"]?></th>
                </tr>
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