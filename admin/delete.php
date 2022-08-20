<?php

include 'database.php';

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


if(isset($_GET['deleteid'])){
   
    $id=$_GET['deleteid'];
     

    $delete=mysqli_query($conn, "delete from schools where id='$id'");


    if($delete){
    echo '<script>alert("user deleted successfully")</script>';

    header('Refresh:3; url=userdetails.php');
     
    }
else{
    echo 'not deleted';
}
}
?>