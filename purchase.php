<?php

$apikey="rzp_test_w1eSkKTc3MwEIN";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="purch.php" method="POST">


          

<div class="mb-3 mt-3">
    <label for="Username" class="form-label">Name:</label>
    <input type="text" class="form-control" id="username" name="name" placeholder="Enter username" >
  </div>
  <div class="mb-3 mt-3">
    <label for="mobileno" class="form-label">Mobile No:</label>
    <input type="text" class="form-control" id="mobileno" placeholder="Enter Mobile no" name="mobileno" >
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">email:</label>
    <input type="hidden" value="<?php echo 'OID'.rand(100,1000) ;?>" name="orderid"    >
    <input type="hidden" value="<?php echo 1 ;?>" name="orderid"    >

  </div>
  <div class="mb-3">
    <label for="class" class="form-label">email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" >
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" >
  </div>
 

  <a type="submit" href="purch.php" name="paynowbtn" id="paynowbtn" >Submit</a>

</form>
 

</body>
</html>