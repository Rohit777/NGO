<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>
    <?php 
      if(isset($title) && !empty($title)) { 
        echo $title; 
      } 
      else { 
        echo "Kanshiram Welfare Foundation"; 
      } 
    ?>
    </title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="font\ebrima.ttf" rel="stylesheet"> 
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/award.css" rel="stylesheet">

    <?php
    if (isset($page) && !empty($page)) {
      if($page == "sidebar") {
    ?>
      <link href="css/sidebar.css" rel="stylesheet">
    <?php
      }
      else if($page == "try"){
    ?>
      <link href="css/try.css" rel="stylesheet">
    <?php
      }
      else if($page == "privacy"){
    ?>
      <link href="css/privacy.css" rel="stylesheet">
    <?php
    }
      else{}
    }
    else {}
    ?>

    <link href="css/heading.css" rel="stylesheet">
  </head>
  <body>

<header>
    <nav class="navbar navbar-light bg-light top">
        <span class="navbar-text">
            <a href="index.php"><img class="logo" src="image\KANSHIRAM Foundation Logo.png" alt="logo"></a>
        </span>
        <div class="row" >  
          <div class="col-12" align="center">
                    <a href="https://www.facebook.com/pages/Kanshiram-Welfare-Foundation/163677117162571?fref=nf" target="_blank"><i class="fab fa-facebook-square fa-2x inline"  style="color:#3B5998"></i></a> 
                    <a href="https://www.youtube.com/channel/UCFxIJLpNrHBDYiPlCzVgl4A" target="_blank"><i class="fab fa-youtube fa-2x inline" style="color:#FF0000"></i></a>
                    <a href="https://www.linkedin.com/in/kanshiram-welfare-foundation-587a71161" target = "_blank"><i class="fab fa-linkedin fa-2x inline" style="color:#0077b5"></i></a>  
                    <a href="https://twitter.com/KanshiramF" target = "_blank"><i class="fab fa-twitter-square fa-2x inline" style="color: #00aced"></i></a>            
          </div>
              <div class="col-12" align="center">
                  <a href="donation.php" style="color:#8c2a00; font-weight:700; font-size:1.3rem;"><span>Donation</span></a>
              </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom" style="background-color: #8c2b00ed" id="stick">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse justify-content-center navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><i class="fas fa-home fa-1x"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ABOUT US
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="about.php">ABOUT THE FOUNDATION</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="vision.php">VISION AND MISSION</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="team.php">OUR TEAM</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="partner.php">PARTNER</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">ANNUAL REPORT</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                OUR WORK
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="education.php">EDUCATION</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="liveli.php">LIVELIHOOD</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="advoca.php">ADVOCACY</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="pre.php">PERSPECTIVE ON ELA</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="work.php">WORK AREA</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                GET INVOLVED
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="career.php">CAREER</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="career.php">VOLUNTEER</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PUBLICATIONS
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">REPORTS</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">BOOKLETS</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">PAPERS</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">CASE STUDIES</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                MEDIA
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">NEWS</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">EVENTS</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="image.php">PHOTO GALLERY</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">VIDEO GALLERY</a>
                    <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="award.php">AWARDS AND RECOGNITIONS</a>
                </div>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT US</a>
            </li>     
          </ul>
        </div>
      </nav>   
</header>