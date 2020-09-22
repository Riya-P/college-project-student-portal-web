<?php include('server.php')?>
<?php include('style.php')?>
<?php 
		$hod_id=$_SESSION['hod_id'];
		

		$query="SELECT * FROM hod where hod_id=$hod_id";
			$result=$db->query($query);

			while($row = mysqli_fetch_array($result)){
				$prof_name=$row['hod_name'];
			}
			 ?>
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Professor Page</title>
</head>
<body style="background: linear-gradient(to right,white,#A0CBFF  )">
	<div class="profnav">
		<div class="up" >
			<i class="fa fa-user-circle" aria-hidden="true"><span style="color: #888888">HOD</span></i>
			<div>
				<h2><?php echo $prof_name ?></h2>
			</div>
		</div>
		
		<a onclick="openf(event,'home')" id="defaultOpen" class="tablink"><i class="fa fa-home" aria-hidden="true"> Home</i></a>
		<!-- <a onclick="openf(event,'addStudent')" class="tablink"><i class="fa fa-user-plus" aria-hidden="true"> Add Student</i></a> -->
		<a onclick="openf(event,'takeAttendance')" class="tablink"><i class="fa fa-calendar" aria-hidden="true"> Take Attendance</i></a>
		<a onclick="openf(event,'seeAtten')" class="tablink"><i class="fa fa-calendar-o" aria-hidden="true"></i>Check Attendance</a>
		<a onclick="openf(event,'academic')" class="tablink"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Academic Calendar</i></a>
		<a onclick="openf(event,'editAttendance')" class="tablink"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit Attendance</i></a>
		<a onclick="openf(event,'addSubject')" class="tablink"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Allocate Subject</i></a>
		<a onclick="openf(event,'midSem')" class="tablink"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Mid Marks</i></a>
		<a onclick="openf(event,'EmidSem')" class="tablink"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Edit Mid Marks</i></a>
		<a onclick="openf(event,'gtu')" class="tablink" style="font-size: 20px"><i class="fa fa-file-excel-o" aria-hidden="true"></i>GTU Fighter/Shining Star</i></a>
		<a onclick="openf(event,'material')" class="tablink"><i class="fa fa-book" aria-hidden="true"></i> Material</a>
		<a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></a>
		
	</div>

