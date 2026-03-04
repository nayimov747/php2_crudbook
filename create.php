<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Add new book</title>
</head>

<body>
  <div class="container">
    <header class="d-flex justify-content-between my-4">
      <h1>Add New Book</h1>
      <div>
        <a href="index.php" class="btn btn-primary">Back</a>
      </div>
    </header>
    <form action="process.php" method="post">
      <div class="form-element my-4">
        <input class="form-control" type="text" name="title" id="title" placeholder="Book Title">
      </div>
      <div class="form-element my-4">
        <input class="form-control" type="text" name="author" id="author" placeholder="Author name">
      </div>
      <div class="form-element my-4">
        <select name="type" id="type" class="form-select">
          <option disabled selected>Select book type</option>
          <option value="Adventure">Adventure</option>
          <option value="Fantasy">Fantasy</option>
          <option value="Thriller">Thriller</option>
          <option value="Horror">Horror</option>
        </select>
      </div>
      <div class="form-element my-4">
        <input class="form-control" type="text" name="description" id="description" placeholder="Description">
      </div>
      <div class="form-element my-4">
        <input class="btn btn-success" type="submit" name="create" value="Add Book">
      </div>
    </form>
  </div>
</body>

</html>