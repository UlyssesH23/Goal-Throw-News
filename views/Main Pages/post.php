<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "database");

if (mysqli_connect_errno()) {
  echo "Connection failed: " . mysqli_connect_error();
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Goal Throw News</title>
<?php include "headerlinks.php"; ?>
</head>



<?php include "template.php"; ?>
        <div class="container pt-3 pb-5">
        <!--HEADING-->
        <h1 class="display-1 m-0 d-none d-lg-block text-center">Goal Throw News</h1>
        <h2 class="display-2 m-0 d-none d-md-block d-lg-none text-center">Goal Throw News</h2>
        <h4 class="display-4 m-0 d-block d-sm-block d-md-none text-center">Goal Throw News</h4>
      <!--  <h5 class="display-5 m-0  d-block d-sm-none">Goal Throw News</h5>-->
      <!--  <p class="lead d-none d-md-block"> The premier Water Polo news website</p>
        <p class="d-block mb-0 d-md-none">The premier Water Polo news website</p> -->


      </div>

  <?php include "footer.php"; ?>





</html>
