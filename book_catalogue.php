<?php
include 'connect.php';

// Create query to get data from tb_book table

$result = mysqli_query($conn, $query);

$books = [];
while ($row = mysqli_fetch_assoc($result)) {
    $books[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Catalogue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h1>Book Catalogue</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                  <th>No</th>
                  <th>title</th>
                  <th>writer</th>
                  <th>publishing_year</th>
                  <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($books) == 0) : ?>
                    <tr>
                        <th colspan="7" class="text-center">NO DATA INSIDE DATABASE</th>
                    </tr>
                <?php endif;?>
                <?php foreach ($books as $book) : ?>
                    <tr>
                        <!-- sesuaikan setiap kolom untuk id, title, penulis dan tahun terbit -->
                        <!-- change each column for id, title, author and year of publication of each book -->
                        <td><?= "id"?></td>
                        <td><?= "title"?></td>
                        <td><?= "writer"?></td>
                        <td><?= "publishing_year"?></td>
                        <td>
                            <a href="edit_book.php?id=<?=$book['id']?>" class="btn btn-primary">Edit</a>
                            <a href="delete.php?id=<?=$book['id']?>" class="btn btn-danger" >Delete</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>

</body>
</html>

