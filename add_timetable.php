<?php
include "db/connection.php";
if (isset($_POST['submit'])) {
  $day=$_POST['day'];
$subcode=$_POST['subcode'];
$venue=$_POST['venue'];
$university=$_POST['university'];
$department=$_POST['department'];
$course=$_POST['course'];
$year=$_POST['year'];
  $query="INSERT INTO class_timetable(day,subcode,venue,university,department,course,year)VALUES('$day','$subcode','$venue','$university','$department','$course','$year')" or die(mysqli_error($con));
  $result=mysqli_query($con,$query);
  if ($result) {
  echo "insert successfull";
  header("location:check.php");
  }
  else
  {
    echo "not inserted successfull";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>ums-timetable</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
  <!-- body starts here -->
<form method="POST" action="">
  <!-- form starts here -->
<div class="container">
  
<!-- <div class="form-group">
    <label for="exampleInputEmail1">Day*</label>
    <select class="form-control" name="day">
    <option value="default">--select--</option>	
   	<option value="sunday">sunday</option>	
    <option value="monday">monday</option>	
    <option value="tuesday">tuesday</option>	
    <option value="wednesday">wednesday</option>	
    <option value="thursday">thursday</option>	
    <option value="friday">friday</option>	
    <option value="saturday">saturday</option>	
 </select>
 </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Subject Code*</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="subcode">
  </div -->>
  <div class="form-group">
    <label for="exampleInputPassword1">venue*</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="venue">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">University*</label>
    <select name="university" class="form-control" required autofocus>
      <option value="default">--select--</option>
    	 <!-- <option value="<?php echo $university;?>"><?php echo $university;?></option>  -->
    					<?php
                         $query=mysqli_query($con,"SELECT * From university");
                         while($row=mysqli_fetch_array($query)){ 
                           echo "<option value='".$row['name']."'>".$row['name']."</option>";
                         }
                         ?>
 </select>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Student_AddModal" title="Add New University">
  <i class="fas fa-plus-circle"></i>
  </button>
   
 </div>
 <div class="form-group">
    <label for="exampleInputPassword1">Department*</label>
    <select name="department" class="form-control" required autofocus>
      <option value="default">--select--</option>
       <!-- <option value="<?php echo $university;?>"><?php echo $university;?></option> -->
              <?php
                         $query=mysqli_query($con,"SELECT * From department");
                         while($row=mysqli_fetch_array($query)){ 
                           echo "<option value='".$row['name']."'>".$row['name']."</option>";
                         }
                         ?>
 </select>
 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Studen_AddModal" title="Add New Department">
  <i class="fas fa-plus-circle"></i>
  </button>
 </div>
 <div class="form-group">
    <label for="exampleInputPassword1">Course*</label>
    <select name="course" class="form-control" required autofocus>
      <option value="default">--select--</option>
       <!-- <option value="<?php echo $university;?>"><?php echo $university;?></option>  -->
              <?php
                         $query=mysqli_query($con,"SELECT * From course");
                         while($row=mysqli_fetch_array($query)){ 
                           echo "<option value='".$row['name']."'>".$row['name']."</option>";
                         }
                         ?>
 </select>
 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Stude_AddModal" title="Add New Course">
  <i class="fas fa-plus-circle"></i>
  </button>
 </div>
 <div class="form-group">
  <label>Year*</label>
   <select name="year" class="form-control">
     <option value="default">--select--</option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
     <option value="6">6</option>
   </select>
 </div>
<div class="form-btn">
<button class="btn btn-warning" name="submit">Next</button>
</div> 
</div>
</form>
<!-- Modal for university starts here -->
 <div class="modal fade" id="Student_AddModal" tabindex="-1" aria-labelledby="Student AddModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Student AddModalLabel">Add University Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="insertcode.php" method="POST" enctype="multipart-form-data">
           <div class="modal-body">
               <div class="form-group">
                   <label>University name</label>
                   <input type="text" name="uname" class="form-control" placeholder="Enter university name">
               </div>

               <div class="form-group">
                   <input type="submit" name="submit" class="form-control">
               </div>
               </div>
        </form>
    </div>
  </div>
</div>


<!-- modal for university ends here -->

<!-- modal for department starts here -->
<div class="modal fade" id="Studen_AddModal" tabindex="-1" aria-labelledby="Student AddModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Student AddModalLabel">Add Department Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="insertcode.php" method="POST" enctype="multipart-form-data">
           <div class="modal-body">
               <div class="form-group">
                   <label>Deparment Name</label>
                   <input type="text" name="dname" class="form-control" placeholder="Enter department name">
               </div>

               <div class="form-group">
                   <input type="submit" name=submit class="form-control">
               </div>
              </div>
        </form>
    </div>
  </div>
</div>

<!-- modal for department ends here -->
<!-- modal for course starts here  -->
<div class="modal fade" id="Stude_AddModal" tabindex="-1" aria-labelledby="Student AddModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Student AddModalLabel">Add Course Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="insertcode.php" method="POST" enctype="multipart-form-data" class="form-control">
           <div class="modal-body">
               <div class="form-group">
                   <label>Course name</label>
                   <input type="text" name="cname" class="form-control" placeholder="Enter Course name">
               </div>

               <div class="form-last">
                   <input type="submit" name="submit" class="form-control">
               </div>
          </form>
    </div>
  </div>
</div>
<!-- modal course ends here -->
<script>
      function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }
    </script>
</body>
</html>
 