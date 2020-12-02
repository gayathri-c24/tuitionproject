<?php
// include "home.php";
include "../student/nav.php";
include_once "../staff/connection.php";
// $con=mysqli_connect("localhost","root","","tuition");
if (isset($_POST['submit'])) {
  // $STUDENTID=$_POST["STUDENTID"];
  $NAME=$_POST["NAME"];
  $SCHOOLNAME=$_POST["SCHOOLNAME"];
  $PHONENUMBER=$_POST["PHONENUMBER"];
  $EMAILID=$_POST["EMAILID"];
  $AGE=$_POST["AGE"];
  $DATEOFBIRTH=$_POST["DATEOFBIRTH"];
  $FATHERNAME=$_POST["FATHERNAME"];
  $MOTHERNAME=$_POST["MOTHERNAME"];
  $GENDER=$_POST["GENDER"];
  $CASTE=$_POST["CASTE"];
  $ADDRESS=$_POST["ADDRESS"];
  $COURSEOPTION=$_POST["COURSEOPTION"];
   $coursefile=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="../staff/uploadimages/".$coursefile;
  $reg="INSERT INTO front(NAME,PHONENUMBER,EMAILID,AGE,SCHOOLNAME,DATEOFBIRTH,FATHERNAME,MOTHERNAME,GENDER,CASTE,ADDRESS,COURSEOPTION)VALUES('$NAME','$PHONENUMBER','$EMAILID','$AGE','$SCHOOLNAME','$DATEOFBIRTH','$FATHERNAME','$MOTHERNAME','$GENDER','$CASTE','$ADDRESS','$COURSEOPTION')";
  
  $query_run=mysqli_query($con,$reg) or die(mysqli_error($con));
  echo $query_run;
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
	<title>shine-admission</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/admission.css">
<link rel="stylesheet" href="css/fees.css">

</head>
<body>

 
<div class="container">
      
      <div class="container-head">
          <div class="title">
          <center><h1>Add Student details</h1></center>
          </div>
      </div>
    
      <div class="container-body">
         <form method="POST" action="">
         <div class="title">Student details</div>
         <div class="form-row top">
           <div class="form-group col-md-6">
             <label for="inputEmail4">Name</label>
             <input type="text" class="form-control" id="inputEmail4" name='NAME' placeholder=" Name">
           </div>
           <div class="form-group col-md-6">
             <label for="inputEmail4">SCHOOLNAME</label>
             <input type="text" class="form-control" id="inputEmail4" name='SCHOOLNAME' placeholder=" Name">
           </div>
           
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputEmail4">Phone No.</label>
             <input type="text" class="form-control" id="inputEmail4"
              name="PHONENUMBER" placeholder="PHONENUMBER">
           </div>
           <div class="form-group col-md-6">
             <label for="inputPassword4">Email</label>
             <input type="email" class="form-control" id="inputPassword4" name="EMAILID" placeholder="Email">
           </div>
        </div>
        <div class="form-row">
           
           <div class="form-group col-md-6">
             <label for="inputPassword4">Age</label>
             <input type="text" class="form-control" id="inputPassword4" name="AGE" placeholder="Age">
           </div>
           <div class="form-group col-md-6">
           <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                  <div class="col-sm">
                        <label class="radio-inline ">
                          <input type="radio" name="GENDER">&nbsp;Male
                        </label>
                        <label class="radio-inline ">
                          <input type="radio" name="GENDER">&nbsp;Female
                        </label>
                  </div>
           </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputEmail4">DOB</label>
             <input type="date" class="form-control"  name="DATEOFBIRTH" id="inputEmail4" placeholder="DOB">
           </div>
           <div class="form-group col-md-6">
             <label for="inputEmail4">CASTE</label>
             <div>
                      <select class="form-control" name="CASTE">
                        <option disabled>select</option>
                        <option>OBC</option>
                        <option>MBC</option>
                        <option>SC/ST</option>
                        <option>BC</option>
                        
                      </select>
                  </div>
           </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputEmail4">FatherName</label>
             <input type="text" class="form-control" id="inputEmail4" name="FATHERNAME" placeholder="FATHERNAME">
           </div>
           <div class="form-group col-md-6">
             <label for="inputEmail4">MotherName</label>
             <input type="text" class="form-control" id="inputEmail4" name="MOTHERNAME" placeholder="MOTHERNAME">
           </div>
           
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputEmail4">COURSEOPTION</label>
             <div>
                      <select class="form-control" name="COURSEOPTION">
                        <option disabled>select</option>
                        <option>6th</option>
                        <option>7th</option>
                        <option>8th</option>
                        <option>9th</option>
                        <option>10th</option>
                        <option>11th</option>
                        <option>12th</option>
                      </select>
                  </div>
           </div>
           <div class="form-group col-md-6">
             <label for="inputPassword4">Subject</label>
             <input type="text" class="form-control" id="inputPassword4" name="SUBJECT" placeholder="Subject">
           </div>
        </div>
        <div class="form-row">
           <!-- <div class="form-group col-md-6 colimg">
            <label class="label col-md-3 control-label">image</label>
            <input type="file" class="form-control"  name="uploadfile" value=""/>
           </div> -->
           <div class="form-group col-md-6">
             <label for="inputPassword4">Address</label>
             <textarea class="form-control" rows="5" id="comment" placeholder="enter your address" name="ADDRESS"></textarea>
           </div>
            <div class="form-group col-md-6">
               <label for="inputPassword3" class="col-sm-2 col-form-label">Photo</label>
               <div class="col-sm-10">
                 <input type="file"  class="form-control" id="inputPassword3" name="uploadfile">
               </div>
           </div> 
        </div>
            <div class="form-group row">
                <center class="col-sm-12">
                  <input  type="submit"  name="submit" Value="Add Student" class="btn btn-primary">
                </center>	
            </div>
         <form>
      </div>
      <div class="container-footer">
      </div>
    </div>

	</div>
</body>
</html>