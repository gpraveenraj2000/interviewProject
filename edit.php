<html>
<head>
<title>REGISTRATION FORM</title>
</head>
<body>
<center><u><div class="container"><h1>UPDATE FORM</h1></div></u></center>
<?php
$id = $_GET['id'];
$name = $_GET['name'];
$mobile = $_GET['mobile'];
$gender = $_GET['gender'];
$role = $_GET['role'];
$skills = $_GET['skills'];
$email = $_GET['email'];
$password = $_GET['password'];
$dob = $_GET['dob'];
?>
<form action="update.php" method="post">
<table align="center" style="border-style: solid";>
<tr>
<td>
<div align="left" id="tb-name">Name:</div>
</td>
<td>
<input type="text" name="name" value="<?php echo $name ?>"/>
</td>
</tr>
<tr>
<td><div align="left">Mobile no:</div></td>
<td><input type="text" name="mobile" value="<?php echo $mobile ?>"/></td>
<input type="hidden" name="id" value="<?php echo $id ?>"/>
</tr>
<tr>
<td><div align="left">Gender:</div></td>
<td><input type="radio" name="gender" value="Male"/>Male</td>
<td><input type="radio" name="gender" value="Female" />Female</td>
</tr>
<tr>
<td><div align="left">Role:</div></td>
<td><select type="text" name="role" class="input-field" >
        <option> selected</option>
        <option> ADMIN </option>
	    <option selected> USER </option>
	</select></td>
</tr>
<tr>
<td><div align="left">Skills:</div></td>
<td> <input type="checkbox"  name="skills[]" value="html">
  <label> HTML</label><br>
  <input type="checkbox"  name="skills[]" value="css">
  <label> CSS</label><br>
  <input type="checkbox"  name="skills[]" value="javascript">
  <label> JavaScript</label><br>
  <input type="checkbox"  name="skills[]" value="php">
  <label> PHP</label><br>
  <input type="checkbox"  name="skills[]" value="mysql">
  <label> MYSQL</label><br>
</td>
</tr>
<tr>
<td><div align="left">Email Id:</div></td>
<td><input type="text" name="email" value="<?php echo $email ?>"/></td>
</tr>
<tr>
<td><div align="left">Password:</div></td>
<td><input type="password" name="password" value="<?php echo $password ?>"/></td>
</tr>
<tr>
<td><div align="left">DOB:</div></td>
<td><input type="date" name="dob" value="<?php echo $dob ?>"/></td>
</tr>
<tr>
<td><center><input name="submit" type="submit" value="update"/></center></td>
</tr>
</table>
</form>

</body>
</html>
