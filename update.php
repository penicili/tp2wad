<?php
include 'connect.php';
// ==================1==================
// Buat If statement untuk mengambil _POST untuk update
// Simpan variabel untuk menyimpan data yang dikirim melalui form
if (isset($_POST['update'])) {


    // ==================2==================
    // Buatlah query untuk meng-update 

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