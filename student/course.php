<?php
// include "home.php";
// $con=mysqli_connect("localhost","root","","tuition");
include "../student/nav.php";
include_once "../staff/connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>serach student course</title>
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
         <center><h1>Search Course</h1></center>
         </div>
     </div>
     <div class="container-body">
        <form action="" method="POST">
          <div class="form-row">
              <div class="form-group col-md-3">
                    <div>
                          <select class="form-control" name="CLASS">
                            <option >--Select Course--</option>
                            <option value="6TH STD">6th</option>
                            <option value="7TH STD">7th</option>
                            <option value="8TH STD">8th</option>
                            <option value="9TH STD">9th</option>
                            <option value="10TH STD">10th</option>
                            <option value="11TH STD">11th</option>
                            <option value="12TH STD">12th</option>
                            <option value="NEET">NEET</option>
                            <option value="JEE">JEE</option>
                          </select>
                      </div>

                      
              </div>
              <div class="form-group col-md-3">

                <div>
                          <select class="form-control" name="SUBJECTNAME">
                           <option value="">select subject</option>
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
              
              
              <div class="form-group  col-md-2">
                    <center>
                      <input  type="submit"  name="filter_value" Value="filter" class="btn btn-primary ">
                    </center>	
              </div>
            
          </div>
          <br>
          <!-- <!- table start-> -->
          
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">CLASS</th>
      <th scope="col">SUBJECT</th>
      <th scope="col">COURSEMATERIAL</th>
      <th scope="col">DOWNLOAD</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
  if (isset($_POST['filter_value'])) {
    $CLASS=$_POST['CLASS'];
    $SUBJECTNAME=$_POST['SUBJECTNAME'];
    $query="SELECT CLASS,SUBJECTNAME,coursefile FROM course WHERE CLASS='$CLASS' AND SUBJECTNAME='$SUBJECTNAME'";
  }
  else{
    $query="SELECT CLASS,SUBJECTNAME,coursefile FROM course";
  }
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_array($result)) {
      ?>
      <form action="" method="POST">
      <tr>
  
    <td><?php echo $row['CLASS'];?></td>
    <td><?php echo $row['SUBJECTNAME'];?></td>
    <td><?php echo $row['coursefile'];?></td>
    <td><a href="download.php?coursefile=<?php echo $row['coursefile']?>" class=" btn btn-primary">Download</a></td>
    </tr>
    </form>

    <?php
    }
  }

  ?>
  </tbody>
</table>  
</form> 
</center>
</body>
</html>