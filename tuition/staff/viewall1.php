<?php
$con=mysqli_connect("localhost","root","","tuition");
?>
<!DOCTYPE html>
<html>
<head>
	<title>staffattendence</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<div class="panel panel-default container">
<div class="panel-heading">
<center>	
<h1>ATTENDENCE DATES</h1>
</center>
<a  class="btn btn-primary" href="student_attendance.php">BACK</a>
</div>	
<br>
<div class="panel-body">
<form action="" method="POST">
<table class="table table-striped">
<tr>
<th>STUDENTID</th>
<th>NAME</th>
<th>DATE</th>
<th>COURSEOPTION</th>
<th>ATTENDANCE_STATUS</th>
</tr>
<?php
$query="SELECT STUDENTID,NAME,date,COURSEOPTION,attendence_status FROM student_attendance";
$result=mysqli_query($con,$query);
$counter=0;
while ($row=mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row['STUDENTID'];?></td>
<td><?php echo $row['NAME'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['COURSEOPTION'];?></td>
<td><?php echo $row['attendence_status'];?></td>
</td>
<td>
<form action="" method="POST">
<input type="hidden" name="date" value="<?php echo $row['date'];?>">
</form>	
</td>
</tr>
<?php
}
?>
</table>
</form>
</div>
<div class="panel-footer"></div>	
</div>
</div>
</body>
</html>