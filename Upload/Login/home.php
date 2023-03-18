<!DOCTYPE html>
<html>
<head>
    <title>Modul Auth - Home</title>
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

    // Cek apakah pengguna sudah login
    if (!isset($_SESSION['username'])) {
        header("Location: login.php"); // jika belum, maka arahkan ke halaman login
        exit();
    }
    ?>

    <h2>Login berhasil</h2>
    <p>Selamat datang, <?php echo $_SESSION['username']; ?></p>

    <!-- Tombol logout -->
    <a href="home.php?logout">Logout</a>
</body>
</html>
