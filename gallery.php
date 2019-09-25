<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arclight</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <!-- =======================================================
    Theme Name: Bethany
    Theme URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--header-->
  <header class="sub-header" id="header">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a href="index.html" class="navbar-brand">Arclight</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h3 class="head">gallery</h3>
        <!--   <button type="submit" class="btn btn-submit">Download Now</button>
        --> </div>
      </div>
    </div>
  </header><br><br>
  <!--/ header-->
  <!-- gallery start -->
  <section class="gallery-block grid-gallery">
    <div class="container ">
      <div class="row">
        <div class="col-md-4 item">
          <a class="lightbox" href="img/g1.jpg">
            <img class="img-fluid image scale-on-hover" src="img/g1.jpg">
          </a>
        </div>
        <div class="col-md-4 item">
          <a class="lightbox" href="img/g2.jpg">
            <img class="img-fluid image scale-on-hover" src="img/g2.jpg">
          </a>
        </div>
        <div class="col-md-4 item">
          <a class="lightbox" href="img/g3.jpg">
            <img class="img-fluid image scale-on-hover" src="img/g3.jpg">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 item">
          <a class="lightbox" href="img/g4.jpg">
            <img class="img-fluid image scale-on-hover" src="img/g4.jpg">
          </a>
        </div>
        <div class="col-md-4 item">
          <a class="lightbox" href="img/g5.jpg">
            <img class="img-fluid image scale-on-hover" src="img/g5.jpg">
          </a>
        </div>
        <div class="col-md-4 item">
          <a class="lightbox" href="img/g6.jpg">
            <img class="img-fluid image scale-on-hover" src="img/g6.jpg">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 item">
          <a class="lightbox" href="img/g7.jpg">
            <img class="img-fluid image scale-on-hover" src="img/g7.jpg">
          </a>
        </div>
        <div class="col-md-4 item">
          <a class="lightbox" href="img/g8.jpg">
            <img class="img-fluid image scale-on-hover" src="img/g8.jpg">
          </a>
        </div>
        <div class="col-md-4 item">
          <a class="lightbox" href="img/g9.jpg">
            <img class="img-fluid image scale-on-hover" src="img/g9.jpg">
          </a>
        </div>
      </div>
    </div>
  </section>
  <br><br>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
  </script>
  <!-- gallery section end -->
  <!-- footer start -->
  <?Php include("includes/footer.php"); ?>
  <!--footer ends-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
