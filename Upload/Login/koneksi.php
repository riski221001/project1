<?php
// Konfigurasi koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "login";

$conn = mysqli_connect($host, $user, $password, $dbname);

// Fungsi untuk menambahkan user baru ke tabel user
function add_user($username, $password)
{
    global $conn;
    $hash_password = password_hash($password, PASSWORD_DEFAULT); // hash password dengan algoritma default
    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$hash_password')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

// Fungsi untuk mendapatkan informasi pengguna berdasarkan nama pengguna
function get_user_by_username($username)
{
    global $conn;
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

// Fungsi untuk melakukan autentikasi pengguna
function authenticate_user($username, $password)
{
    $user = get_user_by_username($username);
    if (!$user) {
        return false; // username tidak ditemukan
    }
    if (password_verify($password, $user['password'])) {
        return true; // password benar
    } else {
        return false; // password salah
    }
}

// Fungsi untuk menghapus pengguna dari tabel user
function delete_user($id)
{
    global $conn;
    $sql = "DELETE FROM user WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return $result;
}
?>
