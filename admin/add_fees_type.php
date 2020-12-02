<?php
include "../admin/nav.php";
include "../staff/connection.php";
if (isset($_POST['submit'])) {
  $fees_type=$_POST['fees_type'];
  $amount=$_POST['paid_amount'];
  $course=$_POST['COURSEOPTION'];
  $subject=$_POST['SUBJECT'];
	$query="INSERT INTO fees_type(fees_type,amount,course,subject)
  VALUES('$fees_type','$amount','$course','$subject')" or die(mysqli_error($con));
	$result=mysqli_query($con,$query);
	if ($result) {
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
	<title>add fee</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../admin/css/fees.css">

<link rel="stylesheet" href="../admin/css/student.css">
</head>
<body>

    
<h2>Shine Tuition center</h2>
     
    <div class="container">
     
      <div class="container-head">
          <div class="title">
          <center><h1>Fees Management</h1></center>
          </div>
      </div>
      <br>
      <div class="container-body">
         <form method="POST" action="">
         <div class="form-group row" >
                <label for="inputPassword3" class="col-sm-2 col-form-label">Fees Type</label>
                <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputPassword4" name="fees_type" placeholder="Fees Type">
                </div>
            </div>
            <div class="form-group row ">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-10">
                  <input type="text" name="paid_amount" class="form-control" placeholder="Amount" id="inputPassword3">
                </div>
            </div>
            
            <div class="form-group row">
             <label for="inputEmail4" class="col-sm-2 col-form-label">Standard</label>
             <div class="col-sm-10">
                      <select class="form-control" name="COURSEOPTION">
                        <option disabled>select</option>
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
           <div class="form-group row ">
             <label for="inputPassword4" class="col-sm-2 col-form-label">Subject</label>
             <div class="col-sm-10">
                 <input type="text" class="form-control" id="inputPassword4" name="SUBJECT" placeholder="Subject">
              </div>
           </div>
            <div class="form-group row">
                <center class="col-sm-12">
                  <input  type="submit" name="submit" class="btn btn-primary">
                </center>	
            </div>
         <form>

      </div>
      <div class="container-footer">
      </div>
    </div>

    <div class="container">
     <div class="container-body">
        <form action="" method="POST">
          <br>
          <!-- table start -->
          
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Fees ID</th>
                <th scope="col">Fees_type</th>
                <th scope="col">Amount</th>
                <th scope="col">Course</th>
                <th scope="col">Subject</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php
	$con=mysqli_connect("localhost","root","","tution_management");
    
    
  
    $query="SELECT * FROM fees_type "; 
		$query_run=mysqli_query($con,$query) or die(mysqli_error($con));
		while ($row=mysqli_fetch_array($query_run)) {
			?>
			<tr>
    <td><?php echo $row['id'];?></td> 
		<td><?php echo $row['fees_type'];?></td>
		<td><?php echo $row['amount'];?></td>
    <td><?php echo $row['course'];?></td>
    <td><?php echo $row['subject'];?></td>
		<td><a href="edit_fees.php?id=<?php echo $row['id']; ?>" class="edit"> <i class="fa fa-pencil "></i>&nbsp;Edit</a></td>
		<td><a href="delete_fees.php?id=<?php echo $row['id']; ?>" class="delete"> <i class="fa fa-trash "></i>&nbsp;Delete</a></td>
		
		</tr>				

		<?php
		}
	
	?>
            
            </tbody>
          </table>
          <!-- table end -->
        <form>
     </div>

   </div>
</body>
</html>