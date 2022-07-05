<?php 
    //koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "pakarjagung");


    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;

    }


    function tambahpenyakit($data) {
        global $conn;
        
        $penyakit = htmlspecialchars($data["penyakit"]);
        $solusi = htmlspecialchars($data["solusi"]);
        $query = "INSERT INTO penyakit VALUES
                    ('', '$penyakit', '$solusi')
                 ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }


    function tambahgejala($data) {
        global $conn;
        
        $gejala = htmlspecialchars($data["gejala"]);
        $penyakit_id = htmlspecialchars($data["penyakit_id"]);

        $query = "INSERT INTO gejala VALUES
                    ('', '$gejala', '$penyakit_id')
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }


    function hapuspenyakit($kode) {
        global $conn;
        mysqli_query($conn, "DELETE FROM penyakit WHERE id = $");

        return mysqli_affected_rows($conn);
    }


    function hapusgejala($kode) {
        global $conn;
        $id = $kode;
        mysqli_query($conn, "DELETE FROM gejala WHERE id = $id");

        return mysqli_affected_rows($conn);
    }


    function ubahpenyakit($data) {
        global $conn;
        
        $kode = $data ["id"];
        $penyakit = htmlspecialchars($data["penyakit"]);
        $solusi = htmlspecialchars($data["solusi"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        $query = "UPDATE penyakit SET
                penyakit = '$penyakit',
                solusi = '$solusi'
                WHERE id = $kode
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


    function ubahgejala($data) {
        global $conn;
        
        $kode = $data ["id"];
        $gejala = htmlspecialchars($data["gejala"]);
        $penyakit_id = htmlspecialchars($data["penyakit_id"]);


        $query = "UPDATE gejala SET
                gejala = '$gejala',
                penyakit_id = '$penyakit_id'
                WHERE id = $kode
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }




    function registrasi($data) {
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        //cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('username sudah terdaftar')
                </script>";
            
            return false;
        }

        //cek konfirmasi password
        if ($password !== $password2) {
            echo "<script>
                    alert('konfirmasi password tidak sesuai');
                    </script>";
                return false;
        }
        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        //tambahkan user password ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }



    function diagnosa($data) {
        global $conn;
        
        $kode = $data ["id"];
        $penyakit = htmlspecialchars($data["penyakit"]);
        $solusi = htmlspecialchars($data["solusi"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);


        $query = "UPDATE penyakit SET
                penyakit = '$penyakit',
                solusi = '$solusi',
                WHERE id = $kode
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
