<?php
include 'database.php';

session_start();
$session_name=$_SESSION['session_username'];
// $session_id=$_SESSION['session_id'];


$sessid=$_SESSION['session_id'];


$passwordget=mysqli_query($conn, "select * from schools where username='$session_name'");
    

$row=mysqli_fetch_array($passwordget);
    $repwd=$row['password'];
    $reusername=$row['username'];
    



if(isset($_POST['resetpwdbtn'])){

    $rpassword=$_POST['respassword'];
    $rconpassword=$_POST['conpassword'];

    // $passwordget=mysqli_query($conn, "select * from register where username='$session_name'");

  


    if($repwd == $rpassword){

     
    $rest=mysqli_query($conn, "update schools set  password='$rconpassword' where username='$session_name'");
    echo '<script>alert("password updated successfully")</script>';

    header('Refresh:3; url=login.php');
    }
    else{
        echo 'not updated';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RESET PASSWORD - SCHOOLS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.8.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php

include 'header.php';

?>

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
      <div class="container">
        <h2><?php echo $session_name ?></h2>   <a id="logoutlinkt" href="logout.php">Logout</a>
        <p>Reset your password here !</p>
      </div>
    </div><!-- End Breadcrumbs -->

 <div class="container" style="margin-top:2%">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <form method="post">

<div class="form-group">
  <label for="password" id="passwordl"> Password:</label>
  <input type="password" class="form-control" id="password" name="respassword" placeholder="Password">
</div>
<div class="form-group mb-3">
  <label for="conpassword" id="conpasswordl">Confirm Password:</label>
  <input type="password" class="form-control" id="conpassword" name="conpassword" aria-describedby="emailHelp" placeholder="Enter password">
</div>
<button type="submit" name="resetpwdbtn" class="resetpwdbtn">Submit</button>
</form> 
        </div>
        <div class="col-md-3"></div>
    </div>
</div><?php

include 'footer.php';

?>
 
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>