<?php

session_start();

$title;
$subtitle = null;
$article;

$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$article = $_POST['article'];
echo $title;
echo $subtitle;
echo $article;

$conn = new mysqli("localhost", "root", "", "database");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($title != "" && $article != "") {

  $findinfo = mysqli_query($conn, "INSERT INTO posts (title, subtitle, article) VALUES ('$title', '$subtitle', '$article') SELECT last_insert_id()");
  $findinforow = mysqli_fetch_array($findinfo);
  $_SESSION

  $conn->close();
  header("Location: ../addpost2.php");

} else {
  setcookie("Errorc", "*Please fill out required fields", time() + 9);
  header("Location: addpost.php");
}





?>
