<?php include('server.php')?>
<?php include ('style.php')?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
</head>
<body style="background: linear-gradient(120deg,#0273FF  ,#02A5FF  ,white) ;font-family: 'Times New Roman', Times, serif;">
<!-- (120deg,#0273FF  ,#02A5FF  ,white) -->
	<div class="sidenav">
		<img src="logo.png" class="logo">
		<h1 style=" font-family: 'Times New Roman', Times, serif; margin-bottom: 0px; margin-left: 180px; margin-top: 70px; background-color: #4FC3F7; padding: 6px; margin-right: 155px; ">Attendance Management System</h1>
		<img src="atten.png" style="margin-top: 0px; ">		
	</div>

	<div class="main">
		<form method="post" class="login-box" >
	
			<div><img src="avatar.png" class="avatar"></div>
			<div><h1>Login Here</h1></div>

			<div class="textbox">
				<i class="fa fa-id-badge" aria-hidden="true"></i>
				<input type="text" name="id_no" placeholder="ID Number">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="password" placeholder="Password">
			</div>
		
			<input type="submit" name="login_page" value="Login" class="btn">

			<a href="change_pass.php">Change Password</a>
		</form>

	</div>
</body>
</html>
