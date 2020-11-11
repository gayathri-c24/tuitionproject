<!DOCTYPE html>
<html>
<head>
	<title>serach student details</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<style type="text/css">
		body
		{
			background-color: whitesmoke;

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
		table,td,th
		{
			border: 2px solid black;
			padding-left: 10px;
			padding-right: 10px;
			text-align: center;
			padding-top: 20px;
			padding-bottom: 20px;
			 width: 50%; 
          }  

	</style>
</head>
<body>
<center>
	<h1>SEARCH STUDENT DETAILS</h1>
	<form action="" method="POST">
	<input type="text" name="STUDENTID" placeholder="ENTER STUDENTID TO SEARCH"/><br/>
	<input type="submit" name="search" value="SEARCH DATA">	
	<table>
<tr>
<th>STUDENTID</th>	
<th>NAME</th>
<th>PHONENUMBER</th>
<th>EMAILID</th>
<th>SCHOOLNAME</th>	
<th>DATEOFBIRTH</th>
<th>FATHERNAME</th>
<th>MOTHERNAME</th>	
<th>GENDER</th>
<th>CASTE</th>
<th>ADDRESS</th>
<th>COURSEOPTION</th>							
</tr><br>
	</form>
	<?php
	$con=mysqli_connect("localhost","root","","tuition");
    if (isset($_POST['search'])) {
		$STUDENTID=$_POST['STUDENTID'];
		$query="SELECT * FROM front WHERE STUDENTID='$STUDENTID'";
		$query_run=mysqli_query($con,$query);
		while ($row=mysqli_fetch_array($query_run)) {
			?>
			<form action="" method="POST">
			<tr>
		<td><?php echo $row['STUDENTID'];?></td>
		<td><?php echo $row['NAME'];?></td>
		<td><?php echo $row['PHONENUMBER'];?></td>
		<td><?php echo $row['EMAILID'];?></td>
		<td><?php echo $row['SCHOOLNAME'];?></td>
		<td><?php echo $row['DATEOFBIRTH'];?></td>
		<td><?php echo $row['FATHERNAME'];?></td>
		<td><?php echo $row['MOTHERNAME'];?></td>
		<td><?php echo $row['GENDER'];?></td>
		<td><?php echo $row['CASTE'];?></td>
		<td><?php echo $row['ADDRESS'];?></td>
		<td><?php echo $row['COURSEOPTION'];?></td>
		</tr>				
		</form>
		<?php
		}
	}
	?>
</center>
</body>
</html>