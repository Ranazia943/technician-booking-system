<?php
ini_set('display_errors' ,'1');
error_reporting(E_ALL & ~E_NOTICE);

session_start();
include_once '../dbcon.php';

if (!isset($_SESSION['email'])) {
  echo "<script>window.open('requesterlogin.php','_self')</script>";
}else{

  $id= $_SESSION['email']['id'];
 $name=$_SESSION['email']['name'];; 
 
}
?>
