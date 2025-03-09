<?php
include 'connect.php';

if (isset($_POST['update'])) {
    // Tangkap data id, judul, penulis, dan tahun_terbit dari form
    // Capture id, title, author, and publication_year data from the form

    // Buat query untuk mengupdate data buku berdasarkan id
    // Create a query to update book data based on id

    // Jalankan query yang telah dibuat dengan $conn
    // Run the query that has been created with $conn

    if (mysqli_affected_rows($conn) > 0) {
        header("location: book_catalogue.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>