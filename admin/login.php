<?php 

include 'database.php';


if(isset($_POST['loginbtn'])){
    $logname=$_POST['loginusername'];
    $logpassword=$_POST['loginpassword'];
    //echo $logname;

    $checklognameinDB=mysqli_query($conn, "select * from adminregister WHERE username='$logname'");
    $countchecklognameinDB=mysqli_num_rows($checklognameinDB);

    if($countchecklognameinDB == 0){
    echo '<script>alert("no user details found")</script>';
     
    }
    else{

        while($row=mysqli_fetch_array($checklognameinDB)){
            $regid=$row['id'];          
            $regnam=$row['username'];
            $regpwd=$row['password'];
            $regimage=$row['imageupload'];

          
        }
        if($logname == $regnam && $logpassword == $regpwd){
            session_start();
            $_SESSION['session_id']=$regid;
            $_SESSION['session_username']=$regnam;
            $_SESSION['session_image']=$imageupload;
            $_SESSION['session_pwd']=$regpwd;
       



            echo 'login success';
             header('location:userdetails.php');
        }
        else{
    echo '<script>alert("username and password not matched ..!")</script>';
      
        }
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - Schools</title>
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
        <h2>Login</h2>
<h4>**Hello ADMIN, Please login to view the details **</h4>
      </div>
    </div><!-- End Breadcrumbs -->
<div class="container" >
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            
<form action="" method="post" id="loginform">
<div class="mb-3 mt-3">
    <label for="Username" class="form-label">Name:</label>
    <input type="text" class="form-control" id="loginusername" name="loginusername" placeholder="Enter username">
  </div>
  <!-- <div class="mb-3 mt-3">
    <label for="rollno" class="form-label">Roll No:</label>
    <input type="text" class="form-control" id="rollno" placeholder="Enter rollno" name="rollno">
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">class:</label>
    <input type="text" class="form-control" id="class" placeholder="Enter class" name="class">
  </div> -->
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="loginpassword" placeholder="Enter password" name="loginpassword">
  </div>
 

  <button type="submit" name="loginbtn" id="loginbtn">Submit</button>
</form>
    Not registered yet?<a href="register.php">Register</a>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
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
  <!-- jQuery cdn link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- jquery form validation plugin -->

  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script>



$(document).ready(function() {

    $("#loginform").validate({
      rules: {

username: {
    required: true,
},

password: {
    required: true
},


},
messages: {
username: {
    required: "*Firstname required*",
},


password: {
    required: "*Phone number required*",
  
},

},
    });
  })

  $.validator.addMethod("isValidEMail", function (value) {
        return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,}$/);
    });
  </script>
</body>

</html>

