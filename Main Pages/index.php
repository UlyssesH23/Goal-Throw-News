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


        <div class="container py-5">
        <!--HEADING-->
        <h1 class="display-1 m-0 d-none d-lg-block">Goal Throw News</h1>
        <h2 class="display-2 m-0 d-none d-md-block d-lg-none">Goal Throw News</h2>
        <h4 class="display-4 m-0 d-none d-sm-block d-md-none">Goal Throw News</h4>
        <h5 class="display-5 m-0  d-block d-sm-none">Goal Throw News</h5>
        <p class="lead d-none d-md-block"> The premier Water Polo news website</p>
        <p class="d-block mb-0 d-md-none">The premier Water Polo news website</p>
        <hr class="pr-3 mt-0">
        <!---->
      </div>


    <!-- The picture that will replace the carousel when the screen is too small-->
    <div class="container d-block d-lg-none ">
      <img class="img-fluid center-block w-100" src="https://i.ibb.co/nMmfPVK/Goal-Throw-News-Copy.jpg" alt="">
    </div>
    <!-- Carousel -->
    <div class="container d-none d-lg-block pb-3">


        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <!-- First Carousel Slide--->
                <div class="carousel-item active">
                    <div class="view">
                        <a href="\Goal-Throw-News\Story Pages\welcomeStory.php"> <img class="d-block img-fluid w-100" src="https://i.ibb.co/nMmfPVK/Goal-Throw-News-Copy.jpg" alt="First slide">
                        </a>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3 d-none d-md-block ">Welcome!</h3>
                        <h4 class="h4 d-block d-md-none ">Welcome!</h4>
                        <p>Welcome message to readers.</p>
                    </div>
                </div>
                <!-- Second Carousel Slide-->
                <div class="carousel-item">

                    <div class="view">
                        <img class="d-block w-100" src="https://i.ibb.co/5xzh5W1/Goal-Throw-News-Copy-3.jpg
                       " alt="Second slide">

                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3 d-none d-md-block ">Welcome!</h3>
                        <h4 class="h4 d-block d-md-none ">Welcome!</h4>
                        <p>Welcome message to readers.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="https://i.ibb.co/5xzh5W1/Goal-Throw-News-Copy-3.jpg" alt="Third slide">

                    </div>

                </div>
            </div>

            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>

    <div class="mb-2">
    </div>
    <!--Start next row-->
    <div class="container">
        <!-- Latest News -->
      <?php include "latestnewsheader.php"; ?>
      <br>

      <?php

      $getposts = mysqli_query($conn, "SELECT * FROM posts");
      $getpostsarray  = mysqli_fetch_all($getposts);
      echo '<div class="card-deck">';
      for ($x = (count($getpostsarray)-1); $x >= 0; $x--) {
        echo '<a class="card">';

        if (isset($getpostsarray[$x][4])) {
          echo '<img src='.$getpostsarray[$x][4].' class="card-img-top" alt="...">';
        }
          echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$getpostsarray[$x][1].'</h5>';
            if (isset($getpostsarray[$x][2])) {
              echo '<p class="card-text">'.$getpostsarray[$x][2].'</p>';
            }
            echo '<p class="card-text"><small class="text-muted">Last updated '.$getpostsarray[$x][6].'</small></p>';
          echo '</div>';
        echo '</a>';
      }
      //$getpostsarray[row][column]




      echo '</div>';
      ?>
      <br>

        <!--
        Upcoming Event Sidebar
        <div class="container col-2 bg-light  pt-3">
            <h5>Upcoming Events</h5>
            <List of Events>
            <div class="border-top border-lightgray p-1 mt-3">
            </div>

        </div>

        <div class="col-1">
        </div><--->
    </div>

  <?php include "footer.php"; ?>





</html>
