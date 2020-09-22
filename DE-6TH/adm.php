<?php include('server.php')?>
<?php include('style.php')?>
<?php $adm_id=$_SESSION['adm_id'];
			$query="SELECT * FROM adm where adm_id=$adm_id";
			$result=$db->query($query);

			while($row = mysqli_fetch_array($result)){
				$adm_name=$row['adm_name'];
			}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body style="background: linear-gradient(to right,white,#A0CBFF  ); font-family: 'Times New Roman', Times, serif;">

	<div class="profnav" style="">
		<div class="up" >
			<i class="fa fa-user-circle" aria-hidden="true"><span style="color: #888888">ADMIN</span></i>
			<div>
				<h2><?php echo $adm_name ?></h2>
			</div>
		</div>
		
		<a onclick="openf(event,'home')" id="defaultOpen" class="tablink"><i class="fa fa-home" aria-hidden="true"> Home</i></a>
		<a onclick="openf(event,'addProfessor')" class="tablink"><i class="fa fa-user-plus" aria-hidden="true"> Add Professor</i></a>
		<a onclick="openf(event,'addStudent')" class="tablink"><i class="fa fa-user-plus" aria-hidden="true"> Add Student</i></a>
		<a onclick="openf(event,'addHOD')" class="tablink"><i class="fa fa-user-plus" aria-hidden="true"> Add HOD</i></a>
		
		<a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></a>
		
	</div>

