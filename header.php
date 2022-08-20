<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hEADER - SCHOOLS</title>
</head>
<body>
<style>
.dropbtn {
  /* background-color: #04AA6D; */
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  /* background-color: #f1f1f1; */
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black !important;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* .dropdown-content a:hover {background-color: #ddd;} */

.dropdown:hover .dropdown-content {display: block;}

/* .dropdown:hover .dropbtn {background-color: #3e8e41;} */
</style>
 
 
 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Schools</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a  href="trainers.php">Trainers</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="pricing.php">Pricing</a></li>
          <li><a href="contact.php">Contact</a></li>

       

            <?php

if(isset($_SESSION['session_username'])){
// do nothing
$session_name=$_SESSION['session_username'];
$session_id=$_SESSION['session_id'];
$sessin_image=$_SESSION['session_image'];



echo '
<li>
<div class="dropdown">
  <a class="dropbtn">View Profile</a>
  <div class="dropdown-content">
  <a href="editprofile.php">Edit Profile</a>
  <a  href="resetpassword.php">Resest Password</a>
  <a  href="logout.php">Logout</a>

  </div>
</div>
</li>

';
}

else{

  echo '

  <li>
  <a class="nav-link scrollto mainLogoBg" href="login.php">Login</a>
  </li>
  ';
}



?>
           
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="courses.php" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

</body>
</html>