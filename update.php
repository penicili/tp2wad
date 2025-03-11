<?php
include 'connect.php';
// ==================1==================
// Buat If statement untuk mengambil _POST untuk update
// Simpan variabel untuk masing-masing parameter pada data yang dikirim melalui form
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];    

// ==================2==================
// Buatlah query untuk meng-update 
    $query = "UPDATE tb_buku SET
        judul = '$judul',
        penulis = '$penulis',
        tahun_terbit = '$tahun_terbit'
        WHERE id = '$id'
    ";
// ==================3==================
// Eksekusi query
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>