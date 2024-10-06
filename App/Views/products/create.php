<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
    <a href="/products" class='btn btn-primary'>Back</a>
    <h1>Product create</h1>
    <form action="/create_pr" method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" class='form-control' name="name" id="name">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" class='form-control' name="price" id="price">
        </div>
        <div>
            <label for="count">Count</label>
            <input type="text" class='form-control' name="count" id="count">
        </div>
        <button type="submit" class='btn btn-primary mt-4'>Create</button>
    </form>
    </div>
</body>
</html>