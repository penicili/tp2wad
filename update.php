<?php
include 'connect.php';

if (isset($_POST['update'])) {
    // Tangkap data id, judul, penulis, dan tahun_terbit dari form
 

    // Buat query untuk mengupdate data buku berdasarkan id

    // Jalankan query yang telah dibuat dengan $conn

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>