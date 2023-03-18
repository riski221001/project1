<!DOCTYPE html>
<html>
<head>
    <title>Modul Auth</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    session_start(); // memulai session
    require_once('koneksi.php'); // mengambil file koneksi.php

    // Fungsi logout
    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: login.php");
    }

    // Fungsi register
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = add_user($username, $password);
        if ($result) {
            echo "<p class='success'>Pendaftaran berhasil</p>";
        } else {
            echo "<p class='error'>Pendaftaran gagal</p>";
        }
    }

    // Fungsi login
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $authenticated = authenticate_user($username, $password);
        if ($authenticated) {
            $_SESSION['username'] = $username; // menyimpan nama pengguna ke dalam session
            header("Location: home.php"); // mengarahkan pengguna ke halaman home.php setelah login berhasil
            exit(); // keluar dari script untuk mencegah eksekusi kode yang tidak diperlukan
        } else {
            echo "<p class='error'>Login gagal</p>";
        }
    }
    ?>

    <div class="container">
        <div class="form">
            <!-- Form register -->
            <h2>Register</h2>
            <form method="post" action="">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="btn-container">
                    <input type="submit" name="register" value="Register" class="btn">
                </div>
            </form>

            <!-- Form login -->
            <h2>Login</h2>
            <form method="post" action="">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="btn-container">
                    <input type="submit" name="login" value="Login" class="btn">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
