<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<form class="" method="POST" action="">
<h1 style="color:white;background-color: black;height: 60px;text-align: center;">STUDENT FEE STATUS</h1>
<input type="text" name="STUDENTID" class="form-control" placeholder="enter studentid" style="width: 200px;margin-left: 800px;height: 40px;margin-top: 20px;"><br>
<input type="submit" name="filter_value" class="btn btn-primary" value="filter" style="margin-left: 1010px;margin-top: -120px;height: 40px;width: 90px;"><br><br>
<table class="table table-striped" id="table_field" style="border-bottom: 1px solid black;">

		
		<thead style="background-color: #013243;color: white;" >
			<tr>
			<th>STUDENTID</th>
			<th>NAME</th>
			<th>COURSEOPTION</th>
			<th>FEESTATUS</th>	
		
			</tr>
		</thead>

		<tbody>
			
			<?php
			include "../new staff/nav.php";
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
		<td style="color: blue;"><?php echo $row['NAME'];?></td>
		<td style="color: green;"><?php echo $row['COURSEOPTION'];?></td>
		<td style="color: 1px solid black;"><?php echo $row['FEESTATUS'];?></td>
		

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