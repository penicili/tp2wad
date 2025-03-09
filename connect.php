<?php
// Definisikan variabel yang akan digunakan untuk koneksi ke database 
// host
// username
// password
// database
// port

// conn
$conn = mysqli_connect($host, $username, $password, $database, $port);

// check conn
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>