<?php
include 'connect.php';

if (isset($_POST['create'])) {
    //  Capture data title, writer, and publishing_year from the form

    // Query to insert title, writer, and publishing_year data into the tb_buku table

    // Run the query that has been created with $conn

    if (mysqli_affected_rows($conn) > 0) {
        header("location: book_catalogue.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>