
<?php

include 'database.php';


if(isset($_POST['videobtn'])){
    $maxsize=10485760; // 10MB

    if(isset($_FILES['videoupload']['name']) && $_FILES['videoupload']['name'] != ''){
$name=$_FILES['videoupload']['name'];
$target_dir="videos/";
$target_file= $target_dir.$name;

// file extention
$extention=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//valid file
$extention_array=array( "mp4","avi","3gp","mov","mpeg");

// check extention
if(in_array($extention,$extention_array)){
    //check file size

    if($_FILES['videoupload']['size'] >= $maxsize){

        echo '<script>alert("File size too large, enter less size!")</script>';


    }else{
//uplaod
if(move_uploaded_file($_FILES['videoupload']['tmp_name'], $target_file)){

    $sql="INSERT INTO videos (videoupload, location) VALUES ('".$name."' , '".$target_file."')";
    mysqli_query($conn,$sql);

    echo '<script>alert("Video Uplaoded successfully!")</script>';

}   

    }
}else{
    echo '<script>alert("Please select a valid format extention!")</script>';

}

    }else{
      echo '<script>alert("Please select a file!")</script>';
        
    }
}

?>










<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Videos - SCHOOLS</title>
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
        <h2>Upload Videos</h2>  

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
      <form action="" method="post" id="videoform" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="Video Upload" class="form-label">Upload Video :</label>
    <input type="file" class="form-control" id="videoupload" placeholder="Upload your videos" name="videoupload" required>
    <div class="error"></div>
  </div>
  <button type="submit" name="videobtn" id="videobtn" >Upload</button>


</form>

      </div>
    </section><!-- End Trainers Section -->

    
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