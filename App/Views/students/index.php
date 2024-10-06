<?php
    use App\Models\student\Student;
    
    $limit = 10; // Number of records per page
    $selectedPage = 1; // Default page is 1

    // Get the selected page number from the URL if available
    if (isset($_GET['page'])) {
        $selectedPage = (int)$_GET['page'];
    }

    // Fetch the total count of students and calculate the total number of pages
    $totalStudents = Student::count();
    $totalPages = ceil($totalStudents / $limit);

    // Fetch students for the current page using paginate
    $students = Student::paginate($selectedPage, $limit);
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
          <th scope="col">SURNAME</th>
          <th scope="col">MAJOR</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <th scope="row"><?= $student['id'] ?></th>
                <td><?= $student['name'] ?></td>
                <td><?= $student['surname'] ?></td>
                <td><?= $student['major'] ?></td>
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
