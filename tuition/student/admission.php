<?php
$con=mysqli_connect("localhost","root","","tuition");
if (isset($_POST['submit'])) {
  $STUDENTID=$_POST["STUDENTID"];
	$NAME=$_POST["NAME"];
	$PHONENUMBER=$_POST["PHONENUMBER"];
	$EMAILID=$_POST["EMAILID"];
	$SCHOOLNAME=$_POST["SCHOOLNAME"];
	$DATEOFBIRTH=$_POST["DATEOFBIRTH"];
	$FATHERNAME=$_POST["FATHERNAME"];
	$MOTHERNAME=$_POST["MOTHERNAME"];
	$GENDER=$_POST["GENDER"];
	$CASTE=$_POST["CASTE"];
	$ADDRESS=$_POST["ADDRESS"];
	$COURSEOPTION=$_POST["COURSEOPTION"];
	$reg="INSERT INTO front(STUDENTID,NAME,PHONENUMBER,EMAILID,SCHOOLNAME,DATEOFBIRTH,FATHERNAME,MOTHERNAME,GENDER,CASTE,ADDRESS,COURSEOPTION)VALUES('$STUDENTID','$NAME','$PHONENUMBER','$EMAILID','$SCHOOLNAME','$DATEOFBIRTH','$FATHERNAME','$MOTHERNAME','$GENDER','$CASTE','$ADDRESS','$COURSEOPTION')";
	$query_run=mysqli_query($con,$reg);
	if($query_run)
	{
	echo '<script>alert("ADMISSION SUCCESSFUL")</script>';
    }
    else
    {
    	echo '<script>alert("ADMISSION  NOT SUCCESSFUL")</script>';

    }
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title>admission</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<style >
.form-control
{
	background:rgba(255,255,255,0.2);
	border: 0px;
	border-radius: 0px;
	border: 2px solid black;
	font-size: 15px;
	margin-top:10px;
	margin-left: 200px;
	margin-right: 60px;
	width: 390px;
}
.label
{
	margin-top: 20px;
	margin-left: 190px;
}
.form-check
{
	margin-left: 350px;
	margin-top: 30px;
}
.form-group
{
	margin-top: 30px;
}

.formcheck1
{
	margin-left: 270px;
	margin-top: 50px;
}
.END
{
	margin-top: 400px;

}
.text-center
{
  color: blue;
	margin-left: 100px;
	background-color: violet;
	margin-bottom: 50px;
}
.custom-select
{
  margin-left: 200px;
}
.check
{
  margin-left: 300px;
}
.form-check-caste
{
  margin-left: 600px;
}
</style>
</head>
<body>
	<form class="admissionform" action="" method="POST">
	<h1 class="text-center">ADMISSION FORM</h1>
	<div class="row">
    <div class="col">
      <label class="label col-md-3 control-label">STUDENTID:</label>
      <input type="text" class="form-control" placeholder=" enter your STUDENTID" name="STUDENTID">
    </div>
    <div class="col">
    	<label class="label col-md-3 control-label">NAME:</label>
      <input type="text" class="form-control" placeholder=" enter your First name" name="NAME">
    </div>
    <div class="col">
    	<label class="label col-md-3 control-label">PHONENUMBER:</label>
      <input type="text" class="form-control" placeholder="enter your phone number" name="PHONENUMBER">
    </div>
    <div class="col">
    	<label class="label col-md-3 control-label">EMAILID:</label>
      <input type="text" class="form-control" placeholder="enter your Emailid" name="EMAILID">
    </div>
    <div class="col">
    	<label class="label col-md-3 control-label">SCHOOLNAME:</label>
      <input type="text" class="form-control" placeholder=" enter your schoolname" name="SCHOOLNAME">
    </div>
    <div class="col">
    	<label class="label col-md-3 control-label">DATEOFBIRTH:</label>
      <input type="text" class="form-control" placeholder="yyyy-mm-dd" name="DATEOFBIRTH">
    </div>
    <div class="col">
    	<label class="label col-md-3 control-label">FATHERNAME:</label>
      <input type="text" class="form-control" placeholder=" enter your fathername" name="FATHERNAME">
    </div>
    <div class="col">
    	<label class="label col-md-3 control-label">MOTHERNAME:</label>
      <input type="text" class="form-control" placeholder="enter your mothername" name="MOTHERNAME">
    </div>
    <div class="check">
      <label class="form-check-label" for="exampleRadios1">GENDER</label><br>
    	 <input class="form-check-input" type="radio" name="GENDER" id="exampleRadios1" value="MALE">
  <label class="form-check-label" for="exampleRadios1">MALE</label><br>
  <input class="form-check-input" type="radio" name="GENDER" id="exampleRadios1" value="FEMALE">
  <label class="form-check-label" for="exampleRadios1">FEMALE
  </label>
</div>
<div class="form-check-caste">
	<label>CASTE:</label><br>
  <input class="form-check-input2" type="checkbox" value="OBC" id="defaultCheck1" name="CASTE">
  <label class="form-check-label2" for="defaultCheck1">
    OBC
  </label><br>
<input class="form-check-input2" type="checkbox" value="MBC" id="defaultCheck2" name="CASTE">
  <label class="form-check-label2" for="defaultCheck2">
    MBC
  </label>
 <br>
  <input class="form-check-input2" type="checkbox" value="SC/ST" id="defaultCheck2" name="CASTE">
  <label class="form-check-label2" for="defaultCheck2">
    SC/ST
  </label>
  <br>
  <input class="form-check-input2" type="checkbox" value="OTHERS" id="defaultCheck2" name="CASTE">
  <label class="form-check-label2" for="defaultCheck2">
    OTHERS
  </label>
</div>
<div class="form-group">
 <label class="label col-md-3 control-label">ADDRESS:</label>    
<textarea class="form-control" rows="5" id="comment" placeholder="enter your address" name="ADDRESS"></textarea>
</div>
<div class="formcheck1">
	<label>COURSEOPTION:</label><br>
  <input class="form-check-input" type="checkbox" value="6TH STD" id="defaultCheck1" name="COURSEOPTION">
  <label class="form-check-label" for="defaultCheck1">
    6TH STD
  </label><br>
<input class="form-check-input" type="checkbox" value="7TH STD" id="defaultCheck2" name="COURSEOPTION">
  <label class="form-check-label" for="defaultCheck2">
    7TH STD
  </label>
 <br>
  <input class="form-check-input" type="checkbox" value="8TH STD" id="defaultCheck2" name="COURSEOPTION">
  <label class="form-check-label" for="defaultCheck2">
    8TH STD
  </label>
  <br>
  <input class="form-check-input" type="checkbox" value="9TH STD" id="defaultCheck2" name="COURSEOPTION">
  <label class="form-check-label" for="defaultCheck2">
    9TH STD
  </label>
  <br>
<input class="form-check-input" type="checkbox" value="10TH STD" id="defaultCheck1" name="COURSEOPTION">
  <label class="form-check-label" for="defaultCheck1">
    10TH STD
  </label><br>
<input class="form-check-input" type="checkbox" value="11TH STD" id="defaultCheck2" name="COURSEOPTION">
  <label class="form-check-label" for="defaultCheck2">
    11TH STD
  </label>
 <br>
  <input class="form-check-input" type="checkbox" value="12TH STD" id="defaultCheck2" name="COURSEOPTION">
  <label class="form-check-label" for="defaultCheck2">
    12TH STD
  </label>
  <br>
  <input class="form-check-input" type="checkbox" value="NEET" id="defaultCheck2" name="COURSEOPTION">
  <label class="form-check-label" for="defaultCheck2">
    NEET
  </label><br>
  <input class="form-check-input" type="checkbox" value="JEE" id="defaultCheck2" name="COURSEOPTION">
  <label class="form-check-label" for="defaultCheck2">
    JEE
  </label>
</div>
<div class="END">
<button class="btn btn-primary" type="submit" name="submit">submit</button>
</div>
</div>
</form>
</body>
</html>