<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "phppraktikum";

// Membuat koneksi ke database
$conn = mysqli_connect($hostname, $username, $password, $database_name);

// Cek koneksi, jika gagal tampilkan pesan error
if (!$conn) {
    die("error!" .mysqli_connect_error());
}

echo "Koneksi berhasil";
?>