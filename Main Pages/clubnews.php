    <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Goal Throw Club</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!---->

    <!-- CSS AND FONTS -->
  <?php include "../Basic-page-inserts/headerlinks.php"; ?>

    <!--Let me know if this works-->
</head>

<body>
<!-- Navbar Insert -->
<?php include "../Basic-page-inserts/navbar.php"; ?>
<!-- -->
        <<div class="container py-5">
        <!--HEADING-->
        <h2 class="display-2 m-0 d-none d-lg-block">Goal Throw Club News</h2>
        <h3 class="display-3 m-0 d-none d-md-block d-lg-none">Goal Throw Club News</h3>
        <h5 class="display-5 m-0 d-block d-md-none">Goal Throw Club News</h5>
        <p class="lead d-none d-md-block subtext"> The premier Water Polo news website</p>
        <p class="d-block d-md-none subtext">The premier Water Polo news website</p>
        <!---->
    </div>

    <!-- Carousel -->
    <div class="container" id="topStories">


        <!--Carousel Wrapper-->
        <div id="carousel-example-2"  class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="https://i.ibb.co/5xzh5W1/Goal-Throw-News-Copy-3.jpg" alt="First slide">

                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Light mask</h3>
                        <p>First text</p>
                    </div>
                </div>
                <div class="carousel-item">

                    <div class="view">
                        <img class="d-block w-100" src="https://i.ibb.co/k82Zcdt/Goal-Throw-News-Copy-1.jpg" alt="Second slide">

                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Strong mask</h3>
                        <p>Secondary text</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="https://i.ibb.co/PNx9cNB/Goal-Throw-News-Copy.jpg " alt="Third slide ">

                    </div>
                    <div class="carousel-caption ">
                        <h3 class="h3-responsive ">Slight mask</h3>
                        <p>Third text</p>
                    </div>
                </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev " href="#carousel-example-2 " role="button " data-slide="prev ">
                <span class="carousel-control-prev-icon " aria-hidden="true "></span>
                <span class="sr-only ">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carousel-example-2 " role="button " data-slide="next ">
                <span class="carousel-control-next-icon " aria-hidden="true "></span>
                <span class="sr-only ">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>

  <div class="">
      <?php include "latestnewsheader.php"; ?>
  </div>

  <?php include "../Basic-page-inserts/footer.php"; ?>
</body>

</html>
