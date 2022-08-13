<?php
include 'database.php';
$error='';
if(isset($_POST['registerbtn'])){
    $regname=$_POST['username'];
    $regmobileno=$_POST['mobileno'];
    $regemail=$_POST['emailname'];
    $regpassword=$_POST['password'];
    $file=$_FILES['imageupload']['name'];
    $file_tmp=$_FILES['imageupload']['tmp_name'];
    $file_ext=strtolower(pathinfo($file ,PATHINFO_EXTENSION));
    $allowed=['png','jpg','jpeg'];
    
    
    if(in_array($file_ext,$allowed)){
    
      $move_file=move_uploaded_file($file_tmp, $path.$file);
    
      if($move_file){
        echo 'file has been successfully uploaded';
      }
      else{

      echo '<script>alert("some thing went wrong")</script>';

      }
    }else{
      echo '<script>alert("Invalid File extension!")</script>';
    
    }
    // $folder = "./image/" . $file;
//     if(move_uploaded_file($tempname,"image/" .$file)){

//      if(){
// echo 'image upload sucess';
//      }else{
//       echo 'enter valid format , onluy PNG,JPEG,JPG formats are allowed'
//      }
//     }
//     else{
//       echo 'error please try again';
//     }
    $date=date('d-m-Y');


//if($regname != "" && $regmobileno != "" && $regemail != "" && $regpassword != ""  ){

  $verifyuserinDB=mysqli_query($conn, "select * from schools where username='$regname' ");

  $verdyusercount=mysqli_num_rows($verifyuserinDB);

  if($verdyusercount == 0){

      $register=mysqli_query($conn, "INSERT INTO schools (username,mobileno,email,password,imageupload,date) VALUES ('$regname','$regmobileno','$regemail','$regpassword','$file','$date')");

      if($register){
         // echo 'reg success';
       //  header('location:login.php');

echo '<script>alert("registered successfully")</script>';



       header('Refresh:3; url=login.php');

        //  usleep(50000);
      }
      else{
  echo '<script>alert("register unsuccessful.., Try again ..!")</script>';
      
      }
  }
  else{
  echo '<script>alert("username already exists try again with another name")</script>';
     
  }

// }
// }else{
//   echo '<script>alert("Please fill all the details!")</script>';
  
// }
 
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
        <h2>Register</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <div class="container" style="margin-top:2% ">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            
<form action="" method="post" id="regform" enctype="multipart/form-data">
<div class="mb-3 mt-3">
    <label for="Username" class="form-label">Name:</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
  </div>
  <div class="mb-3 mt-3">
    <label for="mobileno" class="form-label">Mobile No:</label>
    <input type="text" class="form-control" id="mobileno" placeholder="Enter Mobile no" name="mobileno" required>
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter email" name="emailname" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
  </div>
 
  <div class="mb-3">
    <label for="password" class="form-label">Upload Image :</label>
    <input type="file" class="form-control" id="imageupload" placeholder="Upload your image" name="imageupload" required>
    <div class="error"></div>
  </div>
  <button type="submit" name="registerbtn" id="registerbtn" >Submit</button>
Click here to login<a href="login.php"> Login</a>

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
  <!-- jQuery cdn link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- jquery form validation plugin -->

  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script>



$(document).ready(function() {

    $("#regform").validate({
      rules: {

username: {
    required: true,
},
mobileno: {
    required: true,
    // minlength:true,
    // maxlength:true
},
emailname: {
    required: true,
    isValidEMail:true,
    email: true
},
password: {
    required: true
},
imageupload: {
    required: true
}

},
messages: {
username: {
    required: "*Firstname required*",
},
mobileno: {
    required: "*Lastname required*",
    // minlengt:10,
    // maxlength:10,
},
emailname: {
    required: "*Email required*",
    isValidEMail: "*Please enter a valid email address.*"
},
password: {
    required: "*Phone number required*",
  
},
imageuplaod: {
    required: "*Password required*"
}
},
    });
  })

  $.validator.addMethod("isValidEMail", function (value) {
        return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,}$/);
    });
  </script>

</html>

