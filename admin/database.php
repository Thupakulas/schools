<?php

$conn=mysqli_connect('localhost','root','','schools');

if($conn){
   // echo 'connected success';
}
else{
    echo 'not connected';
}
?>