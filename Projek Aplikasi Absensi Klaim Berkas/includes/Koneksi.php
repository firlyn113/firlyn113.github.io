<?php
$host = 'localhost';
$username = 'root';
$password = ''; // Sesuaikan dengan password MySQL Anda
$database = 'absensiklaim'; // Ganti dengan nama database Anda

$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
