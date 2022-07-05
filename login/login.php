<?php
session_start();
    if ( isset($_SESSION["login"])) {
        header("Location: ../adm_penyakit.php");
        exit;
    }
require '../functions.php';


if ( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if ( mysqli_num_rows($result) === 1 ) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;
            header("Location: ../adm_penyakit.php");
            exit;
        }
    }

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-box">
        <h1>Login</h1>

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
            <button type="submit" name="login" class="btn">Sign in</button>
        <a href="registrasi.php">Registrasi</a>
        </form>
    </div>
        

</body>

</html>