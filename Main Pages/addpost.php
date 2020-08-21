<?php

session_start();

$conn = new mysqli("localhost", "root", "", "database");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}







?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta charset="utf-8">
		<title>Upload form</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!---->
    <!-- CSS AND FONTS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../Stylesheets/style.css">
    <!---->

	</head>
	<body>
		<header>
			<?php include 'template.php';?>
		</header>
		<article>
			<div align="center">
				<h3>Post form</h3>
			</div>
		<br /> <br />

			<form align="center" action="phpfunctions/createpost.php" method="post">
				<br>
        <!--title-->
				<div align="center">
					<h5>Article Title</h5>
				</div>
				<div>
					<textarea placeholder="Give an article title" rows="1" cols="100" name="title" id="title"></textarea>
				</div>
				<br>
        <!--subtitle-->
        <div align="center">
					<h5>Subtitle</h5>
				</div>
				<div>
					<textarea placeholder="Write a subtitle(optional)" rows="1" cols="100" name="subtitle" id="subtitle"></textarea>
				</div>
				<br>
        <!--article-->
        <div align="center">
					<h5>Article</h5>
				</div>
				<div>
					<textarea placeholder="Write your post" rows="20" cols="100" name="article" id="article"></textarea>
				</div>
				<br>
				<input type="submit" class="button" value="Next page" id="submit_button"/>
			</form>
		</article>


	</body>

</html>
