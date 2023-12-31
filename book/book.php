<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/External/all.min.css">
  <link rel="stylesheet" href="assets/css/External/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
  
  <title>Home Page</title>
</head>
<body>
  <!-- =============================Navber============================= -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
       <a href="#" class="logo" >DENTEL<span class="fas fa-heart"></span></a>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-4">
        
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">doctors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">contact</a>
          </li>
         
        </ul>
        <a href="../Login-master/home2.php" class="btn btn-one sigNIn d-none d-xl-block">Log Out</a>
        <a href="../main.php" class="btn btn-one sigNIn d-none d-xl-block">Home</a>

        <!-- <a href="create-cccount.html" class="btn btn-one sigNIn d-block d-xl-none">Sign Up</a> -->
      </div>
    </div>
  </nav>


  <!-- header bg -->
  <header>
  <div class="header-box">
    <h4>Just one Step and you can Book your Appointment</h4>
    <div>
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"  >Book a Doctor</a>
          <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Call Center</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-stethoscope"></i> Choose Specialty <i class="fas fa-angle-down"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action1</a>
                  <a class="dropdown-item" href="#">Action2</a>
                  <a class="dropdown-item" href="#">Something</a>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-6">
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-map-marker-alt"></i> City <i class="fas fa-angle-down"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Cairo</a>
                  <a class="dropdown-item" href="#">Sohag</a>
                  <a class="dropdown-item" href="#">mokatam</a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-stethoscope"></i> Doctor Name <i class="fas fa-angle-down"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Anwer</a>
                  <a class="dropdown-item" href="#">Alaa</a>
                  <a class="dropdown-item" href="#">sara</a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <button class="btn search" id="searchBtn" type="button">
                Search <img src="assets/img/custom/Path.png" alt="">
              </button>
            </div>
          </div>
          <div class="checked-box">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Feature Num1
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheck2">
                Feature Num2
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
              <label class="form-check-label" for="defaultCheck3">
                Feature Num3
              </label>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ducimus facilis tempore quasi quaerat doloremque vel possimus, pariatur ut est beatae ex id perspiciatis nemo officiis ea laborum! Consequuntur, deleniti.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-box-one">
    <img src="assets/img/custom/box.png" alt="">
  </div>
  <div class="bg-box-two">
    <img src="assets/img/custom/box.png" alt="">
  </div>
  </header>

  <!-- Create Account -->
  <!-- <section class="account ">
    <div class="container-fluid">
        <div class="row"> -->
          <!-- account-form -->
            <!-- <div class="col-lg-6">
              <div class="brand">
                <img src="assets/img/logo/logo-2.png" alt="">
              </div>
              <div class="account-form">
                <h2>Create Your Account</h2>
                <p>It’s Free!</p>
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full name *">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Mobile number *">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email *">
                  </div>
                  <button type="submit" class="btn btn-one">Book an Appointment</button>
                </form>
                <div class="or-before-after">
                  <p>or</p>
                </div>
                <div class="account-social">
                  <a href="#" class="btn">
                    <img src="/assets/img/custom/google-icon.png" alt=""> 
                    Sign up With Google
                  </a>
                  <a href="#" class="btn">
                    <img src="/assets/img/custom/fs-con.png" alt=""> 
                    Sign up With Facebook
                  </a>
                </div>
                <p class="account-login">Already have Account!  <a href="#">Login Now!</a></p>
              </div>
            </div> -->
            <!-- account-book -->
            <!-- <div class="col-lg-6">
              <div class="account-book">
                <a href="#" class="accountClose d-none d-xl-block">
                  <img src="assets/img/custom/icon-close.png" class="img-close" alt="">
                </a>
                <a href="#" class="accountClose d-block d-sm-none">
                  <img src="assets/img/custom/icon-close.png" class="img-close" alt="">
                </a>
                <h1>Just one Step and you can Book your </h1>
                <h6>2 free consultation visits after the first diagnoses visit</h6>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus </p>
                <div class="account-box">
                  <div class="bunting">
                    <img src="assets/img/custom/bunting-icon.png" alt="">
                  </div>
                  <div class="star">
                    <img src="assets/img/custom/rate.png" alt="">
                  </div>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus </p>
                </div>
              </div>
            </div>
        </div>
    </div>
  </section> -->

  <!--  search -->
  <section id="search">
    <a href="#" id="iconSearch">
      <i class="fas fa-times"></i>
    </a>
    <form>
      <div class="form-group">
        <input type="search" class="form-control" placeholder="search ....">
      </div>
    </form>
  </section>


  <script src="assets/js/External/jquery-3.5.1.min.js"></script>
  <script src="assets/js/External/popper.min.js"></script>
  <script src="assets/js/External/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>