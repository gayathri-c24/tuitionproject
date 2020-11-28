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
</head>
<body>

<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1> Attendance Dates</h1></center>
         </div>
     </div>
     <br>

     <div class="container-body">
     <div class="col-sm-1 back">
            <div class="form-group row">
               <center class="col-sm-12">
                 <input  type="submit" name="back" value="Back" class="btn btn-primary btn1">
               </center>	
           </div>
    </div>
     <form action="" method="POST">
<table class="table table-striped">
<thead style="background-color: #013243;color: white;">	
<tr>
<th>STUDENTID</th>
<th>NAME</th>
<th>DATE</th>
<th>COURSEOPTION</th>
<th>ATTENDANCE_STATUS</th>
</tr>
</thead>
<?php
include "../admin/admin_dashboard.php";
include_once "connection.php";
$query="SELECT STUDENTID,NAME,date,COURSEOPTION,attendence_status FROM student_attendance";
$result=mysqli_query($con,$query);
$counter=0;
while ($row=mysqli_fetch_array($result)) {
?>

<tr>
<td><?php echo $row['STUDENTID'];?></td>
<td><?php echo $row['NAME'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['COURSEOPTION'];?></td>
<td ><?php
echo $row['attendence_status'];?></td>
<form action="" method="POST">
<input type="hidden" name="date" value="<?php echo $row['date'];?>">
</form>	
</td>
</tr>
<?php
}
?>
</table>
</form>
     </div>
     <div class="container-footer">
     </div>
   </div>
</body>
</html>