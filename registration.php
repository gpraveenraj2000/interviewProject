<html>
<head>
<title>REGISTRATION FORM</title>
</head>
<body>
<center><u><div class="container"><h1>REGISTRATION FORM</h1></div></u></center>
<h3><u><b><center>
<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if($remarks=="already_present")
{
	echo'<div> user already exists </div>';
}
if($remarks=="failed")
{
	echo'<div> registration failed</div><div> please enter the following</div>';
}
?>
</center></b></u></h3>
<form action="execute.php" method="post">
<table align="center" style="border-style: solid";>
<tr>
<td>
<div align="left" id="tb-name">Name:</div>
</td>
<td>
<input type="text" name="name";/>
</td>
</tr>
<tr>
<td><div align="left">Mobile no:</div></td>
<td><input type="text" name="mobile"/></td>
</tr>
<tr>
<td><div align="left">Gender:</div></td>
<td><input type="radio" name="gender" value="Male" />Male</td>
<td><input type="radio" name="gender" value="Female" />Female</td>
</tr>
<tr>
<td><div align="left">Role:</div></td>
<td><select type="text" name="role" class="input-field" >
        <option> selected </option>
        <option> ADMIN </option>
	    <option> USER </option>
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
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td><div align="left">Password:</div></td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td><div align="left">DOB:</div></td>
<td><input type="date" name="dob" /></td>
</tr>
<tr>
<td><input name="submit" type="submit" value="Submit"/></td>
<td><input name="submit" type="button" value="login" onclick="document.location='login.php'"/></td>
</tr>
</table>
</form>

</body>
</html>
