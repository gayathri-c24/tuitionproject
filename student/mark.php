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
         <center><h1>Search Student</h1></center>
         </div>
     </div>
     <div class="container-body">
        <form action="" method="POST">
          <div class="form-row">
              <!-- <div class="form-group col-md-3">
                    <div>
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
              </div>
              <div class="form-group col-md-2">
                OR
              </div> -->
                
              <div class="form-group col-md-3">
                <input type="text" class="form-control"  name="id" placeholder="Search By Id" >
              </div>
              <div class="form-group  col-md-2">
                    <center>
                      <input  type="submit"  name="search" Value="search by id" class="btn btn-primary ">
                    </center>	
              </div>
            
          </div>
          <br>
          <!-- table start -->
          
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Test</th>
                <th scope="col">Tamil</th>
                <th scope="col">English</th>
                <th scope="col">Maths</th>
                <th scope="col">Science</th>
                <th scope="col">Social</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
              // $con=mysqli_connect("localhost","root","","tuition");
                if(isset($_POST['search']))
                {
                    $id = $_POST['id'];
                    $res = mysqli_query($con,"select * from stud where id='$id' ");
                    //$query_run = mysqli_query($conn,$query);

                    while ($row = mysqli_fetch_array($res))
                     {
                        ?>
                        <tr>
                            <td> <?php echo $row['test']; ?></td>
                            <td> <?php echo $row['tamil']; ?></td>
                            <td> <?php echo $row['english']; ?></td>
                            <td> <?php echo $row['maths']; ?></td>
                            <td> <?php echo $row['science']; ?></td>
                            <td> <?php echo $row['social']; ?></td>
                        </tr>


                        <?php

                    }
                                    }
                                    ?>
                   
            </tbody>
          </table>
          <!-- table end -->
        <form>
     </div>

   </div>

</center>
</body>
</html>