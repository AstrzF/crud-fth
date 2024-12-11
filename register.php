<?php
require 'koneksi.php';

// Ambil data dari form
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$institution = $_POST["institution"];
$email = $_POST["email"];
$password = md5($_POST["password"]); // Hash password dengan MD5

// Query untuk menyimpan data ke database
$query_sql = "INSERT INTO tbl_users (fullname, username, institution, email, password) 
            VALUES ('$fullname', '$username', '$institution', '$email', '$password')";

// Eksekusi query
if (mysqli_query($conn, $query_sql)) {
    header("Location: masuk.php"); // Redirect ke halaman masuk
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn); // Tampilkan pesan kesalahan
}
?>
