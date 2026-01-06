<?php
$conn = mysqli_connect("localhost", "root", "", "aens_perfume");

$host = "localhost";
$user = "root";
$pass = "";
$db   = "aens_perfume";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
