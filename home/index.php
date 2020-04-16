<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macfalri Skin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<br>
<div class="page-header">
  <a href="act.php"><center><h10>FREE SHIPPING OVER RP.100,000 FOR MEMBERSHIP</h10></center></a>
  <ul>
    <a href="../login/login.php"><img src="user.png" style="height:20px"></a>
    <a href="../transaksi/index.php"><img src="heart.png" style="height:20px"></a>
    <a href="#"><img src="shop.png" style="height:20px"></a>
  </ul>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">macflari</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item nav-danger">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../product/home.php">b e s t  s e l l e r </a>
          <a class="dropdown-item" href="../product/cleanser.php">c l e a n s e r</a>
          <a class="dropdown-item" href="../product/mask.php">m a s k</a>
          <a class="dropdown-item" href="../product/toner.php">t o n e r</a>
          <a class="dropdown-item" href="../product/serum.php">s e r u m</a>
          <a class="dropdown-item" href="../product/moist.php">m o i s t</a>
        </div>
        </li>
        <li class="nav-item nav-danger">
          <a class="nav-link" href="#">Journal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contact/us.php">Contact Us</a>
        </li>
        <li class="nav-item nav-danger">
          <a class="nav-link" href="../crud/data.php">Data</a>
        </li>
    </ul>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-info" type="submit"><img src="search.png" style="height:20px"></button>
    </form>
    <span class="navbar-text"></span>
  </div>  
</nav>

<header class="py-5 bg-image-full" style="background-image: url('bg1.jpeg');">
<br><br><br><br><br>
<article>
  <center>
    <b><h1 class="text-monospace">find your true self..</h1></b>
    <hr width="50%" color="white">
    <caption><i>Macflari will help you find the real you!</i></caption>
    <br><br><br><br><br>
    <a href="../journal/journal.php"><button type="button" class="btn btn-outline-dark">Learn More</button></a>
  </center>
</article>
<br><br><br><br><br>
</header><br>

<div class="jumbotron">
  <h1 class="display-4">Journal,</h1>
  <p class="lead">there are several things in it. it is written for you!</p>
  <hr class="my-4">
  <p>The contents of the journal itself will be found and the history of the manufacture of the product. We Also Have the another content of skincare product.</p>
  <p class="lead">
    <a class="btn btn-dark" href="../journal/journal.php" role="button">Learn more</a>
  </p>
</div>

<header class="py-5 bg-image-full" style="background-image: url('m.jpg');">
  <br><br><br><br>
  <center>
    <h3>Macflari Product</h3>
    <br>
    <a href="../product/home.php"><button type="button" class="btn btn-outline-info">Learn More</button></a>
  </center>
  <br><br><br><br>
</header>  
<br><br><br>
    
<section class="page-section" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Contact Us</h2>
        <h3 class="section-subheading text-muted">Need To Talk Us?</h3>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br><br>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button id="sendMessageButton" class="btn btn-info" type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<br><br>

<footer class="page-footer font-small blue-grey lighten-5">
<div style="background-color: #EE9A9A;">
  <div class="container">
    <div class="row py-4 d-flex align-items-center">
      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0">Get Connect with Macflari</h6>
      </div>
      <div class="col-md-6 col-lg-7 text-center text-md-right">
        <a href="#"><img src="facebook.png" style="height:20px"></a>
        <a href="#"><img src="twitter.png" style="height:20px"></a>
        <a href="#"><img src="instagram.png" style="height:20px"></a>
        <a href="#"><img src="youtube.png" style="height:20px"></a>
        <a href="#"><img src="gmail.png" style="height:20px"></a>
      </div>
    </div>
   </div>
</div>
<br><br>

<div class="container-fluid text-center text-md-left">
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3"></div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Company</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">ABOUT US</a>
          </li>
          <li>
            <a href="#!">OUR EVENT</a>
          </li>
          <li>
            <a href="#!">SITE MAP</a>
          </li>
        </ul>
      </div>
      
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Help</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!">TERMS & CONDITION</a>
          </li>
          <li>
            <a href="#!">FAQ'S</a>
          </li>
          <li>
            <a href="#!">CONFIRM PAYMENT</a>
          </li>
        </ul>
      </div>
    </div>
</div>

<div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="">Macfalri</a>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
