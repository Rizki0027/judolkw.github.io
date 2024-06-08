<?php
$servername = "localhost"; // Ganti dengan nama server Anda jika perlu
$username = "root"; // Ganti dengan nama pengguna database Anda jika perlu
$password = ""; // Ganti dengan kata sandi database Anda jika perlu
$dbname = "db_gameonline"; // Ganti dengan nama database Anda jika perlu

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