<!--------------------------------------------------Home page---------------------------------------------------------->

	<div id="home" class="profmain" >
		<!--------<h2>This is home page for professor</h2>----------------->

		<center>
			<h2><u>HOD Time-Table</u></h2>
			<?php
				if($hod_id=="109"){
			?>
			<!----------------For AkshaySir------------------->
			<table border='1' cellspacing=0 align="center" style="text-align:center;margin-top: 50px" >
<tr>
			<th>Lecture</th>
			<th>Time/Day</th>
			<th>Monday</th>
			<th>Tuesday</th>
			<th>Wednesday</th>
			<th>Thursday</th>
			<th>Friday</th>
		</tr>

<tr>
<td>1</td>
<td>09:30 - 10:20</td>
<td>-</td>
<td>-</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>

<tr>
<td>2</td>
<td>10:20 - 11:10</td>
<td>WT-A-6IT</td>
<td>-</td>
<td>-</td>
<td>WT-A-6CE</td>
<td>WT-B-6CE</td>
</tr>

<tr>
<td>3</td>
<td>11:10 - 12:00</td>
<td>WT-A-6IT</td>
<td>-</td>
<td>-</td>
<td>WT-A-6CE</td>
<td>WT-B-6CE</td>
</tr>

<tr>
<td>4</td>
<td>12:50 - 01:40</td>
<td>-</td>
<td>DE-1B-4CE</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>

<tr>
<td>5</td>
<td>01:40 - 02:30</td>
<td>-</td>
<td>DE-1B-4CE</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>

<tr>
<td>6</td>
<td>02:50 - 03:40</td>
<td>-</td>
<td>WT-C-6CE</td>
<td>WT-B-6IT</td>
<td>-</td>
<td>-</td>
</tr>

<tr>
<td>7</td>
<td>03:40 - 04:30</td>
<td>-</td>
<td>WT-C-6CE</td>
<td>WT-B-6IT</td>
<td>-</td>
<td>-</td>
</tr>

</table>
		<?php }
		?>
		</center>
		<!----------<table>
			<form>

				<tr>
					<th>Lecture</th>
					<th>Monday</th>
					<th>Tuesday</th>
					<th>Wednesday</th>
					<th>Thursday</th>
					<th>Friday</th>
				</tr>
				<?php
					$query="SELECT * FROM sub_6it, 6it where prof_id='108'";
					$result=mysqli_query($db,$query);
					$lecture=Null;

					while ($show=$result->fetch_assoc())
					{
						$mon=" " ;$tue=" ";$wed=" ";$thu=" ";$fri=" ";
						if($show['Monday']==$show['sub_cod'] || ("601"==$show['Monday']))
						{
							$temp=$show['sub_name'];
							if($show['Monday']=='601')
							{
								if($show['prof_id']=='103')
								{
									$mon= "$temp-A";
								}

								else if($show['prof_id']=='102')
								{
									$mon= "$temp-B";
								}

							}

							else
							{
								$mon= $show['sub_name'];
							}
						}

						if($show['Tuesday']==$show['sub_cod'] || ("602"==$show['Tuesday']) || ("606"==$show['Tuesday']))
						{
							$temp=$show['sub_name'];
							if($show['Tuesday']=='602' || $show['Tuesday']=='606')
							{
								if($show['prof_id']=='101' || ($show['prof_id']=='103' &&("606"==$show['Tuesday'])))
								{
									$tue= "$temp-A";
								}

								else if($show['prof_id']=='104' || ($show['prof_id']=='102' && $show['Tuesday']=='606'))
								{
									$tue= "$temp-B";
								}

								else if($show['prof_id']=='105')
								{
									$tue= "$temp-C";
								}

							}

							else
							{
								$tue= $show['sub_name'];
							}
						}

						if($show['Wednesday']==$show['sub_cod'] || ("603"==$show['Wednesday']) ||("607"==$show['Wednesday']))
						{
							$temp=$show['sub_name'];
							if($show['Wednesday']=='603' ||("607"==$show['Wednesday']))
							{
								if($show['prof_id']=='105' || ($show['prof_id']=='106') && ("607"==$show['Wednesday']))
								{
									$wed= "$temp-A";
								}

								else if($show['prof_id']=='103' )
								{
									$wed= "$temp-B";
								}

								else if($show['prof_id']=='102' && ("607"==$show['Wednesday']))
								{
									$wed= "$temp-C";
								}

							}

							else
							{
								$wed= $show['sub_name'];
							}
						}

						if($show['Thursday']==$show['sub_cod'] || ("604"==$show['Thursday']) ||("608"==$show['Thursday']))
						{
							$temp=$show['sub_name'];
							if($show['Thursday']=='604' || $show['Thursday']=='608')
							{
								if($show['prof_id']=='102' || ($show['prof_id']=='105' &&("608"==$show['Thursday'])))
								{
									$thu= "$temp-A";
								}

								else if($show['prof_id']=='105' || ($show['prof_id']=='106')&&("608"==$show['Thursday']))
								{
									$thu= "$temp-B";
								}

								else if($show['prof_id']=='103' &&("608"==$show['Thursday']) )
								{
									$thu= "$temp-C";
								}

							}

							else
							{
								$thu= $show['sub_name'];
							}
						}

						if($show['Friday']==$show['sub_cod'] || ("605"==$show['Friday']) ||("609"==$show['Friday']))
						{
							$temp=$show['sub_name'];
							if($show['Friday']=='605' || ("609"==$show['Friday']))
							{
								if($show['prof_id']=='104' || ($show['prof_id']=='102') &&("609"==$show['Friday']))
								{
									$fri= "$temp-A";
								}

								else if($show['prof_id']=='101' || ($show['prof_id']=='105')&&("609"==$show['Friday']))
								{
									$fri= "$temp-B";
								}

								else if($show['prof_id']=='106' &&("609"==$show['Friday']))
								{
									$fri= "$temp-C";
								}

							}

							else
							{
								$fri= $show['sub_name'];
							}
						}

						$lecture++;

							?>						

						<tr>
							<td><?php echo $lecture ;?></td>
							<td><?php echo $mon ;?></td>
							<td><?php echo $tue ;?></td>
							<td><?php echo $wed ;?></td>
							<td><?php echo $thu ;?></td>
							<td><?php echo $fri ;?></td>
						</tr>	
					<?php }?>
			</form>
		</table>------------>

	</div>

	<!-----------------------------Academic Calendar------------------->
	<div id="academic" class="profmain">
		<center>
			<iframe src="Academic.pdf" width="900px" height="600px" style="margin-top: 0px"></iframe>
		</center>
	</div>

<!-----------------------------------------edit attendance----------------------------------------------------------------->
<div id="editAttendance" class="profmain">

	<center>
		<form method="POST" >
			<label><b>Enter Start Date:</b></label>
			<div class="textbox">
				<input type="text" name="date_start" placeholder="dd-mm-yy" required="">
			</div>

			<input type="submit" value="Submit" class="btn" name="Mdate" style="width: 10%;">

			<?php 
			if(isset($_POST['Mdata'])){
						$date_start=$_POST['date_start'];
			?>

		</form>

		<form method="POST" action="prof.php" style="margin-top: 10%">
			<table>
				<tr>
					<th>Enronnment No.</th>
				<!---	<th>Name</th>-->
					<th>Attendance</th>
				</tr>

				<tbody>
					<tr>
					<?php
					
					$query="SELECT * FROM student";
					$result=$db->query($query);

					$query1="SELECT * FROM wt_6it WHERE prof_id='103'";
					$result1=mysqli_query($db,$query1);
					
					while ($show=$result1->fetch_assoc()){
						if($show['cg_date']==$date_start){

				?>
					<td><?php echo $show['stu_id'];?></td>
				<!---	<td><?php 
						while($show1=$result->fetch_assoc())
						{
							if($show['stu_id']==$show1['stu_id'])
							{
								echo $show1['stu_name'];
							}
						}?></td>--->
					<td>Pressent<?php if($show['cg_date']==$date_start && $show['cg_value']=='1')
									  {
									  	echo '<input type="checkbox" checked="checked" name="attendance[$show[stu_id]] value="1" />';
									  }
									  elseif($show['cg_date']==$date_start && $show['cg_value']=='0')
									  {
									  	echo '<input type="checkbox" name="attendance[$show[stu_id]] value="0" />';
									  	// console.log("1")
									  }

								 ?></td>
							 
					
				</tr>
				</tbody>

				<?php }}}

				if(isset($_POST['mAtten'])){
	$at=$_POST['attendance'];

	$query="SELECT * FROM attendance";
	$result=$db->query($query);

	while($show=$result->fetch_assoc())
	{
		foreach($at as $key=>$cg_value)
		{
			if($cg_value=="1")
			{
				$query1="UPDATE attendance SET cg_value='1' where stu_id='170390116007' AND cg_date='08-02-20'";
				$result1=$db->query($query1);
			}
			else
			{
				$query1="UPDATE attendance SET cg_value='0' where stu_id='170390116007' AND cg_date='08-02-20'";
				$result1=$db->query($query1);
			}
		}
	}
	if($result1)
	{
		echo '<script> alert("Updated Attendance Successfuly"); </script>';
	}
			
}
					
			?>
			</table>
			<input type="submit" value="Take Attendance" class="btn" name="mAtten" style="width: 20%; margin-left: 15%; margin-top: 4%">
		</form>
	</center>
	
