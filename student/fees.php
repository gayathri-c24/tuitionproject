<?php
// include "home.php";
include "../student/nav.php";
include_once "../staff/connection.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>serach student details</title>
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
         <center><h1>Student Fees</h1></center>
         </div>
     </div>
     <div class="container-body">
        <form action="" method="POST">
         <div class="form-row">
              
                
              <div class="form-group col-md-3">
                <input type="text" class="form-control"  name="student_id" placeholder="Search">
              </div>
              <div class="form-group  col-md-2">
                    <center>
                      <input  type="submit"  name="filter_value" Value="filter" class="btn btn-primary ">
                    </center> 
              </div>
            
          </div> 
          <br>
          <!-- table start -->
          
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">STUDENTID</th>
                <th scope="col">NAME</th>
                <th scope="col">COURSEOPTION</th>
                <th scope="col">FEE STATUS</th>
              </tr>
            </thead>
            <tbody>
             <?php
      // $con=mysqli_connect("localhost","root","","tuition");
  if (isset($_POST['filter_value'])) {
    $value=$_POST["student_id"];
    $query="SELECT fee.student_id, students.first_name,students.course,fee.FEESTATUS
FROM fee
INNER JOIN students ON fee.student_id=students.student_id WHERE fee.student_id='$value'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_array($result)) {
      ?>
      <form action="" method="POST">
    
    <td><?php echo $row['student_id'];?></td>
    <td><?php echo $row['first_name'];?></td>
    <td><?php echo $row['course'];?></td>
    <td><?php echo $row['FEESTATUS'];?></td>
    

    </tr>
    </form>

    <?php
    }
  }
  else
  {
    echo "no record found";

  }
}
  ?>
  
            </tbody>
          </table>
          <!-- table end -->
        </form>
     </div>

   </div>

</center>
</body>
</html>