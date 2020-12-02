<?php
include_once '../staff/connection.php';
include "../staff/nav.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>attendence report</title>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<div class="panel panel-default container">
<div class="panel-heading">
	<h1 style="text-align: center;background-color: black;width: 1100px;height: 60px;color: white;"> ATTENDANCE REPORT</h1>
</div>	
<div class="panel-body">
<form action="" method="POST" style="margin-top: -1px;">
<select class="form-control " name="COURSEOPTION" style="width: 250px;margin-left: 710px;" required>
<option value="">select</option>
<option value="6th">6TH STD</option>
<option value="7th">7TH STD</option>
<option value="8th">8TH STD</option>
<option value="9th">9TH STD</option>
<option value="10th">10TH STD</option>
<option value="11th">11TH STD</option>
<option value="12th">12TH STD</option>
<option value="neet">NEET</option>
<option value="jee">JEE</option>
</select>
<div>
<input type="submit" name="filter_value" class="btn btn-warning" value="generate report" style="margin-left: 970px;margin-top: -70px;" id="report">
</div>	
	<table class="table table-bordered">
		
		<thead>
			<tr>
			<th>ID</th>
			<th>NAME</th>	
			<th>COURSEOPTION</th>
			<th>attendence_status</th>
			<th>date</th>
			
			</tr>

		</thead>

		<tbody>
			<?php
			if (isset($_POST['filter_value'])) {
				$COURSEOPTION=$_POST['COURSEOPTION'];
				$query="SELECT * FROM student_attendance WHERE COURSEOPTION='$COURSEOPTION'";
				$result=mysqli_query($con,$query);
				$counter=0;
				if (mysqli_num_rows($result)>0) {
				while ($row=mysqli_fetch_array($result)) {
					?>
					<tr>
					<td><?php echo $row['STUDENTID'];?>
					</td>
					<td><?php echo $row['NAME'];?>
					</td>
					<td><?php echo $row['COURSEOPTION'];?>
					</td>
					<td><?php echo $row['attendence_status'];?>
					</td>
					<td><?php echo $row['date'];?>
					</td>
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
<input type="submit" value="print report" name="submit" class="btn btn-warning" onclick="print_current_page()">
</form>
</div>
<div class="panel-footer"></div>	
</div>
</div>
</body>
<script type="text/javascript">
function print_current_page()
{
window.print();
}
</script>
</html>