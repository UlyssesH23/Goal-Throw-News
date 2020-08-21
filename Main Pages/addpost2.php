<?php

session_start();

$conn = new mysqli("localhost", "root", "", "database");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['but_upload'])){

  $name = $_FILES['file']['name'];
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

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
    $query = "CREATE profiles SET image='$image' where id='$id'";
    mysqli_query($link,$query);

    // Upload file
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
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
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Specific Metas
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- FONT
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

		<!-- CSS
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/skeleton.css">
		<link rel="stylesheet" href="css/styles.css">

	</head>
	<body>
		<header>
			<?php include 'template.php';?>
		</header>
		<article>
			<div align="center">
				post form
			</div>
		<br /> <br />

			<div class="sub_text">
				Image
			</div>
				<form method='post' action='' enctype='multipart/form-data'>
					<input type='file' name='file'>
					<input type='submit' class="button" value='Upload New Image' name='but_upload'>
				</form>
			</div>
			<br /><br /><br />

			<form align="center" action="editingprof.php" method="post">
				<br>
				<div class="sub_text">
					About Me
				</div>
				<div class="bio_box">
					<textarea placeholder="Say something about yourself" rows="60" columns="50" name="bio" id="bio"><?php echo $desc; ?></textarea>
				</div>
				<br>
				<input type="submit" class="button" value="Edit" id="submit_button"/>
			</form>
		</article>


	</body>

</html>
