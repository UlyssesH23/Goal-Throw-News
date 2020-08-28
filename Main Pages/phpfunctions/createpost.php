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

$conn = mysqli_connect("localhost", "root", "", "database");

if (mysqli_connect_errno()) {
  echo "Connection failed: " . mysqli_connect_error();
}

if ($title != "" && $article != "") {

  $findinfo = mysqli_query($conn, "INSERT INTO posts (title, subtitle, article) VALUES ('$title', '$subtitle', '$article')");
  $findinfoid = mysqli_query($conn, "SELECT last_insert_id()");
  $findinfoidrow  = mysqli_fetch_array($findinfoid);
  $_SESSION['prevID'] = $findinfoidrow[0];
  echo $_SESSION['prevID'];
  mysqli_close($conn);
  header("Location: ../addpost2.php");

} else {
  setcookie("Errorc", "*Please fill out required fields", time() + 9);
  header("Location: addpost.php");
}





?>
