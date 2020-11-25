<?php
include "../staff/nav.php";
$con=mysqli_connect("localhost","root","","tuition_mangement");
if (isset($_POST['submit'])) {
  $CLASS=$_POST["CLASS"];
	$SUBJECT=$_POST["SUBJECT"];
	$MEETINGLINK=$_POST["MEETINGLINK"];
	$date=date("yy-m-d H:i:s");
	$reg="INSERT INTO liveclass(CLASS,SUBJECT,MEETINGLINK,date)VALUES('$CLASS','$SUBJECT','$MEETINGLINK','$date')";
	$query_run=mysqli_query($con,$reg);
	if($query_run)
	{
	echo "insert successful";
    }
    else
    {
    	echo "insert not successful";

    }
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title>liveclass</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/admission.css">
<link rel="stylesheet" href="../css/fees.css">
<link rel="stylesheet" href="../css/student.css">
</head>

<body>


<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Live Classes</h1></center>
         </div>
     </div>
     <br>

     <div class="container-body">
        <form method="POST" action="">
           <div class="form-group row " >
               <label for="inputPassword3" class="col-sm-2 col-form-label">Class</label>
                 <div class="col-sm-10">
                     <select class="form-control" name="CLASS">
                       <option >--select--</option>
                       <option value="6TH">6th</option>
                        <option value="7TH">7th</option>
                        <option value="8TH">8th</option>
                        <option value="9TH">9th</option>
                        <option value="10TH">10th</option>
                        <option value="11TH">11TH STD</option>
                        <option value="12TH">12TH STD</option>
                        <option value="NEET">NEET</option>
                        <option value="JEE">JEE</option>
                     </select>
                 </div>
           </div>
           <div class="form-group  row" >
               <label for="inputPassword3" class="col-sm-2 col-form-label">Subject</label>
                 <div class="col-sm-10">
                     <select class="form-control" name="SUBJECT">
                        <option >--select--</option>
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
                     </select>
                 </div>
           </div>
           
           <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Shedule a meeting</label>
               <div class="col-sm-10">
               <a href="https://accounts.google.com/">cilck here</a>	
               </div>
           </div>
           <div class="form-group row">
               <label for="inputPassword3" class="col-sm-2 col-form-label">Meeting Link</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputPassword3" name="MEETINGLINK">
               </div>
           </div>

           <div class="form-group row">
               <center class="col-sm-12">
                 <input  type="submit" name="submit" class="btn btn-primary">
               </center>	
           </div>
           <br>
        <form>
     </div>
     <div class="container-footer">
     </div>
   </div>
<!-- 
<div class="container">
<center><h1 style="background-color: black;color: white;">Live Classes</h1></center>	
<form action="" method="POST" class="form-group" style="border-bottom: 4px solid black;border-right: 4px solid black;">
<div class="check">
<label class="min">CLASS:</label>
<select class="form-control form-control-lg" name="CLASS">
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
</div>	
<div class="check">
<label class="head">SUBJECT:</label>
<select class="form-control form-control-lg" name="SUBJECT" style="height: 50px;">
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
<div>
<label>Schedule Meeting:</label>
<a href="https://accounts.google.com/">cilck here</a>	
</div><br>
<div>
<label>Meeting link:</label>
<input type="text" name="MEETINGLINK" class="form-control form-control-lg">	
</div><br>
<div class="check" style="margin-top:5px;margin-bottom: 10px;">
<center><input type="submit" name="submit" class="btn btn-warning" ></center>	
</div>	 -->
</form>	
</div>
</body>
</html>