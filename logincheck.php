<?php
include("database.php");
//session_start();
 $mobile=$_POST['mobile'];
 $password=$_POST['password'];
 $sql="SELECT * FROM registration WHERE mobile='$mobile' and password='$password'";
 $result=mysqli_query($mysql,$sql);
 $c_rows = mysqli_num_rows($result);
 if ($c_rows == 0) {
  header("location:login.php?remarks=failed");
 }
 else{
	//$_SESSION['login_user']=$mobile;
	header ("location:welcome.php?mobile=$mobile");
 }
?>
