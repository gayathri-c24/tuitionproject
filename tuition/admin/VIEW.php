<!DOCTYPE html>
<html>
<head>
<title>display</title>
<style type="text/css">
	table,td,th
		{
			border: 2px solid black;
			padding-left: 10px;
			padding-right: 10px;
			text-align: center;
			padding-top: 20px;
			padding-bottom: 20px;
			 width: 50%; 
            background-color: #f1f1c1;


		}
		.start
		{
			border: 1px solid black;
			padding-left: 10px;
			padding-right: 10px;
			text-align: center;
			padding-top: 20px;
			padding-bottom: 20px;
			 width: 20%; 
            background-color: #f1f1c1;

		}
		.end
		{
			border: 1px solid black;
			padding-left: 10px;
			padding-right: 10px;
			text-align: center;
			padding-top: 20px;
			padding-bottom: 20px;
			 width: 20%; 
            background-color: #f1f1c1;

		}
</style>
</head>
<body>
<center>
<h1>
	 DATA OF STAFFS
</h1>
<table>
<tr>
<th>ID</th>	
<th>NAME</th>
<th>AGE</th>
<th>SALARY</th>
<th>DATEOFBIRTH</th>
<th>DATEOFJOINING</th>	
<th>QUALIFICATION</th>
<th>PERFORMANCE</th>
<th>COURSEOPTION</th>
<th>image</th>								
</tr><br>
<?php
$con=mysqli_connect("localhost","root","","tuition");
$result=mysqli_query($con,"SELECT * FROM teacher");
while($rows=mysqli_fetch_array($result)){ 
?>
		<tr>
		<td><?php echo $rows['ID'];?></td>
		<td><?php echo $rows['NAME'];?></td>
		<td><?php echo $rows['AGE'];?></td>
		<td><?php echo $rows['SALARY'];?></td>
		<td><?php echo $rows['DATEOFBIRTH'];?></td>
		<td><?php echo $rows['DATEOFJOINING'];?></td>
		<td><?php echo $rows['QUALIFICATION'];?></td>
		<td><?php echo $rows['PERFORMANCE'];?></td>
		<td><?php echo $rows['COURSEOPTION'];?></td>
		<td><img src="uploadimages/<?php echo $rows['image'];?>" style="width: 50px;height: 40px"></td>	
		</tr>

<?php
}
?>
</table>	
</center>
</body>
</html>