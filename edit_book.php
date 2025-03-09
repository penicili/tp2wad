<?php
include('connect.php');
// Tangkap id yang dikirimkan melalui GET
// Capture the id sent via GET

// Buat query untuk mengambil data buku dari tabel tb_buku sesuai id yang ditangkap
// Create a query to retrieve book data from the tb_buku table according to the captured id

$data = mysqli_query($conn,$query);

// Buat variabel $book untuk menyimpan data buku yang telah diambil
// Create a $book variable to store the retrieved book data

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include('navbar.php');?>
    <center>
        <div class="container">
            <h1>Change Book Details</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <!-- change the action="update.php" to use the captured id -->
                        <form action="update.php" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="title" id="title" value="<?=$book['title']?>" required>
                                <label for="title">title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="writer" id="writer" value="<?=$book['writer']?>">
                                <label for="writer">writer</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="publishing_year" id="publishing_year" value="<?=$book['publishing_year']?>" required>
                                <label for="publishing_year">Publishing Year</label>
                            </div>
                            <button type="submit" name="update" id="update" class="btn btn-primary mb-3 mt-3 w-100">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </center>

</body>
</html>