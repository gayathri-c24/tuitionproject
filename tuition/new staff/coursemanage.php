<?php
$con=mysqli_connect("localhost","root","","tuition");
if (isset($_POST["submit"])) {
  $CLASS=$_POST["CLASS"];
  $SUBJECTNAME=$_POST["SUBJECTNAME"];
  $SUBJECTAUTHOR=$_POST["SUBJECTAUTHOR"];
  $CLASSTEACHERNAME=$_POST["CLASSTEACHERNAME"];
  $coursefile=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="uploadimages/".$coursefile;
   $query="INSERT INTO course(CLASS,SUBJECTNAME,SUBJECTAUTHOR,CLASSTEACHERNAME,coursefile)VALUES('$CLASS','$SUBJECTNAME','$SUBJECTAUTHOR','$CLASSTEACHERNAME','$coursefile')";
  $result=mysqli_query($con,$query);
  if($result)
  {
    echo "inserted successfully";
  }
  else
  {
    echo "not inserted successfully";
  }
   if (move_uploaded_file($tempname, $folder))  { 
            echo "uploaded successfully"; 
        }else{ 
            echo "Failed to upload image"; 
      }  
  
  
  
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>coursemanagent</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.course
{
	margin-left: 400px;
	margin-right: 400px;
	margin-top: 50px;
}	
</style>
</head>
<body>
<div class="container-fluid">
</div>
<div class="panel heading">
<h1><center>COURSEMANGEMENT</center></h1>	
</div>	
<div class="panel-body">
<form action="" method="POST" enctype="multipart/form-data">
<div class="course">	
 <div class="row">
<div class="col">
<label class="head"><b>CLASS:</b></label>
<select class="form-control" name="CLASS" style="height: 50px;">
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
</div>
<div class="col">
<label class="head"><b>SUBJECT:</b></label>
<select class="form-control" name="SUBJECTNAME" style="height: 50px;">
<option value="">select</option>
<option value="TAMIL">TAMIL</option>
<option value="ENGLISH">ENGLISH</option>
<option value="MATHS">MATHS</option>
<option value="SCIENCE">SCIENCE</option>
<option value="SOCIAL">SOCIAL</option>
<option value="COMPUTERSCIENCE">COMPUTERSCIENCE</option>
<option value="BIO-PHYSICS">BIO-PHYSICS</option>
<option value="BIO-CHEMISTRY">BIO-CHEMISTRY</option>
<option value="BIO-ZOOLOGY">BIO-ZOOLOGY</option>
<option value="BIO-BOTANY">BIO-BOTONAY</option>
<option value="HISTORY">HISTORY</option>
<option value="ECONOMICS">ECONOMICS</option>
<option value="BUSINESS MATHS">BUSINESS MATHS</option>
<option value="COMMERCE">COMMERCE</option>
</select><br> 
    </div>
   </div> 
</div>
<div class="course">	
 <div class="row">
    <div class="col">
      <label class="head"><b>SUBJECT AUTHOR:</b></label><input type="text" class="form-control" placeholder=" ENTER YOUR SUBJECT AUTHOR" name="SUBJECTAUTHOR">
    </div>
   </div> 
</div>
<div class="course">	
 <div class="row">
    <div class="col">
      <label class="head"><b>CLASS TEACHER NAME:</b></label><input type="text" class="form-control" placeholder=" ENTER YOUR CLASS TEACHER NAME" name="CLASSTEACHERNAME">
    </div>
   </div> 
</div>
<div class="course">	
 <div class="row">
    <div class="col">
      <label class="head"><b>coursefile:</b></label><input type="file" class="form-control" name="uploadfile">
    </div>
   </div> 
</div>
<div class="course">	
 <div class="row">
    <div class="col">
     <center><input type="submit"  name="submit" class="btn btn-primary"></center>
    </div>
   </div> 
</div>
</form>	
</div>
<div class="panel-footer">
</div>
</body>
</html>