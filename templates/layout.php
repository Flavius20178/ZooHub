<?php
require_once '../classes/table.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <!-- Google fonts-->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"> -->
  <!-- Icon fonts-->
  <link rel="stylesheet" href="../css/pe-icon-7-stroke.css">
  <!-- Lightbox CSS-->
  <link rel="stylesheet" href="../vendor/lightbox2/css/lightbox.min.css">
  <!-- Leaflet CSS-->
  <link rel="stylesheet" href="../vendor/leaflet/leaflet.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="../css/style.green.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="../css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="../img/favicon.png">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <!-- navbar-->
  <header class="header">
    <nav class="navbar navbar-expand-lg bg-#ff6e01 navbar-light py-lg-0 ">
      <div class="container-fluid">
        <a href="home" class="navbar-brand font-weight-bold p-0">
          <div class="d-flex align-items-center">
            <div style="font-size: 40px; margin-right: 50px;">
              <i class="fas fa-paw"></i>
            </div>
            <div>
              ZooHub
            </div>
            <div class="text-white ml-3">
              <!-- <span>The Canyon <b>Zoo</b></span> -->
            </div>
          </div>
        </a>
        <button type="button" id="navar-toggle-button" data-toggle="collapse" data-target="#navbarSupportedContent" class="navbar-toggler navbar-toggler-right small"><span class="text-uppercase text-white mr-2">Menu</span><i class="fas fa-bars"></i></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto d-lg-flex align-items-lg-center">
            <li class="nav-item"><a href="home" class="nav-link font-weight-bold px-lg-3 py-lg-4">Home </a>
            </li>
            <li class="nav-item"><a href="gallery" class="nav-link font-weight-bold px-lg-3 py-lg-4">Gallery </a>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link font-weight-bold px-lg-3 py-lg-4 dropdown-toggle">Animals</a>
              <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu mt-0">
                <?php
                $classTable = new Table('classifications');
                $classifications = $classTable->findInDatabase('class_archived', 'false');

                foreach ($classifications as $key => $class) { ?>
                  <a href="animals?class_id=<?= $class['class_id'] ?>" class="dropdown-item small text-uppercase"><?= $class['class_display_name'] ?></a>
                <?php } ?>
              </div>
            </li>
            <!-- show non sponsor only links -->
            <?php if (!(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'sponsor')) { ?>

              <li class="nav-item"><a href="ticket_page" class="nav-link font-weight-bold px-lg-3 py-lg-4">Book Tickets </a>
              </li>
             
              <li class="nav-item"><a href="vacancies" class="nav-link font-weight-bold px-lg-3 py-lg-4">Vacancies </a>
              </li>
              <li class="nav-item"><a href="events" class="nav-link font-weight-bold px-lg-3 py-lg-4">Events </a>
              </li>
              <li class="nav-item"><a href="contact" class="nav-link font-weight-bold px-lg-3 py-lg-4">Contact Us </a>
              </li>
            <?php } else { //sponsor links 
            ?>
              <li class="nav-item"><a href="post_testimonial" class="nav-link font-weight-bold px-lg-3 py-lg-4">Add Testimonial</a>
              </li>
            <?php } ?>
            <?php if (!isset($_SESSION['authenticated'])) { ?>
              <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link font-weight-bold px-lg-3 py-lg-4 dropdown-toggle">Register</a>
                <div class="dropdown-menu mt-0">
                  <a href="register_visitor" class="dropdown-item small text-uppercase">Visitor Registration</a>
                  <a href="register_sponsor" class="dropdown-item small text-uppercase">Sponsor Registration</a>
                </div>
              </li>
            <?php } ?>
            <?php if (!isset($_SESSION['authenticated'])) { ?>
              <li class="nav-item mt-4 mt-lg-0">
                <a type="button" href="login" class="btn btn-outline-primary nav-btn btn-sm navbar-login-button text-black"> <i class="fas fa-sign-out-alt mr-2"></i>Login </a>
              </li>
              <style>
                .text-black {
                  color: #000; /* or any other black color code you prefer */
                }
              </style>

            <?php } else { ?>
              <li class="nav-item dropdown pr-2">
                <a class="nav-link dropdown-toggle font-weight-bold text-light" href="#a" data-toggle="dropdown">
                  <img src="../img/user-default-2-min.png" style="width: 35px; border-radius:50%" alt="" />
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="logout" class="dropdown-item">Logout</a>
                  <?php if ($_SESSION['user_type'] == "visitor") { ?>
                    <a href="register_visitor?visitor_id=<?= $_SESSION['visitor_id'] ?>" class="dropdown-item">Update Profile</a>
                  <?php } ?>
                  <?php if ($_SESSION['user_type'] == "sponsor") { ?>
                    <a href="register_sponsor?sponsor_id=<?= $_SESSION['sponsor_id'] ?>" class="dropdown-item">Update Profile</a>
                  <?php } ?>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <?php echo $content ?>

  <footer style="background: #258038 no-repeat center center; background-size: cover;" class="pt-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-8 col-md-6 mb-4">
          <h5 class="lined lined-dark color-header mb-3 color-header">About ZooHub</h5>
          <p class="text-small">From the gentle purring of a cat to the playful antics of a hamster or 
                    the affectionate companionship of a loyal dog, small pets bring immeasurable joy to our lives. 
                    These furry and feathered friends become our confidants, offering comfort, loyalty, and endless moments of happiness.</p>
          <p class="text-small">They teach us about responsibility, empathy, and the unconditional love that transcends language. 
                    When you stay with pets, you're not just sharing your home; you're sharing your heart with these charming creatures, 
                    creating lasting bonds that enrich our lives in ways beyond measure.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <h5 class="lined lined-dark mb-3 color-header">Our Location</h5>
          <h6 class="color-header">ZooHub</h6>
          <p class="mb-0 text-small">Timisoara, Romania</p>
          <p class="mb-0 text-small">Mobile +40-0712-345-678</p>
          <p class="mb-4 text-small">Mobile +40-0712-345-678 </p>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <h5 class="lined lined-dark mb-3 color-header">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="home" class="footer-link text-small">Home</a></li>
            <li><a href="contact" class="footer-link text-small">Contact Us</a></li>
            <li><a href="gallery" class="footer-link text-small">Gallery</a></li>
            <li><a href="home" class="footer-link text-small">Animals</a></li>
            <li><a href="ticket_page" class="footer-link text-small">Book Tickets</a></li>
          </ul> 
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <h5 class="lined lined-dark mb-3 color-header">Connect with us</h5>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="https://www.facebook.com/flavius.astratinei" class="social-link facebook-logo"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/flav0.3/" class="social-link googleplus-logo"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/Astra1Flavius" class="social-link twitter-logo"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.linkedin.com/in/flavius-astratinei-7948052a0/" class="social-link mail-logo"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5 class="lined lined-dark mb-3 color-header">Contact Us</h5>
          <p class="mb-4 text-small">You can contact us using the form in Contact Us page.
          </p>
        </div>
      </div>
    </div>
    <style>
            .color-header {
                color: #ff6e01; /* Title color */
            }

            .text-small {
                color: #fff; /* Text color */
            }
        </style>
    <div class="bg-header py-2 text-center text-white">
      <p class="p-0 m-0">&copy; <?php echo date('Y')?> - ZooHub. All rights reserved by Astratinei Flavius </p>
    </div>
  </footer>
  <!-- JavaScript files-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/lightbox2/js/lightbox.min.js"></script>
  <script src="../vendor/leaflet/leaflet.js"></script>
  <script src="../js/front.js"></script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>