</div>

<!------------------------------------------Add Subject---------------------------------------------------------------->

	<div id="addSubject" class="profmain">
		<center>
			<form method="post" class="addSub">

				<div>
					<h3 style="text-align: center;border-bottom: 2px solid #03A9F4;">Allocate Subject</h3>
				</div>

				<ul type="none">
					<div>
						<li>Department <select name="dept">
						<option value="it">IT</option>
						<option>CE</option>
						<option>MEC</option>
						<option>AUTO</option>
						<option>CIVIL</option>
						<option>EC</option>
						<option>EE</option>
					</select></li>
					</div>

					<div>
						<li>Semester  <select name="sem">
						<option value="2">2nd</option>
						<option value="4">4th</option>
						<option value="6">6th</option>
						<option value="8">8th</option>
					</select></li>
					</div>

					<div>
						<li>Subject   <select name="sub">
						<option value="AJ-6IT">Advance Java</option>
						<option value="DCDR-6IT">DCDR</option>
						<option value="WT-6IT">Web Technology</option>
						<option value="SE-6IT">Software Engineering</option>
						<option value=".NET-6IT">.NET</option>
						<option value="SS_6it">Software Session</option>
						<option value="DE-6IT">DE</option>
					</select></li>
					</div>

					<div>
						<li>Professor <select name="prof">
							<option value="Prof.Ekta">Prof. Ekta Joshi</option>
							<option value="Prof.Jaimin">Prof. Jaimin Jani</option>
							<option value="Prof.Parimal">Prof. Parimal Patel</option>
							<option value="Prof.Ravindra">Prof. Ravindra Patel</option>
							<option value="Prof.Sarfras">Prof. Sarfras Jarda</option>
							<option value="Prof.Tanvi">Prof. Tanvi Joshi</option>
							<option value="Prof.Yagnesh">Prof. Yagnesh Patel</option>
						</select>
					</li>
					</div>
				</ul>

				<?php
					if(isset($_POST['addSub']))
					{
						$dept=$_POST['dept'];
						$sem=$_POST['sem'];
						$sub=$_POST['sub'];
						$prof=$_POST['prof'];

						$query="SELECT * FROM sub_6it";
						$result=$db->query($query);

						while($show=$result->fetch_assoc())
						{

							$query1="SELECT * FROM prof ";
							$result1=$db->query($query1);

							while($show1=$result1->fetch_assoc())
							{
								if($show1['prof_name']==$prof && $show['sub_name']==$sub)
								{
									echo "Subject already allocated.";
								}
							}
						}
					}

				?>

				<input type="submit" class="btn" style="width: 200px" name="addSub" value="Submit">
			</form>
		</center>
		
		
	</div>


<!-----------------------------------------------AddStudent------------------------------------------------------------->

<!-- 	<div id="addStudent" class="profmain">
		<center>
		<form method="post" class="login-box">
	
			<div><img src="avatar.png" class="avatar"></div>
			<div><h1>Add Student Here</h1></div>

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
		
			<input type="submit" value="Add" class="btn" name="stuData">

		

		<?php
		if(isset($_POST['stuData'])){
			$stu_id=$_POST['id_no'];
			$stu_name=$_POST['username'];
			$stu_pass=$_POST['password'];

			if($stu_id==Null || $stu_name==Null || $stu_pass==Null){
				echo "Insert the data";
			}

			else{
			$query="INSERT INTO student(stu_id,stu_name,stu_pass) VALUES('$stu_id','$stu_name','$stu_pass')";
			$result=$db->query($query);
			if($result){
				echo "Data Inserted Successfuly.";}
			}
		}?>
		</form>

		</center>
	</div> -->


