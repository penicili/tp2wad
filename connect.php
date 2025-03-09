<?php
// Define the variables needed to connect to the database 
// host
// username
// password
// database
// port

// connect to the database using the variables defined above as parameters

// check conn
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>