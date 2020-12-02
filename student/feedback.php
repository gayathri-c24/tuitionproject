<?php
// include "home.php";
include "../student/nav.php";
include_once "../staff/connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>student feedback</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/admission.css">
<link rel="stylesheet" href="css/fees.css">
<link rel="stylesheet" href="css/student.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
">
</head>
<body>
<center>
<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Student Feedback</h1></center>
         </div>
     </div>
     <div class="container-body">
        <form action="" method="POST">
          
                
    <form>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label"> Name :</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Name" name="name" />
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Standard :</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Standard" name="standard" />
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Comments :</label>
    <div class="col-sm-6">
                <textarea class="form-control" name="comments"></textarea>
                
              </div>
  </div>
  <div class="form-actions">
              <button type="submit" class="btn btn-success" name="submit1">Submit</button>
            </div>

            <div class="alert alert-success" id="success" style="display: none;">
   <strong>Success!</strong> Submitted Successfully. </div>

</form>

              
            
          </div>
          <br>

        </form>
       
     </div>

   </div>

</center>
</body>
</html>
<?php
// $con=mysqli_connect("localhost","root","","tuition");
if(isset($_POST["submit1"]))
{ 

    mysqli_query($con,"insert into feedback values(NULL,'$_POST[name]','$_POST[standard]','$_POST[comments]')") or die(sqli_error($con));

    ?>
    <script type="text/javascript">
        
        document.getElementById("success").style.display="block";
        setTimeout(function(){
            window.location.href=window.location.href;
        },3000);
    </script>

    <?php
 } 

?>