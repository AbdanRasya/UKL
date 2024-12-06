<?php
$host = "localhost";
$username_db = "abdan";
$password_db = "123";
$database = "login";

// Buat koneksi
$koneksi = new mysqli($host, $username_db, $password_db, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>