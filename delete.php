<?php
include('database.php');

$id=$_GET['id'];
$mobile=$_GET['mobile'];
$sql="DELETE FROM registration WHERE id='$id'";
$result=mysqli_query($mysql,$sql);
if($result){
 echo '<center><div> Account Deleted Sucessfully </div></center>';
 header("Location: welcome.php?mobile=$mobile&deleteFlag=success");
}else {
 echo '<div> Unable to delete Your Account </div>';
 header("Location: welcome.php?mobile=$mobile&deleteFlag=failed");
}
?>
