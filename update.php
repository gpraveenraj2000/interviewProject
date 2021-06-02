<?php
include('database.php');
 $id=$_POST['id'];
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
 $query="UPDATE registration SET name ='". $name."', mobile ='". $mobile."', gender ='". $gender."', role ='". $role."', skills ='". $chk."', email ='". $email."', password ='". $password."', dob ='". $dob."' WHERE id='".$id."'";
 echo "<script>console.log('$query');</script>";
 if(mysqli_query($mysql,$query)){
header("Location: welcome.php?mobile=$mobile&updateFlag=success");
 }else{
 header("Location: welcome.php?mobile=$mobile&updateFlag=failed");
 }
?>
