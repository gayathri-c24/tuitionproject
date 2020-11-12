<?php
$con=mysqli_connect("localhost","root","","tuition");
$flag=0;
if (isset($_POST['submit'])) {
		foreach($_POST['attendence_status'] as $id=>$attendence_status)
		{
		$STUDENTID=$_POST['STUDENTID'][$id];
		$NAME=$_POST['NAME'][$id];
		$COURSEOPTION=$_POST['COURSEOPTION'][$id];
		$date=date("yy-m-d H:i:s");
		$result=mysqli_query($con,"INSERT INTO student_attendance(STUDENTID,NAME,COURSEOPTION,attendence_status,date)VALUES('$STUDENTID','$NAME','$COURSEOPTION','$attendence_status','$date')");
		if ($result) {
			$flag=1;
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>staffattendence</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="panel panel-default container">
<div class="panel-heading">
	<h1 style="text-align: center;">STUDENT ATTENDENCE</h1>
</div>	
<div class="panel-body">
	<a href="viewall1.php" class="btn btn-primary">VIEW</a>
	<a href="home.php" class="btn btn-info pull-right">BACK</a><br><br>
	<?php if($flag) { ?>
	<div class="alert alert-success">	
	Attendence data inserted successfully	
	</div>
<?php }?>
	<form action="" method="POST">
	<select class="form-control form-control-lg" name="COURSEOPTION">
<option value="">select</option>
<option value="6TH STD">6TH STD</option>
<option value="7TH STD">7TH STD</option>
<option value="8TH STD">8TH STD</option>
<option value="9TH STD">9TH STD</option>
<option value="10TH STD">10TH STD</option>
<option value="11TH STD">11TH STD</option>
<option value="12TH STD">12TH STD</option>
<option value="NEET">NEET</option>
<option value="JEE">JEE</option>
</select><br>
	<input type="submit" name="filter_value" class="btn btn-primary" value="filter">	
	<table class="table table-striped">
		<h3><div class="text-center">Date:<?php echo date("yy-m-d");?></div></h3>
		<thead>
			<tr>
			<th>ID</th>
			<th>NAME</th>	
			<th>COURSEOPTION</th>
			<th>ATTENDENCE</th>
			
			</tr>

		</thead>

		<tbody>
			<?php
			if (isset($_POST['filter_value'])) {
				$COURSEOPTION=$_POST['COURSEOPTION'];
				$query="SELECT * FROM front WHERE COURSEOPTION='$COURSEOPTION'";
				$result=mysqli_query($con,$query);
				$counter=0;
				if (mysqli_num_rows($result)>0) {
				while ($row=mysqli_fetch_array($result)) {
					?>
					<tr>
					<td><?php echo $row['STUDENTID'];?>
					<input type="hidden" name="STUDENTID[]" value="<?php echo $row['STUDENTID'];?>">	
					</td>
					<td><?php echo $row['NAME'];?>
					<input type="hidden" name="NAME[]" value="<?php echo $row['NAME'];?>">	
					</td>
					<td><?php echo $row['COURSEOPTION'];?>
					<input type="hidden" name="COURSEOPTION[]" value="<?php echo $row['COURSEOPTION'];?>">
					</td>
				<td><input required type="radio" name="attendence_status[<?php echo $counter; ?>]" value="present">present
				<input required name="attendence_status[<?php echo $counter; ?>]" value="absent" type="radio">absent</td>
				</tr>
				<?php
				 $counter++;
				}
				}
				else {
						
						echo "no record found";
					}	
				}

			?>

		
</table>
<input type="submit" value="Take attendence" name="submit" class="btn btn-primary">
</form>
</div>
<div class="panel-footer"></div>	
</div>
</div>
</body>
</html>