<?php

    require 'functions.php';

    $kode = $_GET["id"];

    if ( hapusgejala($kode) > 0 ) {
        echo "
                <script>
                    alert('Data Berhasil Dihapus');
                    document.location.href = 'adm_gejala.php';
                </script>
        ";
    }else{
        echo "
                <script>
                    alert('Data Gagal Dihapus');
                    document.location.href = 'adm_gejala.php';
                </script>
            ";
    }

?>