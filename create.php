<?php
include 'connect.php';

// ==================1==================
// Definisikan variabel-variabel untuk menyimpan data yang dikirim dari POST
// Save the data sent from the POST request to variables
if (isset($_POST['create'])) {
 
    
    
    // ==================2==================
    // Definisikan $query untuk melakukan koneksi ke database


    // ==================3==================
    // Eksekusi query

    if (mysqli_affected_rows($conn) > 0) {
        header("location: catalog_book.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>