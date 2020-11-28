<!DOCTYPE html>
<html>
<head>
<title>profile page</title>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../staff/style/profile.css" >
</head>
<body>
<div class="modal-dialog">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php
						session_start();
						 echo $_SESSION['username'];
						?>
						</div>
					</div>
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm" id="myButton">Edit</button>
				</div>
		</div>
	</div>
  </div>
</div>	
				
</body>
</html>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "../admin/edit_staff.php";
    };
</script>