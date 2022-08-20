<?php

include 'database.php';


// file upload

if(isset($_POST['videobtn'])){


    $maxsize=20971520; // 5MB
    if(isset($_FILES['file']['name']) && $_FILES['file']['name']  != ''){
$name=$_FILES['file']['name'];
$target_dir="videos/";

 $target_file=$target_dir.$name;


 // extention

 $extention =strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

 // valid file extention
 $extention_arr=array("mp4","avi","3gp");
 //check extention

 if(in_array($extention,$extention_arr)){


    // cjeck fiel size
    if($_FILES['file']['size'] >= $maxsize){
echo 'enter less size video';
    }
    else{
        //upload
        
        if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){


            // insert

            $sql="insert into videos (video,location) values ('".$name."', '".$target_file."')";
           mysqli_query($conn, $sql);

           echo '<script>alert("video uploaded successfully")</script>';

        }
        else{
            echo '<script>alert("error")</script>';
      
        }

    }

 }else{
    echo '<script>alert("Enter a valid format!")</script>';
   
 }

    }
    else{
        echo '<script>alert("Please select a file to upload!")</script>';
    
    }
}
?>


<?php
session_start();
if(isset($_SESSION['session_username'])){
// do nothing
$session_name=$_SESSION['session_username'];
$session_id=$_SESSION['session_id'];
$sessin_image=$_SESSION['session_image'];
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

  <title>Trainers - SCHOOLS</title>
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
        <h2>Trainers</h2>   <a id="logoutlinkt" href="logout.php">Logout</a>
        <p>Main Pillars of MALtech Solutions Pvt Ltd.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

     

<form action="" method="post" id="videoform" enctype="multipart/form-data">

<div class="mb-3">
  <label for="Video Upload" class="form-label">Upload Video :</label>
  <input type="file" class="form-control" id="file" placeholder="Upload your videos" name="file" required>
  <div class="error"></div>
</div>
<button type="submit"  name="videobtn" id="videobtn" >Upload</button>


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
