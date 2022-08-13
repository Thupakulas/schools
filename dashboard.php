<?php
session_start();
if(isset($_SESSION['session_username'])){
// do nothing
$session_name=$_SESSION['session_username'];
$session_id= $_SESSION['session_id'];
$sessin_image=$_SESSION['session_image'];
//echo 'Hello Mr/Miss/Mrs.<h1>'.$session_name.'</h1>';

//echo '<script>alert('.$session_id.')</script>';
//echo '<script>alert('.$session_id.')</script>';

}
else{

header('location:login.php');
}

?>




    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DAHBOARD - SCHOOLS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- for uploading image  -->
  <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>



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
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <?php
include 'database.php';

echo 'Hello,  Mr/Miss/Mrs.<h1>'.$session_name.'</h1>';





?>

<?php

        $query = "select * from schools where id= '$session_id'";
        $result = mysqli_query($conn, $query);
 $resultcount=mysqli_num_rows($result);
 

 if($resultcount == 0){
  echo 'no data ';
 }

 else{
  while($fetchimage=mysqli_fetch_array($result)){
    $image=$fetchimage['imageupload'];
    $usern=$fetchimage['username'];

 ?>
    <img src="image/<?php echo $image; ?>">
<?php

   // echo $usern;
  }
 }
    ?>
       

        <h2>Welcome to SCHOOLS</h2>
        <a id="logoutlink" href="editprofile.php">Edit Profile</a><br>
         <a id="logoutlink" href="resetpassword.php">reset your password here..</a><br> <a id="logoutlink" href="logout.php">Logout</a>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
 <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/kiranfounder.jpg"  class="img-fluid"  alt="">
              <div class="member-content">
                <h4>Kallu Madhu Kiran</h4>
                <span>MALtech Solutions</span>
                <p>
                 kallu Madhu kiran is founder and CEO of MALtech Solutions Pvt Ltd.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="https://www.maltech.co/assets/img/Ramya.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Ramya Munagala</h4>
                <span>Business Development</span>
                <p>


         Business Development for MALtech Solutions.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="https://www.maltech.co/assets/img/moses.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Moses Alfred</h4>
                <span>Devops Engineer</span>
                <p>
           Devops Engineer for MALtech
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Trainers Section -->

    
  </main><!-- End #main -->
<?php

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