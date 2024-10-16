<?php
// Pengaturan koneksi ke database
$host = 'localhost';      // Nama host MySQL, defaultnya 'localhost'
$dbname = 'tabungan_db';  // Nama database yang akan digunakan
$username = 'root';       // Username MySQL, biasanya 'root' untuk lokal
$password = '';           // Password untuk MySQL, kosong jika default untuk localhost

// Mencoba koneksi ke database menggunakan MySQLi
$conn = mysqli_connect($host, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());  // Jika gagal, tampilkan pesan error
}

// Atur encoding karakter agar mendukung karakter UTF-8
mysqli_set_charset($conn, "utf8");

?>
