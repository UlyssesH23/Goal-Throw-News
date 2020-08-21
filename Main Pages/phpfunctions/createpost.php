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

  $findinfo = mysqli_query($conn, "INSERT INTO posts (username, email, password) VALUES ('$username', '$email', '$password')");
  $conn->close();
  setcookie("Successc", "Account Created!", time() + 9);
  header("Location: login.php");
} else {
  setcookie("Errorc", "*Please fill out all fields", time() + 9);
  header("Location: login.php");
}





?>