<!----------------------------------------Take Attendance--------------------------------------------------------------->

	<div id="takeAttendance" class="profmain">
		
		<center>
			<h2 style="margin-top: 50px"><u>Attendance Sheet of 6IT</u></h2>
			<!----------attendance Table---------->

		<form method="POST" style="margin-top: 50px">
		<table>
			
			<thead>
				
				<tr>
					<th>Sr. No.</th>
					<th>Enronnment No.</th>
					<th>Name</th>
					<th>Attendance</th>
				</tr>

			</thead>

			<tbody>
				
				<tr>
					<?php
					$sr=0;
					$query="SELECT * FROM student";
					$result=$db->query($query);
					while ($show=$result->fetch_assoc()){
						$sr++;
				?>
					<td><?php echo $sr; ?></td>
					<td><?php echo $show['stu_id'];?></td>
					<td><?php echo $show['stu_name'];?></td>

					

					<td>Present<input type="radio" name="attendance[<?php echo $show['stu_id']?>]" value="Present">Abssent<input type="radio" name="attendance[<?php echo $show['stu_id']?>]" value="Abssent"></td>
					
				</tr>
			<?php 
					}
					$sr=0;
			?>

			</tbody>
			
			
			<?php
				
				$query1="SELECT * FROM attendance";
				$result1=$db->query($query1);

				while($show=$result1->fetch_assoc()){
					
						$sub='ADA';
					
				}
		/*----------------------------------------for ADA------------------------------------*/	
				if($sub=='ADA'){
					if(isset($_POST['takAtten'])){
						$at=$_POST['attendance'];
						$cg_date=date('d-m-y');

						$query="SELECT DISTINCT cg_date FROM attendance";
						$result=$db->query($query);
						$b=false;

						if($result->num_rows>0){
							while($check=$result->fetch_assoc()){
								if($cg_date==$check['cg_date']){
									$b=true;
									echo "Attendance already taken.";
								}
							}
						}

						if(!$b){
							foreach($at as $key=>$cg_value){

								if($cg_value=="Present"){

									$query="INSERT INTO attendance(stu_id,cg_value,cg_date) values('$key','1','$cg_date')";
									$inserResult=$db->query($query);
								}
								else{
									$query="INSERT INTO attendance(stu_id,cg_value,cg_date) values('$key','0','$cg_date')";
									$inserResult=$db->query($query);
								}
							}

							if($inserResult){
								echo "Attendance taken successfuly";
							}
						}
		
					}
				}
			
				?>
		</table>
		<input type="submit" value="Take Attendance" class="btn" name="takAtten" style="width: 20%; margin-top: 4%">
	</form>
</center>
			
	</div>

	<!-----------------------Mid Marks Excel file--------------------------------------->

<!-- 	<div id="midSem" class="profmain">
		<center>
		
		<?php
			if(isset($_POST['uploadBtn']))
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
				{?>
					<table>
						<thead>
							<tr>
								<th>Enroll No.</th>
								<th>Student Name</th>
								<th>Mid 1 Marks</th>
							</tr>
						</thead>
					

							<?php
					$handle=fopen($fileTempName, 'r');
					while(($myData=fgetcsv($handle,1000,','))!==FALSE)
					{
						$tstu_id=$myData[0];
						$stu_name=$myData[1];
						$mid1_marks=$myData[2];

						
									// $query10="INSERT INTO marks_mid_6it(stu_id,stu_name,mid1_marks) VALUES('$tstu_id','$stu_name','$mid1_marks')";
									// $result10=$db->query($query10);

							$query11="SELECT * FROM sub_6it WHERE prof_id='$prof_id'";
							$result11=$db->query($query11);
							while($show0=$result11->fetch_assoc())
							{
								$sub=$show0['sub_name'];
								if($sub=="AJ-6IT")
								{
									// $temp="AJ";
									$query10="INSERT INTO marks_mid_6it(stu_id,stu_name,sub,mid1_marks) VALUES('$tstu_id','$stu_name','$sub','$mid1_marks')";
							$result10=$db->query($query10);
								}

								if($sub=="SE-6IT")
								{
									
									$query10="INSERT INTO marks_mid_6it(stu_id,stu_name,sub,mid1_marks) VALUES('$tstu_id','$stu_name','$sub','$mid1_marks')";
							$result10=$db->query($query10);
								}

								if($sub=="DCDR-6IT")
								{
									
									$query10="INSERT INTO marks_mid_6it(stu_id,stu_name,sub,mid1_marks) VALUES('$tstu_id','$stu_name','$sub','$mid1_marks')";
							$result10=$db->query($query10);
								}

								if($sub=="WT-6IT")
								{
									
									$query10="INSERT INTO marks_mid_6it(stu_id,stu_name,sub,mid1_marks) VALUES('$tstu_id','$stu_name','$sub','$mid1_marks')";
							$result10=$db->query($query10);
								}

								if($sub==".NET-6IT")
								{
									$query10="INSERT INTO marks_mid_6it(stu_id,stu_name,sub,mid1_marks) VALUES('$tstu_id','$stu_name','$sub','$mid1_marks')";
							$result10=$db->query($query10);
								}
							}
					?>
					
							<tbody>
								<tr>
							
								<td><?php echo $tstu_id;?></td>
								<td><?php echo $stu_name;?></td>
								<td><?php echo $mid1_marks;?></td>
							</tr>
							</tbody>
				<?php	}
					// if($result)
					// {
					// 	echo "Yes";
					// }
					// else
					// {
					// 	echo "No";
					// }
				}
			}
			
		?>
		</table>
					</center>
		<form method="post" action="" enctype="multipart/form-data">
			<div>
			<h3>Insert File</h3>
			<input type="file" name="myFile" required="">
		</div>

		<input type="submit" name="uploadBtn" class="btn" style="width: 100px">
		</form>
	</div> -->

	<!------------------------------------See Attendance------------------------>
