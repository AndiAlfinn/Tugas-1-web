<?php 

require '../functions.php';

    if( isset($_POST["register"])) {
        if (registrasi($_POST) > 0) {
            echo "<script>
                    alert('user baru berhasil ditambahkan');
                    </script>";
                    header("Location: login.php");
        }else {
            echo mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


<div class="login-box">
        <h1>REGISTRASI</h1>

        <?php if (isset($error) ) : ?>
            <p style="color: red; font-style: italic;">username / password salah</p>
        <?php endif; ?>    
        <form action="" method="post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="password2" placeholder="Konfirmasi Password">
            </div>
            <button type="submit" name="register" class="btn">REGISTRASI!</button>
        </form>
    </div>
</body>
</html>