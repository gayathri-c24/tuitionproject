<?php
session_start();
include_once 'connection.php';
if(isset($_POST['login']))
{ 
  $username='';
  $email=$_POST['email'];
   $password=$_POST['password'];
   $role=$_POST['role'];
   $query="SELECT username,email FROM registration WHERE email='$email' 
   AND password='$password' AND role='Teacher'";
   $result=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($result)){
      $username=$row['username'];
       $e=$row['email'];
   }
   if($result)
   {
    $_SESSION['email']=$e;
    $_SESSION['username']=$username;
    $_SESSION['position']=$role;
    header("location:dash_board.php");
   }
   else
   {
    echo "error in username or password";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="tuition_project/css/registration.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../staff/style/style.css">
</head>
<body>
    <div class="wrapper">
        <h2>
Responsive Login Form</h2>
<div class="form-conteniar">
            <form method="post" action="">
                
<div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <input type="email" placeholder="Email" name="email" required class="text-name">
                </div>
<div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Password" name="password" class="text-name">
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
                        <input class="button" type="submit" name='login' value="Login" id="myButton"/>
                    </div>
                    
</div>
</div>
</body>
</html>
