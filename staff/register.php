<?php
include_once "connection.php";
if(isset($_POST['register'])){
$username=mysqli_real_escape_string($link,$_POST['username']);
$email=mysqli_real_escape_string($link,$_POST['email']);
$password=mysqli_real_escape_string($link,$_POST['password']);
$repassword=mysqli_real_escape_string($link,$_POST['repassword']);
$role=mysqli_real_escape_string($link,$_POST['role']);


  $check_exist_user=mysqli_query($link,"select * from registration where username='$username'") ;
  if($res=mysqli_num_rows($check_exist_user) > 0){
    echo "alredy exist";
    ?>
    
    <script type="text/javascript">
        document.getElementById('username').style.display="block";
  </script>
    <?php
  }
  else{
    $check_exist_email=mysqli_query($link,"select * from registration where email='$email'");
    if($res=mysqli_num_rows($check_exist_email) > 0){
      ?>
      <script type="text/javascript">
          document.getElementById('email').style.display="block";
    </script>
      <?php
    }
    else{
      $check_valid=mysqli_query($link,"select * from registration where email='$email' && password='$password' ");
      if($res=mysqli_num_rows($check_valid) > 0){
        ?>
        <script type="text/javascript">
            document.getElementById('username_password').style.display="block";
      </script>
        <?php
      }
      else{

        if($password!=$repassword){
          ?>

          <script type="text/javascript">
              document.getElementById('password').style.display="block";
        </script>
          <?php
        }
        else{
            $res=mysqli_query($link,"insert into registration(username,email,password,role) values('$username','$email','$password','$role')") or die(mysqli_error($link));
         
          ?>

          <script type="text/javascript">
              document.getElementById('success').style.display="block";
        </script>
          <?php
          
          header("Location:nav.php");

        }
      }
    }

  }
  
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="tuition_project/css/registration.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../staff/style/style.css">
</head>
<body>
    <div class="wrapper">
        <h2>
Responsive Registration Form</h2>
<div class="form-conteniar">
            <form method="post" action="">
                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="User Name" class="name" name="username">
                    <!-- <span class="last">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="Last Name" class="name">
                    </span> -->
                </div>
<div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <input type="email" placeholder="Email" name="email" required class="text-name">
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Password" name="password" class="text-name">
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Re-type Password" name="repassword" class="text-name">
                </div>
                <div class="input-name">
                    <select class="country role" name="role">
                        <option disabled>Select a role</option>
                        <option>Admin</option>
                        <option>Teacher</option>
                        <option>Student</option>
                   </select>
              <div class="arrow">
</div>
</div>
         <div class="alert alert-danger" id="username" style="display:none">
          This User Already Exist! Try Another.
          </div>
          <div class="alert alert-danger" id="email" style="display:none">
          This Email Already Exist! Try Another.
          </div>
          <div class="alert alert-danger" id="password" style="display:none">
          Password doesn't match.
          </div>
          <div class="alert alert-success" id="success" style="display:none">
          Logged in Successfully.
          </div>
                  <div class="input-name">
                        <input class="button" type="submit" name='register' value="Register" />
                    </div>
                   <p>Already have an account?<a href="login.php">Login here</a></p>
                    </div>
</div>
</body>
</html>
