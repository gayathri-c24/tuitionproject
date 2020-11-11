<?php
 $msg = ""; 
if(isset($_POST['ADD']))
{
	$ID=$_POST['ID'];
	$NAME=$_POST['NAME'];
	$AGE=$_POST['AGE'];
	$SALARY=$_POST['SALARY'];
	$DATEOFBIRTH=$_POST['DATEOFBIRTH'];
	$DATEOFJOINING=$_POST['DATEOFJOINING'];
	$QUALIFICATION=$_POST['QUALIFICATION'];
	$PERFORMANCE=$_POST['PERFORMANCE'];
	$COURSEOPTION=$_POST['COURSEOPTION'];
	$image = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
     $folder = "uploadimages/".$image; 
	$con=mysqli_connect("localhost","root","","tuition");
 $query="INSERT into teacher(ID,NAME,AGE,SALARY,DATEOFBIRTH,DATEOFJOINING,QUALIFICATION,PERFORMANCE,COURSEOPTION,image)values('$ID','$NAME','$AGE','$SALARY','$DATEOFBIRTH','$DATEOFJOINING','$QUALIFICATION','$PERFORMANCE','$COURSEOPTION','$image')";
	mysqli_query($con,$query);
	 if (move_uploaded_file($tempname, $folder))  { 
            echo "Image uploaded successfully"; 
        }else{ 
            echo "Failed to upload image"; 
      } 

	 
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>staff management</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<style type="text/css">
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
.END
{
	margin-top: 10%;
	color: blue;
	margin-left: 500px;

}

.text-center
{
	
	color: blue;
	margin-left: 100px;
	background-color: orange;
	margin-bottom: 50px;
}
.form-check-input
{
	margin-left: 250px;	
	
}
.form-check-label
{
	margin-left: 300px;
	
}
.colimg
{
	margin-left: 20%;
}
</style>
</head>
<body>
		
<form class="staffform" action="" method="POST" enctype="multipart/form-data">
	<h1 class="text-center"> ADD STAFF DETAILS</h1>
	<div class="row">
    <div class="col">
    	<label class="label col-md-3 control-label">ID:</label>
      <input type="text" class="form-control" placeholder=" enter your ID" name="ID"/>
    </div>
    <div class="col">
    	<label class="label col-md-3 control-label">NAME:</label>
      <input type="text" class="form-control" placeholder="enter your name" name="NAME" value="name"/>
    </div>
   
    <div class="col">
    	<label class="label col-md-3 control-label">AGE:</label>
      <input type="text" class="form-control" placeholder="enter your age" name="AGE"/>
    </div>
    <div class="col">
    	<label class="label col-md-3 control-label">SALARY:</label>
      <input type="text" class="form-control" placeholder="enter your salary" name="SALARY"/>
    </div>
    
   <div class="col">
    	<label class="label col-md-3 control-label">DATEOFBIRTH:</label>
      <input type="text" class="form-control" placeholder="yy/mm/dd" name="DATEOFBIRTH"/>
    </div>
    <div class="col">
    	<label class="label col-md-3 control-label">DATEOFJOINING:</label>
      <input type="text" class="form-control" placeholder=" yy/mm/dd" name="DATEOFJOINING"/>
    </div>
    <div class="col">
    	<label class="label col-md-3 control-label">QUALIFICATION:</label>
      <input type="text" class="form-control" placeholder="enter your qualification" name="QUALIFICATION"/>
    </div>
     <div class="col">
    	<label class="label col-md-3 control-label">PERFORMANCE:</label>
      <input type="text" class="form-control" placeholder="enter performance" name="PERFORMANCE"/>
    </div>
   
   <div class="col-check">
  <label class="form-check-label">COURSEOPTION:</label><br>
  <input class="form-check-input" type="checkbox" value="6TH STD" id="defaultCheck1" name="COURSEOPTION"/>
  <label class="form-check-label" for="defaultCheck1">
    6TH STD
  </label><br>
<input class="form-check-input" type="checkbox" value="7TH STD" id="defaultCheck2" name="COURSEOPTION"/>
  <label class="form-check-label" for="defaultCheck2">
    7TH STD
  </label>
 <br>
  <input class="form-check-input" type="checkbox" value="8TH STD" id="defaultCheck2" name="COURSEOPTION"/>
  <label class="form-check-label" for="defaultCheck2">
    8TH STD
  </label>
  <br>
  <input class="form-check-input" type="checkbox" value="9TH STD" id="defaultCheck2" name="COURSEOPTION"/>
  <label class="form-check-label" for="defaultCheck2">
    9TH STD
  </label>
  <br>
<input class="form-check-input" type="checkbox" value="10TH STD" id="defaultCheck1" name="COURSEOPTION"/>
  <label class="form-check-label" for="defaultCheck1">
    10TH STD
  </label><br>
<input class="form-check-input" type="checkbox" value="11TH STD" id="defaultCheck2" name="COURSEOPTION"/>
  <label class="form-check-label" for="defaultCheck2">
    11TH STD
  </label>
 <br>
  <input class="form-check-input" type="checkbox" value="12TH STD" id="defaultCheck2" name="COURSEOPTION"/>
  <label class="form-check-label" for="defaultCheck2">
    12TH STD
  </label>
  <br>
  <input class="form-check-input" type="checkbox" value="NEET" id="defaultCheck2" name="COURSEOPTION"/>
  <label class="form-check-label" for="defaultCheck2">
    NEET
  </label><br>
  <input class="form-check-input" type="checkbox" value="JEE" id="defaultCheck2" name="COURSEOPTION"/>
  <label class="form-check-label" for="defaultCheck2">
    JEE
  </label>
 </div>
  <div class="colimg">
    	<label class="label col-md-3 control-label">image</label>
      <input type="file" class="form-control"  name="uploadfile" value=""/>
    </div>
 <div class="END">
<button class="btn btn-primary" type="submit" name="ADD">ADD</button>
</div>
</body>
</html>