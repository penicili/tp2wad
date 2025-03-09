<?php
include 'connect.php';

if (isset($_POST['create'])) {
    //  Tangkap data judul, penulis, dan tahun_terbit dari form

    // Query kan data judul, penulis, dan tahun_terbit ke dalam tabel tb_buku

    // Jalankan query yang telah dibuat dengan $conn

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>