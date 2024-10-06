<?php
    use App\Models\product\Product;
    
    $limit = 10; 
    $selectedPage = 1; 

    if (isset($_GET['page'])) {
        $selectedPage = (int)$_GET['page'];
    }

    $totalStudents = Product::count();
    $totalPages = ceil($totalStudents / $limit);

    $students = Product::paginate($selectedPage, $limit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1>Students</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NAME</th>
          <th scope="col">PRICE</th>
          <th scope="col">COUNT</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <th scope="row"><?= $student['id'] ?></th>
                <td><?= $student['name'] ?></td>
                <td><?= $student['price'] ?></td>
                <td><?= $student['count'] ?></td>
            </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- Pagination -->
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <!-- Previous Button -->
        <li class="page-item <?= $selectedPage == 1 ? 'disabled' : '' ?>">
          <a class="page-link" href="?page=<?= $selectedPage - 1 ?>">Previous</a>
        </li>

        <!-- Page Numbers -->
        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
          <li class="page-item <?= $i == $selectedPage ? 'active' : '' ?>">
            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
          </li>
        <?php endfor; ?>

        <!-- Next Button -->
        <li class="page-item <?= $selectedPage == $totalPages ? 'disabled' : '' ?>">
          <a class="page-link" href="?page=<?= $selectedPage + 1 ?>">Next</a>
        </li>
      </ul>
    </nav>
    </div>
</body>
</html>
