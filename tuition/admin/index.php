<?php
$con=mysqli_connect("localhost","root","","tuition");
if (isset($_POST["submit"])) {
	$USERNAME=$_POST["USERNAME"];
	$PASSWORD=$_POST["PASSWORD"];
	$sql=mysqli_query($con,"SELECT count(*) as total from home where USERNAME='".$USERNAME."' and PASSWORD='".$PASSWORD."'" )or die(mysqli_error($con));
	$rw=mysqli_fetch_array($sql);
	if($rw['total']>0)
	{
		echo "you are successfully logged in!!";
		header('location:home.php');
	}
	else
	{
		
		
		echo '<script>alert("login failure")</script>';
	}
	
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
		.container
		{
			margin-top: 10%;
			margin-left: 400px;
			

		}
		.form-control
		{
			width: 400px;
		}
		body
		{
			background-image: url("vector.jpg");
			background-size: cover;
		}
	</style>
</head>
<body>
<div class="container">
<form action="" method="POST">
<div class="form-group">
<h1>ADMIN LOGIN</h1>
<label>USERNAME</label>	
<input type="text" name="USERNAME" placeholder="enter username" class="form-control" >
</div>	
<div class="form-group">
<label>PASSWORD</label>	
<input type="text" name="PASSWORD" placeholder="enter password" class="form-control">
</div>
<button class="btn btn-primary" name="submit">submit</button>
<a href="student_login.php">student login</a>
<a href="staff_login.php">staff login</a>
</div>	
</form>	
</body> 
</html>