<div id="seeAtten" class="profmain">
	
		<form method="post" style="margin-top: 15px">
			
			<table style="width: 410px">
				<tr>
					<th style="background-color:#EBF5FB;color: black;border:none;width: 200px">Enter Start Date:</th>
					<td style="background-color:#EBF5FB;color: black;border:none;width: 200px"><input type="text" name="date_start" placeholder="dd-mm-yy" required="" style="border: none;font-size: 18px;background-color:#EBF5FB;border:none;"></td>
				</tr>

				<tr>
					<th style="background-color:#EBF5FB;color: black;border:none;width: 200px">Enter End Date:</th>
					<td style="background-color:#EBF5FB;color: black;border:none;width: 200px"><input type="text" name="date_end" placeholder="dd-mm-yy" required="" style="border: none;font-size: 18px;background-color:#EBF5FB;border:none;"></td>
				</tr>
			</table>
				<!-- <div>
					<label><b>Enter Start Date:</b></label>
				<input type="text" name="date_start" placeholder="dd-mm-yy" required="" style="border: none;font-size: 18px">
			</div>
			<div>
				<label><b>Enter End Date:</b></label>
				<input type="text" name="date_end" placeholder="dd-mm-yy" required="" style="border: none;font-size: 18px">
			</div> -->
			

			
			<!-- <div class="textbox">
				
			</div> -->

			<input type="submit" value="Submit" class="btn" name="enterDate" style="width: 10%;">
			<hr>

		</form>
			
			<table>
			<thead>
				
				<tr>
					<th>Stu_id</th>
					<th>AJ</th>
					<th>DCDR</th>
					<th>SE</th>
					<th>WT</th>
					<th>.NET</th>
				</tr>

			</thead>

			<tbody>

			<?php
				
				if(isset($_POST['enterDate']))
				{
						$date=$_POST['date_start'];
						$edate=$_POST['date_end'];

						$query6="SELECT stu_id FROM student";
						$result6= $db->query($query6);

				while($show6=$result6->fetch_assoc())
				{	
					$tstu_id=$show6['stu_id'];

						$query="SELECT s.se_6it_value,s.se_6it_date,s.stu_id,a.stu_id,a.aj_6it_date,a.aj_6it_value,w.wt_6it_date,w.wt_6it_value,w.stu_id,d.dcdr_6it_date,d.dcdr_6it_value,d.stu_id,n.net_6it_date,n.net_6it_value,n.stu_id 
								FROM se_6it AS s 
								INNER JOIN aj_6it AS a ON s.stu_id=a.stu_id 
								INNER JOIN wt_6it AS w ON a.stu_id=w.stu_id 
								INNER JOIN dcdr_6it AS d ON w.stu_id=d.stu_id
								INNER JOIN net_6it AS n ON d.stu_id=n.stu_id";
						$result=$db->query($query);

						// $query1="SELECT * FROM aj_6it WHERE stu_id='$tstu_id";
						// $result1=$db->query($query1);

						$query2="SELECT * FROM wt_6it WHERE stu_id='$tstu_id";
						// $result2=$db->query($query2);

						$query3="SELECT * FROM dcdr_6it WHERE stu_id='$tstu_id";
						// $result3=$db->query($query3);

						$query4="SELECT * FROM net_6it WHERE stu_id='$tstu_id";
						// $result4=$db->query($query4);

						
					$setotal=0;$yse=0;$nse=0;$ajtotal=0;$yaj=0;$naj=0;$dcdrtotal=0;$ydcdr=0;$ndcdr=0;$nettotal=0;$ynet=0;$nnet=0;$wttotal=0;$ywt=0;$nwt=0;$net=0;$aj=0;$se=0;$dcdr=0;$wt=0;
					
				
				/*--------------------For SE--------------------------*/
						while ($show=$result->fetch_assoc())
						{
							if($date<= $show['se_6it_date'] && $show['se_6it_date']<=$edate && $tstu_id==$show['stu_id'])
							{
								if($show['se_6it_value']=="1")
								{
									$yse++;
								}
								elseif($show['se_6it_value']=="0")
								{
									$nse++;
								}
								if($yse>=$nse && $nse+$yse>=0)
								{
									$setotal=($yse-$nse)*100/($nse+$yse);
									$setotal=round($setotal,2);
								}
								else{
									$setotal=0;
								}
							}

							if($date<= $show['aj_6it_date'] && $show['aj_6it_date'] <=$edate && $tstu_id==$show['stu_id'])
							{	
								if($show['aj_6it_value']=="1")
								{
									$yaj++;
								}
								elseif($show['aj_6it_value']=="0")
								{
									$naj++;
								}
								if($yaj>=$naj && $naj+$yaj>=0)
								{
									$ajtotal=($yaj-$naj)*100/($naj+$yaj);
									$ajtotal=round($ajtotal,2);
								}
								else{
									$ajtotal=0;
								}
							}

							if($date<= $show['wt_6it_date'] && $show['wt_6it_date']<=$edate && $tstu_id==$show['stu_id'])
							{
								if($show['wt_6it_value']=="1")
								{
									$ywt++;
								}
								elseif($show['wt_6it_value']=="0")
								{
									$nwt++;
								}
								if($ywt>=$nwt && $nwt+$ywt>=0)
								{
									$wttotal=($ywt-$nwt)*100/($nwt+$ywt);
									$wttotal=round($wttotal,2);
								}
								else{
									$wttotal=0;
								}
							}

							if($date<= $show['dcdr_6it_date'] && $show['dcdr_6it_date']<=$edate && $show['stu_id']==$tstu_id)
							{
								if($show['dcdr_6it_value']=="1")
								{
									$ydcdr++;
								}
								elseif($show['dcdr_6it_value']=="0")
								{
									$ndcdr++;
								}
								if($ydcdr>=$ndcdr && $ndcdr+$ydcdr>=0)
								{
									$dcdrtotal=($ydcdr-$ndcdr)*100/($ndcdr+$ydcdr);
									$dcdrtotal=round($dcdrtotal,2);
								}
								else{
									$dcdrtotal=0;
								}
							}

							if($date<= $show['net_6it_date'] && $show['net_6it_date']<=$edate && $show['stu_id']==$tstu_id)
							{
								if($show['net_6it_value']=="1")
								{
									$ynet++;
								}
								elseif($show['net_6it_value']=="0")
								{
									$nnet++;
								}
								if($ynet>=$nnet && $nnet+$ynet>=0)
								{
									$nettotal=($ynet-$nnet)*100/($nnet+$ynet);
									$nettotal=round($nettotal,2);
								}
								else{
									$nettotal=0;
								}
							}
							
						}

				/*--------------------For AJ--------------------------*/
			
					// if($result1=$db->query($query1)){
					// 	while ($show1=$result1->fetch_assoc())
					// 	{
							// if($date<= $show1['aj_6it_date'] && $show1['aj_6it_date'] <=$edate)
							// {	
							// 	if($show1['aj_6it_value']=="1")
							// 	{
							// 		$yaj++;
							// 	}
							// 	elseif($show1['aj_6it_value']=="0")
							// 	{
							// 		$naj++;
							// 	}
							// 	if($yaj>=$naj && $naj+$yaj>=0)
							// 	{
							// 		$ajtotal=($yaj-$naj)*100/($naj+$yaj);
							// 		$ajtotal=round($ajtotal,2);
							// 	}
							// 	else{
							// 		$ajtotal=0;
							// 	}
							// }
							
					// 	}
					// }

				/*--------------------For WT--------------------------*/
					// if($result2=$db->query($query2)){
					// 	while ($show2=$result2->fetch_assoc())
					// 	{
							// if($date<= $show2['wt_6it_date'] && $show2['wt_6it_date']<=$edate &&$show2['stu_id']==$tstu_id)
							// {
							// 	if($show2['wt_6it_value']=="1")
							// 	{
							// 		$ywt++;
							// 	}
							// 	elseif($show2['wt_6it_value']=="0")
							// 	{
							// 		$nwt++;
							// 	}
							// 	if($ywt>=$nwt && $nwt+$ywt>=0)
							// 	{
							// 		$wttotal=($ywt-$nwt)*100/($nwt+$ywt);
							// 		$wttotal=round($wttotal,2);
							// 	}
							// 	else{
							// 		$wttotal=0;
							// 	}
							// }
							
					// 	}
					// }
					
				/*--------------------For DCDR--------------------------*/
					// if($result3=$db->query($query3)){
					// 	while ($show3=$result3->fetch_assoc())
					// 	{
					// 		if($date<= $show3['dcdr_6it_date'] && $show3['dcdr_6it_date']<=$edate && $show3['stu_id']==$tstu_id)
					// 		{
					// 			if($show3['dcdr_6it_value']=="1")
					// 			{
					// 				$ydcdr++;
					// 			}
					// 			elseif($show3['dcdr_6it_value']=="0")
					// 			{
					// 				$ndcdr++;
					// 			}
					// 			if($ydcdr>=$ndcdr && $ndcdr+$ydcdr>=0)
					// 			{
					// 				$dcdrtotal=($ydcdr-$ndcdr)*100/($ndcdr+$ydcdr);
					// 				$dcdrtotal=round($dcdrtotal,2);
					// 			}
					// 			else{
					// 				$dcdrtotal=0;
					// 			}
					// 		}
							
					// 	}
					// }

				/*--------------------For .NET--------------------------*/
					// if($result4=$db->query($query4)){
					// 	while ($show4=$result4->fetch_assoc())
					// 	{
					// 		if($date<= $show4['net_6it_date'] && $show4['net_6it_date']<=$edate)
					// 		{
					// 			if($show4['net_6it_value']=="1")
					// 			{
					// 				$ynet++;
					// 			}
					// 			elseif($show4['net_6it_value']=="0")
					// 			{
					// 				$nnet++;
					// 			}
					// 			if($ynet>=$nnet && $nnet+$ynet>=0)
					// 			{
					// 				$nettotal=($ynet-$nnet)*100/($nnet+$ynet);
					// 				$nettotal=round($nettotal,2);
					// 			}
					// 			else{
					// 				$nettotal=0;
					// 			}
					// 		}
							
					// 	}
					// 	}	?>
						<tr>
				<td><?php echo $tstu_id;?></td>
				<td><?php echo $ajtotal,"%";?></td>
				<td><?php echo $dcdrtotal,"%";?></td>
				<td><?php echo $setotal,"%";?></td>
				<td><?php echo $wttotal,"%";?></td>
				<td><?php echo $nettotal,"%";?></td>
			</tr>	
			<?php	
				$fsub=NULL;
				$query12="SELECT * FROM sub_6it ";
				$result12=$db->query($query12);

				while ($show12=$result12->fetch_assoc()) {
					$fsub=$show12['sub_name'];
				}

				if($fsub=='SE-6IT')
				{
					$query="UPDATE achart SET SE_6IT='$setotal' WHERE stu_id=$tstu_id";
					$result=$db->query($query);
				}

				elseif($fsub=='AJ-6IT')
				{
					$query="UPDATE achart SET AJ_6IT='$ajtotal' WHERE stu_id=$tstu_id";
					$result=$db->query($query);
				}

				elseif($fsub=='WT-6IT')
				{
					$query="UPDATE achart SET WT6IT='$wttotal' WHERE stu_id=$tstu_id";
					$result=$db->query($query);
				}

				elseif($fsub=='.NET-6IT')
				{
					$query="UPDATE achart SET .NET_6IT='$nettotal' WHERE stu_id=$tstu_id";
					$result=$db->query($query);
				}

				elseif($fsub=='DCDR-6IT')
				{
					$query="UPDATE achart SET DCDR_6IT='$dcdrtotal' WHERE stu_id=$tstu_id";
					$result=$db->query($query);
				}
		}
	}?>
		</tbody>
	</table>

	<a href="chart.php" target="_blank"><input type="submit"  value="For Chart" class="btn" style="width: 100px;"></a>

