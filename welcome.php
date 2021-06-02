<?php
include("database.php");
$mobile=$_GET['mobile'];
$sql="SELECT * FROM registration where mobile=$mobile";
$result=mysqli_query($mysql,$sql);
$rows=$result->fetch_assoc();
$name=$rows['name'];
if($rows['role']=='USER'){
  $sql="SELECT * FROM registration where mobile=$mobile";
  $result=mysqli_query($mysql,$sql);
}
$adminFlag=false;
if($rows['role']=='ADMIN'){
  $sql="SELECT * FROM registration";
  $result=mysqli_query($mysql,$sql);
  $adminFlag=true;

}
?>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<h1 align='center'>Welcome <?php echo $name; ?>,</h1>
<?php
if(isset($_GET['deleteFlag'])){
$deleteFlag=$_GET['deleteFlag'];
if($deleteFlag=="success")
{
	echo '<div> Account Deleted Sucessfully </div>';
}else{
  echo '<div> Unable to delete Your Account </div>';
}
}
if(isset($_GET['updateFlag'])){
$updateFlag=$_GET['updateFlag'];
if($updateFlag=="success")
{
	echo '<div> Account updated Sucessfully </div>';
}else{
  echo '<div> Unable to update Your Account </div>';
}
}
 ?>
<table border="8"style="border-style: solid";  align="center">
  <tr>
    <th> <div align="left">Name</div> </th>
     <th><div align="left">Mobile no</div></th>
    <th><div align="left">Gender</div></th>
    <th><div align="left">Role</div></th>
    <th><div align="left">Skills</div></th>
    <th><div align="left">Email Id</div></th>
    <th><div align="left">Password</div></th>
    <th><div align="left">DOB</div></th>
    <th><div align="left">Update</div></th>
    <?php
     if($adminFlag)
     {
     echo '<th><div align="left">Delete</div></th>';
     }
 ?>
  </tr>
<?php
//$fieldinfo = mysqli_fetch_fields($result);

  //foreach ($fieldinfo as $rows) {
while($rows= mysqli_fetch_array($result)){
?>
<tr>
<form action="" method="POST">
<td><?php echo $rows['name'];?></td>
<td><?php echo $rows['mobile']; ?></td>
<td><?php echo $rows['gender']; ?></td>
<td><?php echo $rows['role']; ?></td>
<td><?php echo $rows['skills']; ?></td>
<td><?php echo $rows['email']; ?></td>
<td><?php echo $rows['password']; ?></td>
<td><?php echo $rows['dob']; ?></td>
<center><td><input name="submit" type="button" value="UPDATE" onclick="document.location='edit.php?id=<?php echo  $rows['id']."&mobile=".$rows['mobile']."&name=".$rows['name']."&gender=".$rows['gender']."&role=".$rows['role']."&skills=".$rows['skills']."&email=".$rows['email']."&password=".$rows['password']."&dob=".$rows['dob'] ?>'"/></td></center>
<?php
 if($adminFlag)
 {
   $id= $rows['id'];
   ?>
  <center><td><input name="submit" type="button" value="Delete" onclick="document.location='delete.php?id=<?php echo $id."&mobile=".$mobile ?>'"/></td></center>
  <?php
 }
?>
</form>
</tr>
<?php
// close while loop
}
?>
</table>


</body>
</html>
