<?php
include 'connect.php';

if (isset($_GET['id'])) {
    // Tangkap id dengan metode GET
    // Capture the id with the GET method

    // Buat query untuk menghapus data buku berdasarkan id
    // Create a query to delete book data based on id

    // Jalankan query yang telah dibuat dengan $conn
    // Run the query that has been created with $conn

    if (mysqli_affected_rows($conn) > 0) {
        header("location: book_catalogue.php");
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
?>