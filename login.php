<?php
require 'koneksi.php'; // Pastikan koneksi ke database tersedia

// Mulai sesi
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash password dengan MD5 untuk dibandingkan dengan yang ada di database
    $hashed_password = md5($password);

    // Query untuk memeriksa data
    $query = "SELECT * FROM tbl_users WHERE email = '$email' AND password = '$hashed_password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Data ditemukan
        $user = mysqli_fetch_assoc($result); // Ambil data pengguna jika diperlukan
        $_SESSION['email'] = $email; // Simpan sesi
        $_SESSION['fullname'] = $user['fullname']; // Contoh menyimpan nama pengguna ke sesi
        header('Location: dashboard.php'); // Alihkan ke dashboard
        exit();
    } else {
        // Data tidak cocok
        echo "<script>alert('Email atau Password salah!'); window.location.href='index.html';</script>";
    }
}
?>
