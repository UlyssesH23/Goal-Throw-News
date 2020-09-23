<script src="assets/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
    <link href="..Stylesheets/assets/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="..Stylesheets/assets/bootstrap/bootstrap.bundle.min.js" type="text/javascript"></script>

    <!-- Menukit CSS JS - add this to your project or merge with other your code -->
    <link href="..Stylesheets/assets/menukit.css" rel="stylesheet" type="text/css"/>
    <script src="..Stylesheets/assets/menukit.js"></script>

    <nav class="navbar navbar-hover navbar-expand-lg navbar-dark" style="background-color:#20A4F3 !important;">


         <a class="navbar-brand" href="../Main Pages/index.php"><img src="https://i.ibb.co/kx5rnPv/Goal-Throw-News-Copy.png" height="80" width="80" class="img-fluid pull-xs-left" alt="..."></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav7">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav7">
          <ul class="navbar-nav">
            <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
            <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
            <li class="nav-item dropdown">
              <span class="navNewsBtn"><a class="nav-link dropdown-toggle nav-item" href="highschool.php" data-toggle="dropdown">News</a></span>
              <!--Club News Section -->
              <ul class="dropdown-menu animate fade-up">
                <li><a class="dropdown-item icon-arrow" href="../Main Pages/clubnews.php">Club</a>
                <ul class="submenu dropdown-menu animate fade-up">
                  <li><a class="dropdown-item" href="../Main Pages/clubnews.php#">Top Stories</a></li>
                  <li><a class="dropdown-item" href="../Main Pages/clubnews.php#">Latest News</a></li>
                  <li><a class="dropdown-item" href="../Main Pages/clubnews.php#">Submenu item 1</a></li>
                  <li><a class="dropdown-item" href="../Main Pages/clubnews.php#">Submenu item 2</a></li>
                  </ul>
                </li>
                <!---->
                <!--High school News Section -->
              <li><a class="dropdown-item icon-arrow" href="../Main Pages/highschoolnews.php">High School</a>
              <ul class="submenu dropdown-menu animate fade-up">
                <li><a class="dropdown-item" href="../Main Pages/highschoolnews.php#topStories">Top Stories</a></li>
                <li><a class="dropdown-item" href="../Main Pages/highschoolnews.php#latestNews">Latest News</a></li>
                <li><a class="dropdown-item" href="../Main Pages/highschoolnews.php">Submenu item 1</a></li>
                <li><a class="dropdown-item" href="../Main Pages/highschoolnews.php">Submenu item 2</a></li>
                </ul>
              </li>
            <!---->
            <!--Club News Section -->


              <li><a class="dropdown-item icon-arrow" href="../Main Pages/college.php">College</a>
              <ul class="submenu dropdown-menu animate fade-up">
                <li><a class="dropdown-item" href="../Main Pages/college.php#">Top Stories</a></li>
                <li><a class="dropdown-item" href="../Main Pages/college.php#">Latest News</a></li>
                <li><a class="dropdown-item" href="../Main Pages/college.php#">Submenu item 1</a></li>
                <li><a class="dropdown-item" href="../Main Pages/college.php#">Submenu item 2</a></li>
                </ul>
              </li>

              <!---->
              </li>
            </ul>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  More items  </a>
                <ul class="dropdown-menu animate fade-up">
                  <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                  <li><a class="dropdown-item" href="#"> Dropdown item 2 </a>
                    <ul class="submenu dropdown-menu animate fade-up">
                      <li><a class="dropdown-item" href="">Submenu item 1</a></li>
                      <li><a class="dropdown-item" href="">Submenu item 2</a></li>
                      <li><a class="dropdown-item" href="">Submenu item 3</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item icon-arrow" href="#"> Dropdown item 3 </a>
                    <ul class="submenu dropdown-menu animate fade-up">
                      <li><a class="dropdown-item" href="">Another submenu 1</a></li>
                      <li><a class="dropdown-item" href="">Another submenu 2</a></li>
                      <li><a class="dropdown-item" href="">Another submenu 3</a></li>
                      <li><a class="dropdown-item" href="">Another submenu 4</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item icon-arrow" href="#"> Dropdown item 4 </a>
                    <ul class="submenu dropdown-menu animate fade-up">
                      <li><a class="dropdown-item" href="">Another submenu 1</a></li>
                      <li><a class="dropdown-item" href="">Another submenu 2</a></li>
                      <li><a class="dropdown-item" href="">Another submenu 3</a></li>
                      <li><a class="dropdown-item" href="">Another submenu 4</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li>
                  <li><a class="dropdown-item" href="#"> Dropdown item 5 </a></li>
                </ul>
              </li>
            </ul>
            <form class="form-inline ml-auto">
                 <div class="md-form my-1 px-2">
                   <input class="form-control" type="text" placeholder="Search for news" aria-label="Search">
                 </div>
                 <button href="#!" class="btn btn-outline-white btn-md my-0 ml-sm-2" style="color:white; border-color:white" type="submit">Search</button>
               </form>
          </div> <!-- navbar-collapse.// -->
  </nav>