</div>


	<!-------------------------Material------------------------->
<div id="material" class="profmain">

		<form name="form" method="post" action="" enctype="multipart/form-data" class="login-box" style="margin-left: 170px;width: 320px;height: 360px">
			<h2 style="text-align: center;">Upload Materials</h2>
			<input type="file" name="my_file" style="margin-top: 10px" /><br /><br />
			<input type="submit" name="fileSubmit" value="Upload" class="btn" style="font-size:18px;" />
			<hr>
			<div>
				<h2 style="text-align: center;">Uploaded Materials</h2>
				<b style="margin-top: 10px">Materials</b> <select style="border: 1px solid #03A9F4; padding: 2px; font-size: 16px;">
					<?php
						$query="SELECT * FROM material";
						$result=$db->query($query);

						while($show=$result->fetch_assoc())
						{?>
							<option><?php echo $show['file_name'];?></option>
						<?php }
					?>
				</select>
			</div>
		</form>


			<?php 
			$dbfile=NULL;
				if(isset($_POST['fileSubmit']))
				{
					
					if (($_FILES['my_file']['name']!=""))
					{
						$dbfile=$_FILES['my_file']['name'];
						// Where the file is going to be stored
						$target_dir = "upload/";
 						$file = $_FILES['my_file']['name'];
 						$path = pathinfo($file);
 						$filename = $path['filename'];
 						$ext = $path['extension'];
 						$temp_name = $_FILES['my_file']['tmp_name'];
 						$path_filename_ext = $target_dir.$filename.".".$ext;
 
						// Check if file already exists
						if (file_exists($path_filename_ext)) 
						{
 							echo "Sorry, file already exists.";
 						}
 						else
 						{
 							$query="INSERT INTO material(file_name) VALUES('$dbfile')";
 							$result=$db->query($query);
 							move_uploaded_file($temp_name,$path_filename_ext);
 							echo "Congratulations! File Uploaded Successfully.";
 						}
					}
				}
				
			?>

			
	
