<html>
<head>
<title> LOGIN </title>
</head>
<body>
	<center><u><div class="container"><h1>LOGIN FORM</h1></div></u></center>
	<h3><u><b><center>
<?php
if(isset($_GET['remarks']))	{
$status=$_GET['remarks'];
if($status=="success")
{
	echo "<div>register sucessfull</div>";
}
if($status=="failed")
{
	echo "<div>Invalid mobile or password </div>or<div>please enter the following</div>";
}
}
?>
</h3></u></b></center>
<form action="logincheck.php" method="POST">
<table align="center" style="border-style: solid";>
<tr>
<td><div align="left">Mobile no:</div></td>
<td><input type="text" name="mobile" /></td>
</tr>
<tr>
<td><div align="left">Password:</div></td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td><input name="submit" type="submit" value="Login"/></td>
<td><input name="submit" type="button" value="register" onclick="document.location='registration.php'"/></td>

</tr>
</table>
</form>
</body>
</html>
