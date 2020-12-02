<?php
include_once "../admin/nav.php";
include "../staff/connection.php";
if (isset($_POST['submit'])) {
  // $STUDENTID=$_POST["STUDENTID"];
  $first_name=$_POST["f_name"];
  $last_name=$_POST["l_name"];
	$ph_no=$_POST["ph_no"];
	$email=$_POST["email"];
  $dob=$_POST["DOB"];
  $gender=$_POST["gender"];
  $course=$_POST["course"];
  $subject=$_POST["subject"];
  $caste=$_POST["caste"];
	$school=$_POST["school_name"];
	$fa_name=$_POST["fa_name"]; 
	$ma_name=$_POST["ma_name"];
  $parent_no=$_POST["parent_no"];
	$address=$_POST["address"];
  $coursefile=$_FILES["uploadfile"]["name"];
  $tempname=$_FILES["uploadfile"]["tmp_name"];
  $folder="../staff/uploadimages/".$coursefile;
	$reg="INSERT INTO students(first_name,last_name,ph_no,email,dob,gender,course,subject,caste,school,father_name,mather_name,parent_no,address,photo)
  VALUES('$first_name','$last_name','$ph_no','$email','$dob','$gender','$course','$subject','$caste','$school','$fa_name','$ma_name','$parent_no','$address','$coursefile')";
  //echo $reg;
	$query_run=mysqli_query($con,$reg) or die(mysqli_error($con));
	if($query_run)
	{
  echo '<script>alert("ADMISSION SUCCESSFUL")</script>';
  header('Location:../admin/fees_structure.php');
    } 
    else
    {
      header('Location:../admin/admission.php');
    	echo '<script>alert("ADMISSION  NOT SUCCESSFUL")</script>';

    }
     $file=move_uploaded_file($tempname, $folder);
    
    // echo $file."<br>";
      if ($file )  { 
            echo "uploaded successfully"; 
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

</head>
<body>
  
<h2>Shine Tuition center</h2>
     
     <div class="container">
      
       <div class="container-head">
           <div class="title">
           <center><h1>Admission</h1></center>
           </div>
       </div>
     
       <div class="container-body">
          <form action=" " method="POST" enctype="multipart/form-data">
          <div class="title">Student details</div>
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
              <label for="inputEmail4">DOB</label>
              <input type="date" class="form-control" name='DOB' id="inputEmail4" placeholder="DOB">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                   <div class="col-sm">
                   <input type="radio" name="gender" value="male">
                    <label class="radio-inline ">male</label>
                    <input type="radio" name="gender" value="female">  
                    <label class="radio-inline ">female</label>    
            </div>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Standard</label>
               <div>
                       <select class="form-control" name="course" id="course" required autofocus>
                        <option >select</option>
                         <option>6th</option>
                         <option>7th</option>
                         <option>8th</option>
                         <option>9th</option>
                         <option>10th</option>
                         <option>11th</option>
                         <option>12th</option>  
                          <?php
                         $query=mysqli_query($con,"SELECT * From classes");
                         while($row=mysqli_fetch_array($query)){
                           echo "<option value='".$row['class']."'>".$row['class']."</option>";
                         }
                         ?> 
                       </select>
                   </div>

                   <!-- <div class="col-sm-10">
                       <select class="form-control" name="course" id="course" required autofocus>
                         <option >select</option>
                         <option>6th</option>
                         <option>7th</option>
                         <option>8th</option>
                         <option>9th</option>
                         <option>10th</option>
                         <option>11th</option>
                         <option>12th</option> 
                       <?php
                         $query=mysqli_query($con,"SELECT * From classes");
                         while($row=mysqli_fetch_array($query)){
                           echo "<option value='".$row['class']."'>".$row['class']."</option>";
                         }
                         ?>
                       </select>
                   </div> -->
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Subject</label>
              <div>
                       <select class="form-control" name="subject" id="subject">
                         <option >--Select Subject--</option>
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
            
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Caste</label>
              <div>
                       <select class="form-control" name="caste">
                         <option>--Select--</option>
                         <option>BC</option>
                         <option>MBC</option>
                         <option>SC/ST</option>
                         <option>others</option>
                       </select>
                   </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">School Name</label>
              <input type="text" class="form-control" id="inputPassword4" name="school_name" placeholder="School Name">
            </div>
         </div>
         <br>
         <div class="title">Personal details</div>
          <div class="form-row top">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Father's Name</label>
              <input type="text" class="form-control" id="inputEmail4" name="fa_name" placeholder="Father's Name">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Mather's Name</label>
              <input type="text" class="form-control" id="inputPassword4" name="ma_name" placeholder="Mather's Name">
            </div>
         </div>
    
         <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPassword4">Parents No.</label>
              <input type="text" class="form-control" id="inputPassword4" name="parent_no" placeholder="Parents No.">
            </div>
            
            <div class="form-group col-md-6">
              <label for="inputPassword4">Address</label>
              <textarea class="form-control" rows="5" id="comment" placeholder="enter your address" name="address"></textarea>
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
                        <input type="submit" id="next" value="Next" name="submit" class="btn btn-warning">
                      </center>	
             </div>
          <form>
       </div>
       <div class="container-footer">
       </div>
     </div>
 
  

<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script language="javascript" type="text/javascript">
$(document).ready(function(){
  // alert("hello");
  $("#course").change(function(){
    // alert("hello");
    var course = $(this).val();
    alert(course);
    $.ajax({
      url: 'get_subject_ajax.php',
      type: 'POST',
      data: 'course='+course,
      success: function(data){
        var subject = $.parseJSON(data);
        $('#subject').html(subject);
      }
    });
  });
  $("#subject").change(function(){
  //  alert("hello");
    var subject = $(this).val();
    var course = $('#course').val();
  });
});
</script>
</body>
</html>