</div>

	<!-----------------------Enter Mid Marks --------------------------------------->

	<div id="midSem" class="profmain">
		<form method="post">
			<center>
				<h2 style="margin-top: 50px"><u>Enter Mid Sem Marks</u></h2>
				<table style="margin-top: 50px;width: 600px;text-align: center;">
				<tr>
					<th style="text-align: center;">Sr No.</th>
					<th>Enrollment No.</th>
					<th>Student Name</th>
					<th>Mid 1 Marks</th>
				</tr>
				<?php
					$sr=0;
					$query="SELECT * FROM student";
					$result=$db->query($query);

					while($show=$result->fetch_assoc())
					{
						$sr++;
						?>

					<tr>
						<td style="text-align: center;"><?php echo $sr;?></td>
						<td><?php echo $show['stu_id']; ?></td>
						<td><?php echo $show['stu_name'] ?></td>
						<td style="width: 100px"><input type="text" name="atend[<?php echo $show['stu_id']?>]" style="width: 50px"></td>
					</tr>


					<?php }
				
						

						// $query="SELECT * FROM sub_6it WHERE prof_id=$prof_id";
						// $result=$db->query($query);

						// while($show=$result->fetch_assoc())
						// {
						// 	$sub=$show['sub_name'];
						// }

						if(isset($_POST['midbut']))
						{
							$at=$_POST['atend'];

							$query1="SELECT DISTINCT sub_name FROM marks_mid_6it";
							$result1=$db->query($query1);
							$x=false;

							if($result1->num_rows>0)
							{
								while($check=$result1->fetch_assoc())
								{
									if($sub==$check['sub_name'])
									{
										$x=true;
										echo "Already Submited.";
									}
								}
							}
							
							if(!$x)
							{
								$tstu=NULL;
								$tstuID=NULL;
								foreach($at as $key=>$value)
								{
									$res=$db->query("SELECT stu_name,stu_id FROM student");
									while($sh=$res->fetch_assoc())
									{
										$tstu=$sh['stu_name'];
										$tstuID=$sh['stu_id'];
									

									if($tstuID==$key)
									{
										$query3="INSERT INTO marks_mid_6it(stu_id,stu_name,sub_name,mid1_marks) VALUES('$key','$tstu','$prof_sub_name','$value')";
										$result3=$db->query($query3);
									}
									}
								}
								if($result3)
								{
									echo "Submited Successfully.";
								}
							}							
						}

					

				?>
			</table>
			</center>
			<input type="submit" name="midbut" value="Submit" class="btn" style="width: 100px;margin-left: 260px">
		</form> 	

		
	</div>


