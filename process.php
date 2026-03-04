<?php
include("connect.php");

if (isset($_POST["create"])) {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  $type = mysqli_real_escape_string($conn, $_POST['type']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);

  $sql = "INSERT INTO books (title, author, type, description) VALUES ('$title', '$author', '$type', '$description')";

  if (mysqli_query($conn, $sql)) {
    session_start();
    $_SESSION['create'] = "Book added successfully";
    header("location:index.php");
  } else {
    die("Something went wrong");
  }
}

if (isset($_POST["edit"])) {
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  $type = mysqli_real_escape_string($conn, $_POST['type']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);

  $sql = "UPDATE books SET title = '$title', author = '$author', type = '$type', description = '$description' WHERE id = $id";

  if (mysqli_query($conn, $sql)) {
    session_start();
    $_SESSION['edit'] = "Book edited successfully";
    header("location:index.php");
  } else {
    die("Something went wrong");
  }
}
