

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
  </head>
  <body>
    

  
  
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

 
          <li class="dropdown"><a href="#"><span>Authorisation</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <?php
            session_start();
                    
                    if(isset($_SESSION['session_username']))
                    {
                        echo '
                        <li>
                        <a class="nav-link scrollto mainLogoBg" href="<?php echo $baseURL; ?>app/dashboard">Dashboard</a>
                        </li>
                        ';
                    }
                    else
                    {
                        echo '
                        <li>
                        <a class="nav-link scrollto mainLogoBg" href="login.php">Login</a>
                        </li>
                        ';
                    }
                    
                    ?>
           
            </ul>
          </li> 
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="courses.php" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

  </body>


  

  <!-- jQuery cdn link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  </html>