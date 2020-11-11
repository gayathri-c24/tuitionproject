<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<style type="text/css">
		@import url('href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet');
		*
		{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			list-style: none;
			text-decoration: none;
			font-family: 'Josefin Sans', sans-serif;
		}
		body
		{
			background:#f3f5f9;
		}
		.wrapper
		{
			display: flex;
			position: relative;

		}
		.wrapper .sidebar
		{
			position: fixed;
			width: 250px;
			height: 100%;
			background:#9a12b3;

		}
		.wrapper .sidebar h2
		{
			color: #fff;
			text-transform: uppercase;
			text-align: center;
			margin-bottom: 30px
		}
		.wrapper .sidebar ul li
		{
			padding: 8px;
			border-bottom: 1px solid rgba(0,0,0,0.05);
			border-top: 1px solid  rgba(225,225,225,0.05);
		}
		.wrapper .sidebar ul li a
		{
			color: #bdb8d7;
			display: block;
		}
		.wrapper .sidebar ul li a .fas
		{
			width: 25px;
		}
		.wrapper .sidebar ul li:hover
		{
			background:#fff;
		}
		.wrapper .sidebar .social_media
		{
			position: absolute;
			bottom: 0;
			left: 50%;
			transform: translateX(-50%);
			display: flex;
		}
		.wrapper .sidebar .social_media a
		{
			display: block;
			width: 40px;
			background:#594f8d;
			height: 40px;
			line-height: 40px;
			text-align: center;
			margin: 0 5px;
			color:#bdb8d7;
			border-top-right-radius: 5px;
			border-top-left-radius:5px;
		}
		.wrapper .main_content
		{
			width: 100%;
			margin-left: 200px;

		}
		.wrapper .main_content .image
		{
			height: 100%;
		}
	</style>
</head>
<body>
<div class="wrapper">
<div class="sidebar">
<h2>TUITION MANAGEMENT</h2>
<ul>
	
	<li><a href="add_fee.php"><i class="fas fa-rupee-sign"></i>ADD STUDENT FEE</a></li>
	<li><a href="staff.php"><i class="fas fa-rupee-sign"></i>ADD STAFF</a></li>
    <li><a href="delete.php"><i class="fas fa-book"></i>DELETE STAFF</a></li>
    <li><a href="search.php"><i class="far fa-edit"></i>SEARCH STAFF</a></li>
    <li><a href="attendence.php"><i class="fas fa-bullhorn"></i>STAFF ATTENDANCE</a></li>
    <li><a href="admission.php"><i class="fab fa-wpforms"></i>ADD STUDENT</a></li>
    <li><a href="delete_student.php"><i class="fas fa-book"></i>DELETE STUDENT</a></li>
    <li><a href="search_students.php"><i class="far fa-edit"></i>SEARCH STUDENT</a></li>  
</ul>
<div class="social_media">
<a href="#"><i class="fab fa-facebook"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-instagram"></i></a>

</div>	
</div>
<div class="main_content">
<div class="header"><img src="education.jpg" class="image"></div>	
<div class="info">
<div>lorem lorem</div>	
</div>
</div>	
</div>
</body>
</html>