<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "database");

if (mysqli_connect_errno()) {
  echo "Connection failed: " . mysqli_connect_error();
}

$id = $_SESSION['prevID'];


if(isset($_POST['but_upload'])){

  $name = $_FILES['file']['name'];
  $target_dir = "../images/";
  $target_file = $target_dir . basename($name);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png");

  // Check extension
  if(in_array($imageFileType,$extensions_arr) ){

    // Convert to base64
    $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $query = "UPDATE posts SET mimage='$image' WHERE id='$id'";
    mysqli_query($conn,$query);

    // Upload file
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
    setcookie("Status", "Post Successfully Posted", time() + 15);
  }
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
			<div class="sub_text">
				<h4>Image</h4>
			</div>
				<form method='post' action='' enctype='multipart/form-data'>
					<input type='file' name='file'>
					<input type='submit' class="button" value='Upload New Image' name='but_upload'>
				</form>
			</div>
			<br /><br /><br />
      <?php
      if (isset($_COOKIE["Status"])) {
        echo $_COOKIE["Status"];
      }

      ?>
		</article>


	</body>

</html>
