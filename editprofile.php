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


<?php
include 'database.php';

$id=$session_id;
echo $id ;

$updateget=mysqli_query($conn, "select * from schools where id='$id'" );

$row=mysqli_fetch_assoc($updateget);
$name=$row['username'];
$mobileno=$row['mobileno'];
$email=$row['email'];
$password=$row['password'];



if(isset($_POST['updatebtn'])){

    $mobile=$_POST['mobileno'];
    $email=$_POST['email'];





    $update=mysqli_query($conn,"update schools set id='$id',mobileno='$mobile',email='$email' where id=$id");

 
if(!$update){
     echo "not updated";

}
else{
  //  echo "updated successfully";
header('location:main.php');
}
}




?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>REGISTER - SCHOOLS</title>
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
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Edit Profile</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <div class="container" style="margin-top:5% ">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            
<form action="" method="post" id="regform" enctype="multipart/form-data">
<div class="mb-3 mt-3">
    <label for="Username" class="form-label">Name:</label>
    <input type="text" class="form-control" id="username" value=<?php echo $name;?> name="username" readonly placeholder="Enter username">
  </div>
  <div class="mb-3 mt-3">
    <label for="mobileno" class="form-label">Mobile No:</label>
    <input type="text" class="form-control" id="mobileno" value=<?php echo $mobileno;?> placeholder="Enter Mobile no" name="mobileno">
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">email:</label>
    <input type="text" class="form-control" id="email" value=<?php echo $email;?> placeholder="Enter email" name="emailname">
  </div>
 
 
  <div class="mb-3">
    <label for="password" class="form-label">Upload Image :</label>
    <input type="file" class="form-control" id="imageupload" placeholder="Upload your image" name="imageupload">
  </div>
  <button type="submit" name="registerbtn" id="registerbtn" >Submit</button>


</form>
    
        </div>
        <div class="col-md-3"></div>
    </div>


   
</div>

    
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

