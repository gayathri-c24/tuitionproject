<?php
session_start();
include_once 'connection.php';
$e=$_SESSION['email'];
//echo $_SESSION['email'];
//echo $e;
		$f_name="";
	  	$l_name="";
		$ph_no="";
		$email="";
	  	$age="";
	  	$gender="";
		$date_of_birth="";
		$date_of_joining="";
		$qualification="";
		$salary="";
		$course="";
	  	$subject="";
	  	$address="";
	  	$image="";
	  	
$query="select * from teacher where email='$e'";
$res= mysqli_query($con,$query);
//echo $query;
while($row=mysqli_fetch_array($res))
{
 $f_name=$row['f_name'];
 //echo $f_name;
  $l_name=$row['l_name'];
	$ph_no=$row['ph_no'];
	$email=$row['email'];
  $age=$row['age'];
  $gender=$row['gender'];
	$date_of_birth=$row['date_of_birth'];
	$date_of_joining=$row['date_of_joining'];
	$qualification=$row['qualification'];
	$salary=$row['salary'];
	$course=$row['course'];
  $subject=$row['subject'];
  $address=$row['address'];
  $image=$row["uploadfile"]["name"];

}
?>

<!DOCTYPE html>
<html>
<head>
<title>profile page</title>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../staff/style/profile.css" >
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
            	<div>
            		<?php
            		
                     echo $_SESSION['email'];
            		?>
            	</div>
               <div class="title">Staff details</div>
            <form action="" method="POST" enctype="multipart/form-data">
                 <div class="form-row top">
                     <div class="form-group col-md-6">
                       <label for="inputEmail4">First Name</label>
                       <input type="text" class="form-control" id="inputEmail4" name='f_name' placeholder="First Name" value="<?php echo $f_name; ?>">
                     </div>
                     <div class="form-group col-md-6">
                       <label for="inputPassword4">Last Name</label>
                       <input type="text" class="form-control" id="inputPassword4" name="l_name" placeholder="Last Name" value="<?php echo $l_name; ?>">
                     </div>
                  </div>
                  <div class="form-row">
                       <div class="form-group col-md-6">
                         <label for="inputEmail4">Phone No.</label>
                         <input type="text" class="form-control" id="inputEmail4" name="ph_no" placeholder="Phone No." value="<?php echo $ph_no; ?>">
                       </div>
                       <div class="form-group col-md-6">
                         <label for="inputPassword4">Email</label>
                         <input type="email" class="form-control" id="inputPassword4" name="email"
                          placeholder="Email" value="<?php echo $email; ?>">
                       </div>
                  </div>
                  <div class="form-row">
                 
                     <div class="form-group col-md-6">
                       <label for="inputPassword4">Age</label>
                       <input type="text" class="form-control" id="inputPassword4" name="age" placeholder="Age" <?php echo $age; ?>>
                     </div>
                     <div class="form-group col-md-6">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                                 <div class="col-sm">
                                       <label class="radio-inline ">
                                         <input type="radio" name="gender" value="Male"  <?php if ($gender=='Male'){ echo "checked";} ?> >&nbsp;Male
                                       </label>
                                       <label class="radio-inline ">
                                         <input type="radio" name="gender" value="Female"  <?php if ($gender=='Male'){ echo "checked";} ?>>&nbsp;Female
                                       </label>
                                 </div>
                     </div>
                     <!-- <div class="form-group col-md-6">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm">
                                  <label class="radio-inline ">
                                    <input type="radio" name="gender" value="male"/>&nbsp;Male
                                  </label>
                                  <label class="radio-inline ">
                                    <input type="radio" name="gender" value="Female"/>&nbsp;Female
                                  </label>
                            </div>
                          </div> -->
                 </div>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                       <label for="inputEmail4">DOB</label>
                       <input type="date" class="form-control"  name="date_of_birth" id="inputEmail4" placeholder="DOB" value="<?php echo $date_of_birth; ?>">
                     </div>
                     <div class="form-group col-md-6">
                       <label for="inputEmail4">Date of Joining</label>
                       <input type="date" class="form-control" id="inputEmail4" name="date_of_joining" placeholder="DOj" value="<?php echo $date_of_joining; ?>">
                     </div>
                </div>
                <div class="form-row">
                     <div class="form-group col-md-6">
                       <label for="inputEmail4">Qualification</label>
                       <input type="text" class="form-control" id="inputEmail4" name="qualification" placeholder="Qualification" value="<?php echo $qualification; ?>">
                     </div>
                     <div class="form-group col-md-6">
                       <label for="inputEmail4">Salary</label>
                       <input type="text" class="form-control" id="inputEmail4" name="salary" placeholder="salary" value="<?php echo $salary; ?>">
                     </div>
                 
                </div>
                <div class="form-row">
                   <div class="form-group col-md-6">
                     <label for="inputEmail4">Standard</label>
                     <div>
                              <select class="form-control" name="course">
                                <option disabled>select</option>
                                <option value="6th" <?php if ($course=='6th'){ echo "selected";} ?>>6TH STD</option>
                                <option value="7th" <?php if ($course=='7th'){ echo "selected";} ?>>7TH STD</option>
                                <option value="8th" <?php if ($course=='8th'){ echo "selected";} ?>>8TH STD</option>
                                <option value="9th" <?php if ($course=='9th'){ echo "selected";} ?>>9TH STD</option>
                                <option value="10th" <?php if ($course=='10th'){ echo "selected";} ?>>10TH STD</option>
                                <option value="11th" <?php if ($course=='11th'){ echo "selected";} ?>>11TH STD</option>
                                <option value="12th" <?php if ($course=='12th'){ echo "selected";} ?>>12TH STD</option>
                                <option value="neet" <?php if ($course=='neet'){ echo "selected";} ?>>NEET</option>
                                <option value="jee" <?php if ($course=='jee'){ echo "selected";} ?>>JEE</option>
                              </select>
                          </div>
                    </div>
                   <div class="form-group col-md-6">
                     <label for="inputPassword4">Subject</label>
                     <input type="text" class="form-control" id="inputPassword4" name="subject" placeholder="Subject" value="<?php echo $subject; ?>">
                   </div>
                 </div>
                 <div class="form-row">
                     <div class="form-group col-md-6 colimg">
                        <label class="label col-md-3 control-label">image</label>
                        <input type="file" class="form-control"  name="uploadfile" value="<?php echo $uploadfile; ?>"/>
                     </div> 
                 <!-- <div class="form-group row">
                     <label for="inputEmail3" class="col-sm-2 col-form-label">Material:</label>
                     <div class="col-sm-10">
                       <input type="file" name="uploadfile" class="form-control" id="inputEmail3">
                     </div>
                     </div> -->
                     <div class="form-group col-md-6">
                         <label for="inputPassword4">Address</label>
                         <textarea class="form-control" rows="5" id="comment" placeholder="enter your address" name="address" value="<?php echo $address; ?>"></textarea>
                     </div>
                 </div>
                  <div class="form-group row">
                      <center class="col-sm-12">
                        <input  type="submit"  name="ADD" Value="Edit Staff" 
                        class="btn btn-primary">
                      </center>	
                  </div>
              
               </form>
              </div>
            <div class="container-footer">
            </div>
          </div>

	      </div>

</body>
</html>
