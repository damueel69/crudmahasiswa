<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pendaftaran_tk_t";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";
?>
