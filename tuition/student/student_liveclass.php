<!DOCTYPE html>
<html>
<head>
	<title>liveclass</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<center><h1>Live Classes</h1></center>	
<form action="" method="POST" class="form-group">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CLASS</th>
      <th scope="col">SUBJECT</th>
      <th scope="col">MEETINGLINK</th>
    </tr>
  </thead>
  <tbody>
  <?php
	$con=mysqli_connect("localhost","root","","tuition");
    
		$query="SELECT * FROM liveclass";
		$query_run=mysqli_query($con,$query);
		while ($row=mysqli_fetch_array($query_run)) {
			?>
			<form action="" method="POST">
			<tr>
		<td><?php echo $row['CLASS'];?></td>
		<td><?php echo $row['SUBJECT'];?></td>
		<td><a href="$MEETINGLINK"><?php echo $row['MEETINGLINK'];?></a></td>
		</tr>				
		</form>
		<?php
		}
	
	?>
  </tbody>
</table>	
</div>
</div>
</form>
</div>
</body>
</html>