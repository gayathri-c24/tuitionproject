<!DOCTYPE html>
<html>
<head>
	<title>student marks</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="container">
<form class="" method="POST" action="">
<CENTER><h1>VIEW MARK</h1></CENTER>
<input type="text" name="STUDENTID" class="form-control"><br>
<input type="submit" name="filter_value" class="btn btn-primary" value="filter"><br><br>
<table class="table table-striped" id="table_field">
		
		<thead>
			<tr>
			<th>STUDENTID</th>
			<th>NAME</th>
			<th>COURSEOPTION</th>
			<th>SUBJECTS</th>	
			<th>EARNMARK</th>
			<th>TOTALMARK</th>	
			</tr>
		</thead>

		<tbody>
			
			<?php
			$con=mysqli_connect("localhost","root","","tuition");
	if (isset($_POST['filter_value'])) {
		$value=$_POST['STUDENTID'];
		$query="SELECT * FROM mark_records WHERE STUDENTID='$value'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)) {
			?>
			<form action="" method="POST">
		
		<td><?php echo $row['STUDENTID'];?></td>
		<td><?php echo $row['NAME'];?></td>
		<td><?php echo $row['COURSEOPTION'];?></td>
		<td><?php echo $row['SUBJECTS'];?></td>
		<td><?php echo $row['EARNMARK'];?></td>
		<td><?php echo $row['TOTALMARK'];?></td>

		</tr>
		</form>

		<?php
		}
	}
}
	?>
</tbody>		
</table>		
</form>	
</div>	
</body>
</html>