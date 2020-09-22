<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>

	<style type="text/css">
		.login-box{
  width: 300px;
  height: 380px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: black;
  border: 1px solid white;
  padding: 16px ;
  background-color: white;
  box-shadow: 10px 10px 5px #888888;
}

.avatar{
  width: 100px;
  height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #03A9F4;
  background-color: #03A9F4;
    color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
  border-radius: 5px;
}
/*body{
	background: url(cahge_pass.PNG) repeat;
	width: 100%;
	height: 100%;
}*/
.textbox input{
  border: none;
  outline: none;
  background: none;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #03A9F4;
}

.textboxoption{
  width: 70%;
  overflow: hidden;
  font-size: 17px;
  padding: 1px 0;
  margin: 1px 0;
}

.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}

</style>
</head>
<body style="background: linear-gradient(to right,white,#A0CBFF  )">
	<!-- <img src="cahge_pass.PNG" style="width: 97%;height: 98%;"> -->
	<form method="post" class="login-box " >
	
			<div><img src="avatar.png" class="avatar"></div>
			<div><h1>Change Password</h1></div>

			<div class="textbox">
				<i class="fa fa-id-badge" aria-hidden="true"></i>
				<input type="text" name="id_no" placeholder="ID Number">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="text" name="name" placeholder="Name">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="npassword" placeholder="New Password">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="cpassword" placeholder="Conform Password">
			</div>
		
			<input type="submit" name="Change" value="Submit" class="btn">

			<a href="login.php">Cancel</a>
		
	</form>
</body>
</html>