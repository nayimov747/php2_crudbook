<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit book</title>
</head>

<body>
  <div class="container">
    <header class="d-flex justify-content-between my-4">
      <h1>Edit Book</h1>
      <div>
        <a href="index.php" class="btn btn-primary">Back</a>
      </div>
    </header>
    <?php
    if (isset($_GET["id"])) {
      $id = $_GET["id"];
      include("connect.php");
      $sql = "SELECT * FROM books WHERE id = $id";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);

    ?>

    <?php
    }
    ?>
    <form action="process.php" method="post">
      <div class="form-element my-4">
        <input class="form-control" type="text" name="title" id="title" placeholder="Book Title" value="<?php echo $row['title']; ?>">
      </div>
      <div class="form-element my-4">
        <input class="form-control" type="text" name="author" id="author" placeholder="Author name" value="<?php echo $row['author']; ?>">
      </div>
      <div class="form-element my-4">
        <select name="type" id="type" class="form-select">
          <option disabled selected>Select book type</option>
          <option value="Adventure" <?php if ($row['type'] == 'Adventure') {
                                      echo "selected";
                                    } ?>>Adventure</option>
          <option value="Fantasy" <?php if ($row['type'] == 'Fantasy') {
                                    echo "selected";
                                  } ?>>Fantasy</option>
          <option value="Thriller" <?php if ($row['type'] == 'Thriller') {
                                      echo "selected";
                                    } ?>>Thriller</option>
          <option value="Horror" <?php if ($row['type'] == 'Horror') {
                                    echo "selected";
                                  } ?>>Horror</option>
        </select>
      </div>
      <div class="form-element my-4">
        <input class="form-control" type="text" name="description" id="description" placeholder="Description" value="<?php echo $row['description']; ?>">
      </div>
      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
      <div class="form-element my-4">
        <input class="btn btn-warning" type="submit" name="edit" value="Edit Book">
      </div>
    </form>
  </div>
</body>

</html>