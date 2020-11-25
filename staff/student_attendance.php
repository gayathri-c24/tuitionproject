<?php
$con=mysqli_connect("localhost","root","","tuition_mangement");
include "../staff/nav.php";
if (isset($_POST['submit'])) {
		foreach($_POST['attendence_status'] as $id=>$attendence_status)
		{
		$STUDENTID=$_POST['student_id'][$id];
		$NAME=$_POST['first_name'][$id];
		$course=$_POST['course'][$id];
		$date=date("yy-m-d H:i:s");
		$result=mysqli_query($con,"INSERT INTO student_attendance(STUDENTID,NAME,COURSEOPTION,attendence_status,date)VALUES('$STUDENTID','$NAME','$course','$attendence_status','$date')");
		if ($result) {
			echo "inserted successfuly";
		}
		else
		{
			echo "not inserted successfuly";
		}
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

<!-- <style type="text/css">
	table {
  border-bottom: 1px solid black;
  border-collapse: collapse;
}
</style> -->
</head>
<body>

<div class="container">
     
     <div class="container-head">
         <div class="title">
         <center><h1>Student Attendance</h1></center>
         </div>
     </div>
     <br>

     <div class="container-body">
    <form action="" method="POST">
       
  <div class="row">
    <div class="col-sm-1 back">
            <div class="form-group row">
               <center class="col-sm-12">
                 <input  type="submit" name="view" value="View" class="btn btn-primary btn1">
               </center>	
           </div>
    </div>&nbsp; &nbsp;
    <div class="col-sm-2 back">
            <div class="form-group row">
               <center class="col-sm-12">
                 <input  type="submit" name="back" value="Back" class="btn btn-primary btn1">
               </center>	
           </div>
    </div>
    <div class="col-sm-6">
            <div class="form-group row " >
                      <!-- <label for="inputPassword3" class="col-sm-2 col-form-label">Class</label> -->
                 <div class="col-sm-10">
                     <select class="form-control" name="course">
                       <option >--Select by Class--</option>
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
    </div>
    <div class="col-sm-2">
         <div class="form-group row">
               <center class="col-sm-12">
               <input type="submit" name="filter_value" class="btn btn-primary" value="filter">
               </center>	
           </div>
    </div>
  </div>
           <table class="table table-striped">
		<h3><div class="text-center">Date:<?php echo date("yy-m-d");?></div></h3>
		<thead style="background-color: #013243;color: white;">
			<tr>
			<th>ID</th>
			<th>NAME</th>	
			<th>COURSEOPTION</th>
			<th>ATTENDENCE</th>
			
			</tr>

		</thead>

		<tbody>
			<?php
			if (isset($_POST['filter_value'])) {
				$course=$_POST['course'];
				$query="SELECT * FROM students WHERE course='$course'";
				$result=mysqli_query($con,$query);
				$counter=0;
				if (mysqli_num_rows($result)>0) {
				while ($row=mysqli_fetch_array($result)) {
					?>
					<tr>
					<td><?php echo $row['student_id'];?>
					<input type="hidden" name="student_id[]" value="<?php echo $row['student_id'];?>">	
					</td>
					<td><?php echo $row['first_name'];?>
					<input type="hidden" name="first_name[]" value="<?php echo $row['first_name'];?>">	
					</td>
					<td><?php echo $row['course'];?>
					<input type="hidden" name="course[]" value="<?php echo $row['course'];?>">
					</td>
				<td><input required type="radio" name="attendence_status[<?php echo $counter; ?>]" value="present">present
				<input required name="attendence_status[<?php echo $counter; ?>]" value="absent" type="radio">absent</td>
				</tr>
				<?php
				 $counter++;
				}
				}

				else {
						
						echo "no record found";
					}	
				
				}
			?>

		
</table>
<input type="submit" value="Take attendence" name="submit" class="btn btn-warning">
</form>
</div>
     <div class="container-footer">
     </div>
   </div>
</body>
</html>