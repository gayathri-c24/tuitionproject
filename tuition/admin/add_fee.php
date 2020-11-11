<?php
$con=mysqli_connect("localhost","root","","tuition");
if (isset($_POST['submit'])) {
	$STUDENTID=$_POST['STUDENTID'];
	$PAIDAMOUNT=$_POST['PAIDAMOUNT'];
	$DATE=$_POST['DATE'];
	$FEETYPE=$_POST['FEETYPE'];
	$FEESTATUS=$_POST['FEESTATUS'];
	$query="INSERT INTO fee(STUDENTID,PAIDAMOUNT,paiddate,FEETYPE,FEESTATUS)VALUES('$STUDENTID','$PAIDAMOUNT','$DATE','$FEETYPE','$FEESTATUS')";
	$result=mysqli_query($con,$query);
	if ($result) {
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
	<title>add fee</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</head>
<body>
<div class="container">
<form action="" method="POST">
<center><h1>STUDENT FEE</h1></center>
<div>
<label>STUDENTID</label>	
<input type="text" name="STUDENTID" class="form-control form-control-lg">
</div>
<div>
<label>PAID AMOUNT</label>	
<input type="text" name="PAIDAMOUNT" class="form-control form-control-lg">
</div>
<div>
<label>DATE</label>	
<input type="text" name="DATE" class="form-control form-control-lg">
</div>
<div>
<label class="head">FEE TYPE:</label>
<select class="form-control form-control-lg" name="FEETYPE" style="height: 50px;">
<option value="">select</option>
<option value="ANNUVAL">ANNUVAL</option>
<option value="MONTHLY">MONTHLY</option>
<option value="TERM">TERM</option>
</select><br> 	
</div>
<label>FEE STATUS</label>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="FEESTATUS" class="custom-control-input" value="Paid">
  <label class="custom-control-label" for="customRadio1">Paid</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="FEESTATUS" class="custom-control-input" value="Pending">
  <label class="custom-control-label" for="customRadio2">Pending</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio3" name="FEESTATUS" class="custom-control-input" value="Notpaid">
  <label class="custom-control-label" for="customRadio3">Notpaid</label>
</div>
<div>
<center><input type="submit" name="submit" class="btn btn-primary"></center>	
</div>
</form>	
</div>
</body>
</html>