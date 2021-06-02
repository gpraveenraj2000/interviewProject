<?php
include('database.php');
$mobile =$_POST['mobile'];
$result = mysqli_query($mysql,"SELECT * FROM registration WHERE mobile='$mobile'");
$num_rows = mysqli_num_rows($result);
if ($num_rows > 0) {
 header("location: registration.php?remarks=already_present");
}else {
 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $gender=$_POST['gender'];
 $role=$_POST['role'];
 $skills=$_POST['skills'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $dob=$_POST['dob'];
 $chk='';
 foreach($skills as $chk1)
   {
      $chk .= $chk1.",";
   }
 if(mysqli_query($mysql,"INSERT INTO registration(name, mobile, gender, role, skills, email, password, dob)VALUES('$name', '$mobile','$gender','$role','$chk', '$email','$password', '$dob')")){
 header("location: login.php?remarks=success");
 }else{
 header("location: registration.php?remarks=failed");
 }
}
?>
