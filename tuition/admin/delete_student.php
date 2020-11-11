<!DOCTYPE html>
<html>
<head>
	<title>delete student details</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<style type="text/css">
		body
		{
			background-color: lightblue;

		}
		input
		{
			width: 40%;
			height: 5%;
			border:1px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px; 
		}
		

	</style>
</head>
<body>
<center>
	<h1>DELETE STUDENT DETAILS</h1>
	<form action="" method="POST">
	<input type="text" name="STUDENTID" placeholder="ENTER STUDENTID TO DELETE"/><br/>
	<input type="submit" name="delete" value="DELETE DATA">	
	</form>
	<?php
	$con=mysqli_connect("localhost","root","","tuition");
	if(isset($_POST['delete'])) {
		$STUDENTID=$_POST['STUDENTID'];
		$query="DELETE FROM front WHERE STUDENTID='$STUDENTID'";
		$query_run=mysqli_query($con,$query);
		if($query_run)
		{
			echo "data deleted successfully";
		}
		else
		{
			echo "data not deleted";
		}
	}
	?>
</center>
</body>
</html>