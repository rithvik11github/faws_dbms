<!DOCTYPE html>
<html>
<head>
	<title>Welcome User</title>
</head>
<body>
<?php 
session_start();
$uname=$_SESSION['var'];
$_SESSION['var']=$uname;
 ?>
<h1>WELCOME TO YOUR PROFILE</h1>
<div align="center">
<p align="center">
	<a href="/new_try/profile_pages/supplier_profile/index.php"><img src="proceed.jpg" alt="" border="0" width="150" height="150"></a>
</p>
</div>
</body>
</html>