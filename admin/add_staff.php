<?php
include "../admin/nav.php";
include "../staff/connection.php";
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
	<title>shine-admission</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../admin/css/admission.css">
<link rel="stylesheet" href="../admin/css/fees.css">
<link rel="stylesheet" href="../admin/css/staff.css">
</head>
<body>

 
<div class="container">
      
      <div class="container-head">
          <div class="title">
          <center><h1>Add Staff details</h1></center>
          </div>
      </div>
    
      <div class="container-body">
         <form method="POST" action="">
         <div class="title row">Staff details
            <div class="form-group row col-sm-10">
                <a href="view_staff.php" class="staff btn btn-primary">View Staffs</a>
            </div>
         </div>
         
         <div class="form-row top">
           <div class="form-group col-md-6">
             <label for="inputEmail4">First Name</label>
             <input type="text" class="form-control" id="inputEmail4" name='f_name' placeholder="First Name">
           </div>
           <div class="form-group col-md-6">
             <label for="inputPassword4">Last Name</label>
             <input type="text" class="form-control" id="inputPassword4" name="l_name" placeholder="Last Name">
           </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputEmail4">Phone No.</label>
             <input type="text" class="form-control" id="inputEmail4" name="ph_no" placeholder="Phone No.">
           </div>
           <div class="form-group col-md-6">
             <label for="inputPassword4">Email</label>
             <input type="email" class="form-control" id="inputPassword4" name="email" placeholder="Email">
           </div>
        </div>
        <div class="form-row">
           
           <div class="form-group col-md-6">
             <label for="inputPassword4">Age</label>
             <input type="email" class="form-control" id="inputPassword4" name="Age" placeholder="Age">
           </div>
           <div class="form-group col-md-6">
           <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                  <div class="col-sm">
                        <label class="radio-inline ">
                          <input type="radio" name="gender">&nbsp;Male
                        </label>
                        <label class="radio-inline ">
                          <input type="radio" name="gender">&nbsp;Female
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
             <label for="inputEmail4">Date of Joining</label>
             <input type="date" class="form-control" id="inputEmail4" name="DATEOFJOINING" placeholder="DOj">
           </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputEmail4">Qualification</label>
             <input type="text" class="form-control" id="inputEmail4" name="QUALIFICATION" placeholder="Qualification">
           </div>
           <div class="form-group col-md-6">
             <label for="inputEmail4">Salary</label>
             <input type="text" class="form-control" id="inputEmail4" name="SALARY" placeholder="salary">
           </div>
           
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputEmail4">Standard</label>
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
             <input type="email" class="form-control" id="inputPassword4" name="SUBJECT" placeholder="Subject">
           </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-6 colimg">
            <label class="label col-md-3 control-label">image</label>
            <input type="file" class="form-control"  name="uploadfile" value=""/>
           </div>
           <div class="form-group col-md-6">
             <label for="inputPassword4">Address</label>
             <textarea class="form-control" rows="5" id="comment" placeholder="enter your address" name="address"></textarea>
           </div>
        </div>
            <div class="form-group row">
                <center class="col-sm-12">
                  <input  type="submit"  name="ADD" Value="Add Staff" class="btn btn-primary">
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