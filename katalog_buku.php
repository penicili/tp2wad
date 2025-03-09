<?php
include 'connect.php';

// Buat query untuk mengambil data buku dari tabel tb_buku

$result = mysqli_query($conn, $query);

$bukus = [];
while ($row = mysqli_fetch_assoc($result)) {
    $bukus[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h1>Katalog Buku</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Tahun</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($bukus) == 0) : ?>
                    <tr>
                        <th colspan="7" class="text-center">TIDAK ADA DATA DALAM KATALOG</th>
                    </tr>
                <?php endif;?>
                <?php foreach ($bukus as $buku) : ?>
                    <tr>
                        <!-- sesuaikan setiap kolom untuk id, judul, penulis dan tahun terbit -->
                        <td><?= "id"?></td>
                        <td><?= "judul"?></td>
                        <td><?= "penulis"?></td>
                        <td><?= "tahun terbit"?></td>
                        <td>
                            <a href="edit_buku.php?id=<?=$buku['id']?>" class="btn btn-primary">Edit</a>
                            <a href="delete.php?id=<?=$buku['id']?>" class="btn btn-danger" >Delete</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>

</body>
</html>

