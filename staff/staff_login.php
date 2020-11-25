<?php
ob_start();
$con=mysqli_connect("localhost","root","","tuition_mangement");
if (isset($_POST["submit"])) {
	$email=$_POST["email"];
	$password=$_POST["password"];
	$email = stripslashes($email);
	$password = addslashes($password);
	$sql=mysqli_query($con,"SELECT count(*) as total from admin where email='".$email."' and password='".$password."'" )or die(mysqli_error($con));
	$rw=mysqli_fetch_array($sql);
	if($sql)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
header("location:announcement.php?q=1");
}
else
{
header("location:staff_login.php?q7=Email Already Registered!!!");
}
ob_end_flush();
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGINFORM</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<style type="text/css">
		@import "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css";
		.form-group
		{
			margin-top: 30px;
			border-color: black;
		}
		body
		{
			background-image: url("book.jpg");
			background-size: cover;
		}
		.container
		{
			margin-top: 10%;
			margin-left: 300px;
		}
		.form-control
		{
			width: 400px;
		}
	</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-6">
<form action="" method="POST">
<div class="form-group">
<h1>STAFF LOGIN</h1>
<label>EMAILID</label>	
<input type="text" name="email" placeholder="enter email" class="form-control">
</div>	
<div class="form-group">
<label>PASSWORD</label>	
<input type="text" name="password" placeholder="enter password" class="form-control">
</div>
<button class="btn btn-primary" name="submit">submit</button>
</div>	
</form>	
</div>
</div>
</body> 
</html>