<!--------------------------------Edite Mid Marks--------------------------------------->
<div id="EmidSem" class="profmain">
	<form method="post">
			<center>
				<h2><u>Edit Mid Sem Marks</u></h2>
				<table style="margin-top: 50px">
				<tr>
					<th>Sr. No.</th>
					<th>Enrollment No.</th>
					<th>Students Name</th>
					<th>Mid 1 Marks</th>
				</tr>
				<?php
				$sr=0;
					$query="SELECT * FROM student";
					$result=$db->query($query);

					while($show=$result->fetch_assoc())
					{
						$sr++;
						$edstu_id=$show['stu_id'];
						?>
					<tr>
						<td style="width: 70px;"><?php echo $sr;?></td>
						<td><?php echo $show['stu_id']; ?></td>
						<td><?php echo $show['stu_name'] ?></td>
						<td style="width: 100px"><input type="text" name="atend[<?php echo $show['stu_id']?>]" style="width: 50px" placeholder="<?php  
											$query12="SELECT * FROM marks_mid_6it WHERE stu_id='$edstu_id' AND sub_name='WT-6IT'";
											$result12=$db->query($query12);
											while($show12=$result12->fetch_assoc())
											{
												echo $show12['mid1_marks'];
											}
										?>"></td>
					</tr>


					<?php }

						$query="SELECT * FROM sub_6it WHERE prof_id='103'";
						$result=$db->query($query);

						while($show=$result->fetch_assoc())
						{
							$sub=$show['sub_name'];
						}

						if(isset($_POST['midbut']))
						{
							$at=$_POST['atend'];	
							
							foreach($at as $key=>$value)
							{
								if($value!="")
								{
									$query3="UPDATE marks_mid_6it SET mid1_marks='$value' WHERE stu_id='$key' WHERE sub_name='$prof_sub_name'";
									$result3=$db->query($query3);
								}
							}
							if($result3)
							{
								echo "Edite Successfully.";
							}
													
						}

					$sr=0;

				?>
			</table>
			</center>
			<input type="submit" name="midbut" value="Submit" class="btn" style="width: 100px;margin-left: 170px">
		</form>

		<!----------------------Generate Excel File-------------------------------->

		<form method="post">
		    <input type="submit" name="export_data" value="Download Excel File" class="btn" style="width: 200px;margin-left: 170px">
 		</form>
</div>

<!----------------------------------------Gtu fig----------------------------------->
<div id="gtu" class="profmain">
	<center>
		<h2 style="margin-top: 50px"><u>Student Mid Sem Performance</u></h2>
		<table style="margin-top: 50px">
		<thead>
			<tr>
				<th>Sr. No.</th>
				<th>Enrollment No.</th>
				<th>Student Name</th>
				<th>Mid 1 Marks</th>
				<th>GTU Fighter/<br>Shining Star</th>

			</tr>
		</thead>

		<tbody>
			
				<?php
					$sr=0;
					$qu="SELECT * FROM marks_mid_6it WHERE sub_name='WT-6IT'";
					$re=$db->query($qu);

					while($show=$re->fetch_assoc())
					{
						$sr++;
						?>
					

					<?php 
					if($show['mid1_marks']<"30")
					{?>
					<tr>
						<td><?php echo $sr;?></td>
						<td><?php echo $show['stu_id']; ?></td>
						<td><?php echo $show['stu_name']; ?></td>
						<td><?php echo $show['mid1_marks']; ?></td>
						<td style="width: 150px;"><i class="fa fa-star" aria-hidden="true" style="color: #FD463D"></i></td>
					</tr>
					<?php }
					elseif($show['mid1_marks']>="30")
					{?>
					<tr>
						<td><?php echo $sr;?></td>
						<td><?php echo $show['stu_id']; ?></td>
						<td><?php echo $show['stu_name']; ?></td>
						<td><?php echo $show['mid1_marks']; ?></td>
						<td><i class="fa fa-star" aria-hidden="true" style="color: #04FE5D"></i></td>
					</tr>
					<?php 
				}
				}
				$sr=0;
				?>
			
		</tbody>
	</table>
	</center>

	<div style="margin-left: 170px">
			<h4><i class="fa fa-star" aria-hidden="true" style="color: #FD463D "></i> GTU Fighter </h4>
			<h4><i class="fa fa-star" aria-hidden="true" style="color:#04FE5D "></i> Shining Stars</h4>
	</div>
</div>


<!------------------------------------Script------------------------------------------------------>

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
	