<!---------------------------------------Home Page----------------------------------------------------------------------->

	<div id="home" class="profmain">
		<!------<h2>This is home page for admin</h2>---------->
		<?php
			if(isset($_SESSION['success'])):?>
			<div>
			
			<h3>
			<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			?>
			</h3>
			</div>
		<?php endif ?>
		<h1><u>Welcome</u></h1>
		
		<?php if(isset($_SESSION['adm_id'])) :

			 ?>
			 <div class="textbox">
			 	<h3>ADMIN Name: <?php echo $adm_name;?></h3>
			 	<h3>ADMIN ID: <?php echo $adm_id;?></h3>
			 </div>
			
			
		
		<?php endif ?>
	</div>

	<!----------------------------------------------Add Professor---------------------------------------------------------------->

	<div id="addProfessor" class="profmain">
		<center>
		<form method="post" class="login-box" style="margin-left: 150px">
	
			<div><img src="avatar.png" class="avatar"></div>
			<div><h1>Add Professor Here</h1></div>

			<div class="textbox">
				<i class="fa fa-id-badge" aria-hidden="true"></i>
				<input type="text" name="id_no" placeholder="ID Number">
			</div>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="username" placeholder="Name">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="password" placeholder="Password">
			</div>
		
			<input type="submit" value="Add" class="btn" name="proF">

		</form>

		</center>

		<?php
		if(isset($_POST['proF'])){
			$prof_id=$_POST['id_no'];
			$prof_name=$_POST['username'];
			$prof_pass=$_POST['password'];

			if($prof_id=="" || $prof_name=="" || $prof_pass==""){
				echo "Insert the data";
			}

			else{
			$query="INSERT INTO prof (prof_id,prof_name,prof_pass) VALUES('$prof_id','$prof_name','$prof_pass')";
			$result=$db->query($query);
			if($result){
				echo "Data Inserted Successfuly.";}
			}
		}?>
	</div>
	<!----------------------------------------Add HOD--------------------------------------------------------------------------->

	<div id="addHOD" class="profmain">
		<center>
		<form method="post" class="login-box" style="margin-left: 150px">
	
			<div><img src="avatar.png" class="avatar"></div>
			<div><h1>Add HOD Here</h1></div>

			<div class="textbox">
				<i class="fa fa-id-badge" aria-hidden="true"></i>
				<input type="text" name="id_no" placeholder="ID Number" required="">
			</div>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="username" placeholder="Name" required="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="password" placeholder="Password" required="">
			</div>
		
			<input type="submit" value="Add" class="btn" name="hOd">

		</form>

		</center>

		<?php
		if(isset($_POST['hOd'])){
			$hod_id=$_POST['id_no'];
			$hod_name=$_POST['username'];
			$hod_pass=$_POST['password'];

			if($hod_id=="" || $hod_name=="" || $hod_pass==""){
				echo "Insert the data";
			}

			else{
			$query="INSERT INTO hod(hod_id,hod_name,hod_pass) VALUES('$hod_id','$hod_name','$hod_pass')";
			$result=$db->query($query);
			if($result){
				echo "Data Inserted Successfuly.";}
			}
		}?>
	</div>


	<!----------------------------------------Add Student--------------------------------------------------------------------------->

	<div id="addStudent" class="profmain">
		<center>
		<form method="post" class="login-box" style="margin-left: 150px;margin-top: 70px;">
	
			<div><img src="avatar.png" class="avatar"></div>
			<div><h1>Add Student Here</h1></div>

			<div class="textbox">
				<i class="fa fa-id-badge" aria-hidden="true"></i>
				<input type="text" name="id_no" placeholder="ID Number">
			</div>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="username" placeholder="Name">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="password" placeholder="Password">
			</div>
		
			<input type="submit" value="Add" class="btn" name="sTu">

		</form><br>
		<!----------Excel Sheet upload-------------------------->
		<form method="post" action="" enctype="multipart/form-data" style="background-color: white;width: 350px;height: 100px">
			<div>
			<h3 style="padding-top: 5px;"><u>Insert Excel File</u></h3>
			<input type="file" name="myFile" required="">
		</div>

		<input type="submit" name="uploadExcel" class="btn" style="width: 100px">
		</form>


		</center>

		<!----------- Excel PHP--------------------------->
		<?php
			if(isset($_POST['uploadExcel']))
			{
				$fileName=$_FILES['myFile']['name'];
				$fileTempName=$_FILES['myFile']['tmp_name'];
				$fileExtension=pathinfo($fileName,PATHINFO_EXTENSION);
				$allowedType=array('csv');
				if(!in_array($fileExtension,$allowedType))
				{
					echo "Invalid Inserted File";
				}
				else
				{
					$handle=fopen($fileTempName, 'r');
					while(($myData=fgetcsv($handle,1000,','))!==FALSE)
					{
						$tstu_id=$myData[0];
						$stu_name=$myData[1];
						$pass=$myData[2];
						
							
								$sub="AJ-6IT";
								if($sub=="AJ-6IT")
								{
									$query10="INSERT INTO tempstu(stu_id,stu_name,stu_pass) VALUES('$tstu_id','$stu_name','$pass')";
									$result10=$db->query($query10);
								}	

					}
					if($result10){?>
						<p style="background-color: lightgreen;text-align: center;"><?php echo "Data Inserted Successfuly";?></p>

					<?php }
				}
			}
			
		?>

		<!-----------Manualy Insert---------------->

		<?php
		if(isset($_POST['sTu'])){
			$stu_id=$_POST['id_no'];
			$stu_name=$_POST['username'];
			$stu_pass=$_POST['password'];

			if($stu_id=="" || $stu_name=="" || $stu_pass==""){
				echo "Insert the data";
			}

			else{
			$query="INSERT INTO student(stu_id,stu_name,stu_pass) VALUES('$stu_id','$stu_name','$stu_pass')";
			$result=$db->query($query);
			if($result){?>
				<p style="background-color: red;color: white;"><?php echo "Data Inserted Successfuly.";?></p>
			<?php }
			}
		}?>
	</div>


	<!---------------------------------Script---------------------------------------------------------------------->

	<script>
	function openf(evt,task)
	{
		var i, tabcontent, tablink;
		tabcontent = document.getElementsByClassName("profmain");

		for(i=0; i<tabcontent.length; i++){
			tabcontent[i].style.display = "none";
		}

		tablink = document.getElementsByClassName("tablink");
        for (i = 0; i < tablink.length; i++) {
    	tablink[i].className = tablink[i].className.replace("active"," ");
    	}
  		
  		document.getElementById(task).style.display = "block";
  		evt.currentTarget.className += " active";
	}

	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>

</body>
</html>