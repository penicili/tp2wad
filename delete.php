<?php
include 'connect.php';

if (isset($_GET['id'])) {
    // Tangkap id dengan metode GET

    // Buat query untuk menghapus data buku berdasarkan id

    // Jalankan query yang telah dibuat dengan $conn

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
?>