<?php
// Include file koneksi
include "koneksi.php";

// Mengambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$email = $_POST['email'];
$email = $_POST['email'];

// Query untuk menyimpan data ke database
$query = "INSERT INTO stok (nama, harga, satuan,jumlah) VALUES ('$nama', '$email')";

// Eksekusi query
if ($koneksi->query($query) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Menutup koneksi
$koneksi->close();
?>
