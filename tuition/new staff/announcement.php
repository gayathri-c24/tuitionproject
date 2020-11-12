<?php
$con=mysqli_connect("localhost","root","","tuition");
if (isset($_POST["send"])) {
	$chk=implode(',',$_POST["chk"]);
	$SUBJECT=$_POST["SUBJECT"];
	$MESSAGE=$_POST["MESSAGE"];
	$qry="INSERT INTO announcement(chk,SUBJECT,MESSAGE)VALUES('$chk','$SUBJECT','$MESSAGE')";
	$query_run=mysqli_query($con,$qry);
	if ($query_run) {
		echo "inserted successfully";
	}
	else
	{
		echo "not inserted successfully";
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>announcement</title>
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
<style type="text/css">
		table,td,th
		{
			border: 1px solid black;
			text-align: center;
		    width: 30%;
		    border-color:#1e824c; 
		    padding: 10px;
		    margin-top: 20px;
		     border-top-color:#1e824c;
		   
         } 
         input
         {
         	padding: 10px;
         	border-color:#1e824c;
         }
     .form-control1
	{
		width: 80%;
		padding: 5%;
		margin-right: 300px;
		margin-left: 30px;
		
	}
	
	.sub
	{
		margin-left: 30px;
	}
	
		.btn
	{
		background-color: blue;
		margin-right: 300px;
	}
	.form-control
	{
		padding: 10px;
		width:80%;
		margin-left: 30px;
	}
	
	.bar
	{
		padding: 10px;
		width: 10%;
		margin-left: 1000px;
		
	}
	.search
	{
		padding:10px;
		color:#00b16a;
		border-color:#00b16a; 
		
	}
	.task
	{
		margin-left: 100px;
	}
	.min
	{
		margin-left: 55px;
	}

</style>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">	
<center>
<h1>ANNOUNCEMENT</h1>
</center>	
<input type="text" name="STUDENTID" placeholder="ENTER " class="bar">
<input type="submit" name="submit" value="VIEW ALL DATA" class="search">	
<label class="min">CLASS</label>
<select class="form-control form-control-lg" name="COURSEOPTION" style="height: 40px;">
<option value="">select</option>
<option value="6th">6th</option>
<option value="7th">7th</option>
<option value="8th">8th</option>
<option value="9th">9th</option>
<option value="10th">10th</option>
<option value="11th">11th</option>
<option value="12th">12th</option>
<option value="NEET">NEET</option>
<option value="JEE">JEE</option>
</select><br>
<label class="min">SECTION</label>
<select class="form-control form-control-lg" name="SECTION" style="height: 40px;">
<option value="">selct</option>
<option value="A">A</option>
<option value="B">B</option>
</select><br>
<input type="submit" class="btn" name="submit" style="margin-left: 30px;">
<div class="row" style="margin-top: 30px;">
<div class="col" style="margin-top: 20px;background-color: #c5eff7;margin-left: 120px;margin-right: 100px;">
<h3 class="task">TASK PORTAL</h3>
<label for="exampleInputsubject" class="sub">SUBJECT</label>
 <input type="text" Class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="SUBJECT">
<label for="exampleInputPassword1" class="sub">MESSAGE</label><br>
<textarea class="form-control1" id="exampleInputPassword1" name="MESSAGE" placeholder="enter your message.."></textarea><br><br>
 <input type="submit" style="margin-left: 200px;" name="send" class="btn">
</div>
<div class="col">
<table class="table table-striped table-hover">
<thead class="thead-dark">	
<tr>
<th>#</th>	
<th>STUDENTID</th>	
<th>NAME</th>
<th>COURSEOPTION</th>
</tr><br>
</thead>
</div>
</div>
	<?php
	if (isset($_POST['submit'])) {
		$COURSEOPTION=$_POST['COURSEOPTION'];
		$SECTION=$_POST['SECTION'];
		$query="SELECT STUDENTID,NAME,COURSEOPTION FROM front WHERE COURSEOPTION='$COURSEOPTION' OR SECTION='$SECTION'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0){
		while ($row=mysqli_fetch_array($result)) {
			?>
			<form action="" method="POST">
			<tr>
		<td><div class="form-check">
  <input class="form-check-input" type="checkbox" name="chk[]" value="<?php echo $row['STUDENTID']?>">
 </div></td>
		<td><?php echo $row['STUDENTID'];?></td>
		<td><?php echo $row['NAME'];?></td>
		<td><?php echo $row['COURSEOPTION'];?></td>
		</tr>
		</form>

		<?php
		}
	}
}
	?>
	</table>
</form>
</body>
</html>