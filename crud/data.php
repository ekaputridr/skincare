<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<br>
<div class="page-header">
    <a href="act.php"><center><h10>FREE SHIPPING OVER RP.100,000 FOR MEMBERSHIP</h10></center></a>
    <ul>
    <a href="../login/login.php"><img src="user.png" style="height:20px"></a>
    <a href="#"><img src="heart.png" style="height:20px"></a>
    <a href="#"><img src="shop.png" style="height:20px"></a>
    </ul>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../home/index.php">macflari</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item nav-danger">
        <a class="nav-link" href="../home/index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
    </ul>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-info" type="submit"><img src="search.png" style="height:20px"></button>
    </form>
    <span class="navbar-text"></span>
  </div>  
</nav>
   
<br><br>
<div class="container">
    <h2>Data Table</h2>
    <p>Macflari Skin</p>            
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>

<?php
include "../connect.php";
$query = "select * from reg";
$sql = mysqli_query($connect,$query);

while($adm_data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$adm_data['fname']."</td>";
    echo "<td>".$adm_data['lname']."</td>";
    echo "<td>".$adm_data['birthday']."</td>";
    echo "<td>".$adm_data['email']."</td>";
    echo "<td>".$adm_data['password']."</td>";
    echo "<td><a href='edit.php?email'".$adm_data['email']."'>Edit |</a>";
    echo "<a href='delete.php?email=".$adm_data['email']."'> Delete</a></td>";
}
?>
</table>
</div>
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
</footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>