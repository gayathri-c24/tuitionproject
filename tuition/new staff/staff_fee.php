<!DOCTYPE html>
<html>
<head>
	<title>VIEW STUDENT FEE DETAILS</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<form class="" method="POST" action="">
<CENTER><h1>VIEW STUDENT FEE DETAILS</h1></CENTER>
<input type="text" name="STUDENTID" class="form-control" placeholder="enter studentid" style="width: 200px;margin-left: 800px;margin-top: 50px;"><br>
<input type="submit" name="filter_value" class="btn btn-info pull-right" value="filter" style="margin-top: -55px;margin-right: 55px;"><br><br>
<table class="table table-striped" id="table_field">
		
		<thead>
			<tr>
			<th>STUDENTID</th>
			<th>NAME</th>
			<th>COURSEOPTION</th>
			<th>FEESTATUS</th>	
		
			</tr>
		</thead>

		<tbody>
			
			<?php
			$con=mysqli_connect("localhost","root","","tuition");
	if (isset($_POST['filter_value'])) {
		$value=$_POST['STUDENTID'];
		$query="SELECT fee.STUDENTID, front.NAME, front.COURSEOPTION,fee.FEESTATUS
FROM fee
INNER JOIN front ON fee.STUDENTID=front.STUDENTID WHERE fee.STUDENTID='$value'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)) {
			?>
			<form action="" method="POST">
		
		<td><?php echo $row['STUDENTID'];?></td>
		<td><?php echo $row['NAME'];?></td>
		<td><?php echo $row['COURSEOPTION'];?></td>
		<td><?php echo $row['FEESTATUS'];?></td>
		

		</tr>
		</form>

		<?php
		}
	}
	else
	{
		echo "no record found";

	}
}
	?>
</tbody>		
</table>		
</form>	
</div>	
</body>
</html>