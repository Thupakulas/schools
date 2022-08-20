<?php
session_start();
if(!isset($_SESSION['session_username'])){
// do nothing
header('location:login.php');

}
else{
    session_destroy(); 
    header('location:login.php');
}

?>