<?php
 include "../staff/nav.php";
include_once "connection.php";
 if (isset($_POST["submit"])) {
	$chk=implode(',',$_POST['chk']);
 	$SUBJECT=$_POST["SUBJECT"];
 	$MESSAGE=$_POST["MESSAGE"];
 	$qry="INSERT INTO announcement(chk,subject,message)VALUES('$chk','$SUBJECT','$MESSAGE')";
 	$query_run=mysqli_query($con,$qry);
 	if ($query_run) {
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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/admission.css">
<link rel="stylesheet" href="../css/fees.css">
<link rel="stylesheet" href="../css/student.css">
<link rel="stylesheet" href="../css/announcement.css">
</head>
<body>

<style type="text/css">
  .form-check{
    padding-left: 0 !important;
    margin-left: 30px !important;
    margin-bottom: 20px !important;   
  }
</style>
<!-- template start -->

<center>
<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Announcement</h1></center>
         </div>
     </div>
     <br>
     <div class="container-body">
        <form action="" method="POST">
          <div class="form-row">
              <div class="form-group col-md-3">
                          <select class="form-control" name="COURSEOPTION">
                            <option >--Select Course--</option>
                            <option>6th</option>
                            <option>7th</option>
                            <option>8th</option>
                            <option>9th</option>
                            <option>10th</option>
                            <option>11th</option>
                            <option>12th</option>
                          </select>
              </div>
              <div class="form-group col-md-2">
                OR
              </div>
              <div class="form-group col-md-3">
                <input type="text" class="form-control" id="inputEmail4" name="STUDENTID" placeholder="Search By Id">
              </div>
              <div class="form-group  col-md-2">
                    <center>
                      <input  type="submit"  name="search" Value="search" class="btn btn-primary" required>
                    </center>	
              </div>
          </div>
          <br>
  <div class="row">
    <div class="col-4 task">
      <form method="POST" action="">
          <div class="title-task">
            <center><h1>Task Portal</h1></center>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label" >Subject</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="SUBJECT" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label" >Message</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" name="MESSAGE" required>
              </textarea>
            </div>
          </div>
          <div class="form-group  col-md-2">
                      <center>
                        <input  type="submit"  name="submit" Value="Submit" class="btn btn-primary ">
                      </center>	
          </div>
          
      </form>
    </div>
    <div class="col-8">
    <table class="table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Student ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Course</th>
              </tr>
            </thead>
            <tbody>
            <?php
            	if (isset($_POST['search'])) {
                $STUDENTID=$_POST['STUDENTID'];
              $COURSEOPTION=$_POST['COURSEOPTION'];
              $query="SELECT * FROM students WHERE student_id='$STUDENTID' or course='$COURSEOPTION' ";
              }
              else{
                $query="SELECT * FROM students "; 
                    }
              
              $query_run=mysqli_query($con,$query) or die(mysqli_error($con));
              while ($row=mysqli_fetch_array($query_run)) {
                ?>
                <tr>
                <td>
                  <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="chk[]" value="<?php echo $row['student_id'];?>">
                  </div>
              </td>
              <!-- <td><?php echo $row['student_id'];?></td> -->
              <td><?php echo $row['first_name'];?></td>
              <td><?php echo $row['last_name'];?></td>
              <td><?php echo $row['course'];?></td>
              </tr>				

              <?php
              }
            
            ?>
            
            </tbody>
          </table>
    </div>
  </div>
        
<!-- template end -->

</body>
</html>