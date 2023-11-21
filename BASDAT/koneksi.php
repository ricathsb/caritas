<?php
$host = "localhost"; // Ganti sesuai dengan host MySQL Anda
$username = "root"; // Ganti sesuai dengan username MySQL Anda
$password = ""; // Ganti sesuai dengan password MySQL Anda
$database = "T1"; // Ganti sesuai dengan nama database Anda

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
