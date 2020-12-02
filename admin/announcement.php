<?php
include "../admin/nav.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Announcement!</title>
	
  </head>
  
  <body>
  <div class="container">
            <span class="border border-secondary">
            <nav class="navbar navbar-light bg-light justify-content-between">
              <a class="navbar-brand">Announcement</a>
              <form class="form-inline" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
              </form>
            </nav>
          <form action="" method="post">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Department</label>
              </div>
              <select class="custom-select" name="Dept" id="inputGroupSelect01">
                <option selected>choose</option>
                <option value="CSE">CSE</option>
                <option value="IT">IT</option>
                <option value="ECE">ECE</option>
              </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Year</label>
              </div>
              <select class="custom-select" name="Year" id="inputGroupSelect01">
                <option selected>choose</option>
                <option value="1st">1</option>
                <option value="2yr">2</option>
                <option value="3rd">3</option>
              <option value="4th">4</option>
              
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Section</label>
              </div>
              <select class="custom-select" name="section" id="inputGroupSelect01">
                <option selected>choose</option>
                <option value="a">a</option>
                <option value="b">b</option>
                <option value="c">c</option>
              <option value="d">d</option>
                
                  </select>
          </div>
                    
            <input class="btn btn-primary text-center" name="filter" type="submit" value="Submit">
            
            <br/><br/>
   
            <form method="post"  id="comment_form">
            <div class="modal-body row">
              <div class="col-md-5">             
                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">TASK portal</h4><br/>
                    Please upload your given task here
                    <br>
                      <br/> 
                    <div class="file-upload-wrapper ">
                      <label for="" class="col-md-3">Resource:</label>
                    <input type="file" id="input-file-now" class="file-upload col-md-8" />
                            </div>                    
                    <div class="form-group">
                      <label>Enter Subject</label>
                      <input type="text" name="subject" id="subject" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Enter Comment</label>
                      <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <!-- <input type="submit" name="post" id="post" class="btn btn-info" value="Post" /> -->
                      <button type="submit" name="anno" class="btn btn-info"> Post</button>
                    </div>
                       
                   </div>
              </div>
              


                    <div class="col-md-6">  
                      <div class="panel-body"> 
                          <div class=" text-center">
                              <table class="table" style="border: 1px solid #ddd !important;">
                              <thead class="thead-dark">
                                  <tr>
                                  <th >#</th>
                                  <th >S.No</th>
                                    <th >Department ID</th>
                                    <th >Roll no.</th>
                                    <th >Name</th>
                                    <th >Department</th>
                                    <th >Year</th>
                                    <!-- <th scope="col">Section</th>  -->
                                                </tr>
                              </thead>

                            <tbody>

              <?php 
            // if(isset($_POST)){
            $servername = "localhost";
            $database = "tution_management";
            $username = "root";
            $password = "";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
            }
            // else{
            //   echo "Connection successfull" ; 
            // }

              if(isset($_POST)){ 

              if(isset($_POST['filter'])){
                  $Dept = mysqli_real_escape_string($conn, $_POST['Dept']);
                  $Year= mysqli_real_escape_string($conn, $_POST['Year']);
                $query="select s_id,Rollno,Dept,First_Name,Year,dept_id from student_details where Dept='$Dept' and Year='$Year'";
              $result=mysqli_query($conn,$query); 
              $sr=1;
              while($show=mysqli_fetch_assoc($result)){
              // $result=$conn->query($query);
              // while($show=$result->fetch_assoc()){
              ?> 
              
              
                <tr>
                  <td >
                  <div class="form-check">
                  <form action="" method="post">
                  <input class="form-check-input" type="checkbox" name="annonce[]" value="<?php echo $show['s_id'];?>" id="defaultCheck1">
                </div>
                  </td>
                  <td><?php  echo $sr;?></td>
                  <td><?php  echo $show['dept_id'];?></td>
                  <td><?php  echo $show['Rollno'];?></td>
                  <td><?php  echo $show['First_Name'];?></td>    
                  <td><?php  echo $show['Dept'];?></td>
                  <td><?php  echo $show['Year'];?></td> 
                </tr>
              


                 
            <?php $sr++; }} }
            
            
            
             
          if(isset($_POST["anno"]))
          {
    
          $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
          $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
          $numberOfCheckbox=count($_POST['annonce']);
          // echo $numberOfCheckbox;
          $i=0;
          while($i<$numberOfCheckbox){
              $selectedcheck=$_POST['annonce'][$i];
              $query = "INSERT INTO comment(comment_subject, comment_text,s_id)VALUES ('$subject', '$comment','$selectedcheck')";
             mysqli_query($conn, $query);

            $i++;
          }
        }
      ?>

            <!-- <div class="row">
              <div class="form-group">
                <input type="submit" name="annoncement" value="announcement" class="but btn-primary">
              </div>
            </div> -->
            </form>
             <?php
            
           
           
             
               ?>           
            
           
                  

                </div>
                    </tbody>
                  </table>
              </div>        
        </form>
      </span>
        
    </div>
</body>
</html>
<!-- 
<script>
$(document).ready(function(){
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"announcement/insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
});
</script> -->
