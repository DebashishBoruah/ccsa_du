<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <link rel="stylesheet" href="./css/style.css">
    <title>CCSA:Log in</title>
    <style>
      .h-custom {
    width: 80%;
    margin: 100px auto;
    background-color: #fff;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
    </style>
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark mynav">
    <a class="navbar-brand" href="./index.html">CENTRE FOR COMPUTER SCIENCE AND APPLICATIONS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./about.html">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./php/notice.php">Notice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./facilities.html">Facilities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./faculties.html">Faculties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./gallery.html">Gallery</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Alumni
              </a>
              <ul class="dropdown-menu dropdown-menu-scroll">
                  <li><a class="dropdown-item" href="./php/Alumni_reg.php">Alumni Registration</a></li>
                  <li><a class="dropdown-item" href="#">Alumni Profiles</a></li>
              </ul>
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    AICTE
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">EOA Report</a></li>
                    <li><a class="dropdown-item" href="#">EOA Report</a></li>
                    <li><a class="dropdown-item" href="#">EOA Report</a></li>
                    <li><a class="dropdown-item" href="#">EOA Report</a></li>
                    <li><a class="dropdown-item" href="#">EOA Report</a></li>
                </ul>
            </li>
        </ul>
        <button type="button" class="btn btn-primary"><a href="./login.html">Log in</a></button>
    </div>
  </nav>
    <section class="py-2">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-6 col-lg-4 col-xl-5 sideimg">
              <img src="./photos/business-presentation.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-6 col-lg-7 col-xl-4 offset-xl-1 mycon">
            <?php include('./php/login.php'); ?>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="divider my-4 text-center">
                  <h2 class="mx-3 mb-0">Log in</h2>
                </div>
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" name="username" required/>
                  
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" name="password" required/>
                 
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <input class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;" type="submit" value="Login">
                </div>
      
              </form>
              <?php
  if (isset($loginError) && $loginError) {
    echo '<div class="alert alert-danger mt-3" role="alert">
            Authentication failed. Please check your username and password.
          </div>';
  }
  ?>

            </div>
          </div>
        </div>
      </section>
      <footer
      class="text-center text-lg-start text-white"
      style="background-color: #1c2331"
      >
<!-- Section: Social media -->
<section
         class="d-flex justify-content-between p-4"
         style="background-color: #1755bf"
         >
  <!-- Left -->
  <div class="me-5">
    <span>Get connected with us on social networks:</span>
  </div>
  <!-- Left -->

  <!-- Right -->
  <div>
    <a href="" class="text-white mx-3">
      <i class="fab fa-facebook-f fa-lg"></i>
    </a>
    <a href="" class="text-white mx-3">
      <i class="fab fa-twitter fa-lg"></i>
    </a>
    <a href="" class="text-white mx-3">
      <i class="fab fa-instagram fa-lg"></i>
    </a>
  </div>
  <!-- Right -->
</section>
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="links-p">
  <div class="container-fluid text-center text-md-start mt-5">
    <!-- Grid row -->
    <div class="row mt-3">
      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <!-- Content -->
        <h6 class="text-uppercase fw-bold">Centre for Computer Science and Application</h6>
        <hr
            class="mb-4 mt-0 d-inline-block mx-auto"
            style="width: 60px; background-color:#1755bf ;height: 2px"
            />
<p>Designed and Devloped by: Debashish Boruah and Aditya Kr Gogoi</p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold">Quick Links</h6>
        <hr
            class="mb-4 mt-0 d-inline-block mx-auto"
            style="width: 60px; background-color: #1755bf; height: 2px"
            />
        <p>
          <a href="#!">MDBootstrap</a>
        </p>
        <p>
          <a href="#!">MDWordPress</a>
        </p>
        <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2  mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold">Download</h6>
        <hr
            class="mb-4 mt-0 d-inline-block "
            style="width: 60px; background-color:#1755bf; height: 2px"
            />
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mb-md-0 mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold">Contact</h6>
        <hr
            class="mb-4 mt-0 d-inline-block mx-auto"
            style="width: 60px; background-color:#1755bf; height: 2px"
            />
        <p><i class="fas fa-home mr-3"></i>Centre for Computer Science and Apllications</p>
       <p><i class="fas fa-address-card mr-3"></i> Dibrugarh, Assam, Pin-786004</p>
        <p><i class="fas fa-envelope mr-3"></i>ccsduoffice@gmail.com</p>
        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div
     class="text-center p-3"
     style="background-color: rgba(0, 0, 0, 0.2);color:rgb(185, 173, 173);"
     >
  © 2020 Copyright: Centre for Computer Science and Applications
</div>
<!-- Copyright -->
</footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // JavaScript to handle dynamic brand name replacement
  window.addEventListener('resize', function () {
    var navbarBrand = document.querySelector('.navbar-brand');
    var longBrandName = "CENTRE FOR COMPUTER SCIENCE AND APPLICATIONS";
    var shortBrandName = "CCSA";

    // Replace with short name if the width is below a certain threshold
    if (window.innerWidth < 768) {
      navbarBrand.textContent = shortBrandName;
    } else {
      navbarBrand.textContent = longBrandName;
    }
  });
</script>
</body>
</html>
