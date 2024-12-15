<?php
$servername = "localhost"; // Ganti dengan nama host MySQL kamu
$username = "evansalfahmi"; // Ganti dengan username MySQL
$password = "evansalfahmi"; // Ganti dengan password MySQL
$dbname = "download_tools"; // Nama database yang kamu buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
