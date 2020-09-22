<?php include('server.php')?>
<?php include('style.php')?>
<?php 
		$prof_id=$_SESSION['prof_id'];
		

		$query="SELECT * FROM prof where prof_id=$prof_id";
			$result=$db->query($query);

			while($row = mysqli_fetch_array($result)){
				$prof_name=$row['prof_name'];
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
			<i class="fa fa-user-circle" aria-hidden="true"><span style="color: #888888">Professor</span></i>
			<div>
				<h2><?php echo $prof_name ?></h2>
			</div>
		</div>
		
		<a onclick="openf(event,'home')" id="defaultOpen" class="tablink"><i class="fa fa-home" aria-hidden="true"> Home</i></a>
		<a onclick="openf(event,'addStudent')" class="tablink"><i class="fa fa-user-plus" aria-hidden="true"> Add Student</i></a>
		<a onclick="openf(event,'takeAttendance')" class="tablink"><i class="fa fa-calendar" aria-hidden="true"> Take Attendance</i></a>
		<a onclick="openf(event,'academic')" class="tablink"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Academic Calendar</a>
		<a onclick="openf(event,'editAttendance')" class="tablink"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit Attendance</a>
		<a onclick="openf(event,'seeAtten')" class="tablink"><i class="fa fa-calendar-o" aria-hidden="true"></i>Check Attendance</a>
		<a onclick="openf(event,'midSem')" class="tablink"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Mid Marks</i></a>
		<a onclick="openf(event,'material')" class="tablink"><i class="fa fa-book" aria-hidden="true"></i> Material</a>
		<!-- <a href="forgotPass.php">Change Password</a> -->
		<a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></a>
		
	</div>

<!--------------------------------------------------Home page---------------------------------------------------------->

	<div id="home" class="profmain" >
		<center>

		<!--------For RavindraSir AJ----------------->
		<?php 
			if($prof_id=="102"){
		?>
		<table style="text-align:center" >
			<tr>
				<th>LEC</th>
				<th>TIME</th>
				<th>MON</th>
				<th>TUE</th>
				<th>WED</th>
				<th>THU</th>
				<th>FRI</th>
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
				<td>AJ-B-6IT</td>
				<td>AJ-6CE</td>
				<td>AJ-6CE</td>
				<td>SS-4IT</td>
				<td>AJ-A-6CE</td>
			</tr>

			<tr>
				<td>3</td>
				<td>11:10 - 12:00</td>
				<td>AJ-B-6IT</td>
				<td>AJ-6CE</td>
				<td>AJ-6CE</td>
				<td>SS-4IT</td>
				<td>AJ-A-6CE</td>
			</tr>

			<tr>
				<td>4</td>
				<td>12:50 - 01:40</td>
				<td>-</td>
				<td>-</td>
				<td>AJ-C-6CE</td>
				<td>-</td>
				<td>AJ-6IT</td>
			</tr>

			<tr>
				<td>5</td>
				<td>01:40 - 02:30</td>
				<td>-</td>
				<td>-</td>
				<td>AJ-C-6CE</td>
				<td>-</td>
				<td>AJ-6IT</td>
			</tr>

			<tr>
				<td>6</td>
				<td>02:50 - 03:40</td>
				<td>AJ-6IT</td>
				<td>AJ-B-6CE</td>
				<td>WT-B-6IT</td>
				<td>AJ-A-6IT</td>
				<td>-</td>
			</tr>

			<tr>
				<td>7</td>
				<td>03:40 - 04:30</td>
				<td>AJ-6IT</td>
				<td>AJ-B-6CE</td>
				<td>WT-B-6IT</td>
				<td>AJ-A-6IT</td>
				<td>-</td>
			</tr>

	</table>
	<?php }

		if($prof_id=="101"){
	?>
	<!----------------------For JaiminSir----------------->

	<table style="text-align:center" >

<tr>
<th>LEC</th>
<th>TIME</th>
<th>MON</th>
<th>TUE</th>
<th>WED</th>
<th>THU</th>
<th>FRI</th>
</tr>

<tr>
<td>1</td>
<td>09:30 - 10:20</td>
<td>OOP-4IT</td>
<td>AI-8CEIT</td>
<td>SE-6IT</td>
<td>SE-6IT</td>
<td>OOP-4IT</td>
</tr>

<tr>
<td>2</td>
<td>10:20 - 11:10</td>
<td>AI-8CEIT</td>
<td>-</td>
<td>OOP-A-4IT</td>
<td>OOP-4IT</td>
<td>-</td>
</tr>

<tr>
<td>3</td>
<td>11:10 - 12:00</td>
<td>-</td>
<td>-</td>
<td>OOP-A-4IT</td>
<td>SE-PS-6IT</td>
<td>-</td>
</tr>

<tr>
<td>4</td>
<td>12:50 - 01:40</td>
<td>SE-6IT</td>
<td>DE-1B-4IT</td>
<td>-</td>
<td>-</td>
<td>OOP-4IT</td>
</tr>

<tr>
<td>5</td>
<td>01:40 - 02:30</td>
<td>-</td>
<td>OOP-4IT</td>
<td>SE-6IT</td>
<td>-</td>
<td>-</td>
</tr>

<tr>
<td>6</td>
<td>02:50 - 03:40</td>
<td>AI-A-8CEIT</td>
<td>SE-A-6IT</td>
<td>-</td>
<td>OOP-B-4IT</td>
<td>SE-B-6IT</td>
</tr>

<tr>
<td>7</td>
<td>03:40 - 04:30</td>
<td>AI-A-8CEIT</td>
<td>SE-A-6IT</td>
<td>OOP-PS-4IT</td>
<td>OOP-B-4IT</td>
<td>SE-B-6IT</td>
</tr>

</table>

		<?php }
			if($prof_id=="103"){
		?>
		<!------------------------For ParimalSir--------------------->
		<table border='1' cellspacing=0 align="center" style="text-align:center" >

<tr>
<th>LEC</th>
<th>TIME</th>
<th>MON</th>
<th>TUE</th>
<th>WED</th>
<th>THU</th>
<th>FRI</th>
</tr>

<tr>
<td>1</td>
<td>09:30 - 10:20</td>
<td>WT-6IT</td>
<td>-</td>
<td>PEM-4CE</td>
<td>PEM-4CE</td>
<td>SE-6CE</td>
</tr>

<tr>
<td>2</td>
<td>10:20 - 11:10</td>
<td>-</td>
<td>WT-6IT</td>
<td>WT-6IT</td>
<td>SE-C-6CE</td>
<td>-</td>
</tr>

<tr>
<td>3</td>
<td>11:10 - 12:00</td>
<td>SE-6CE</td>
<td>-</td>
<td>-</td>
<td>SE-C-6CE/IT</td>
<td>WT-6IT</td>
</tr>

<tr>
<td>4</td>
<td>12:50 - 01:40</td>
<td>-</td>
<td>-</td>
<td>SE-B-6CE</td>
<td>-</td>
<td>-</td>
</tr>

<tr>
<td>5</td>
<td>01:40 - 02:30</td>
<td>-</td>
<td>-</td>
<td>SE-B-6CE</td>
<td>PEM-PS-4CE</td>
<td>-</td>
</tr>

<tr>
<td>6</td>
<td>02:50 - 03:40</td>
<td>SE-6CE</td>
<td>SE-A-6CE</td>
<td>-</td>
<td>-</td>
<td>PEM-4CE</td>
</tr>

<tr>
<td>7</td>
<td>03:40 - 04:30</td>
<td>SS-6CE</td>
<td>SE-A-6CE</td>
<td>SE-PS-6CE</td>
<td>-</td>
<td>SE-6CE</td>
</tr>

</table>
		<?php }
			if($prof_id=="105"){
		?>

		<!-----------------For TejasSir-------------------->
		<table border='1' cellspacing=0 align="center" style="text-align: center;">
<tr>
<th>LEC</th>
<th>TIME</th>
<th>MON</th>
<th>TUE</th>
<th>WED</th>
<th>THU</th>
<th>FRI</th>
</tr>

<tr>
<td>1</td>
<td>09:30-10:20</td>
<td>WDM-8CEIT</td>
<td>DCDR-6IT</td>
<td>WT-6CE</td>
<td>-</td>
<td>-</td>
</tr>

<tr>
<td>2</td>
<td>10:20-11:10</td>
<td>WT-6CE</td>
<td>WDM-C-8CEIT</td>
<td>-</td>
<td>DCDR-6IT</td>
<td>DCDR-6IT</td>
</tr>

<tr>
<td>3</td>
<td>11:10-12:00</td>
<td>-</td>
<td>WDM-C-8CEIT</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>

<tr>
<td>4</td>
<td>12:50-01:40</td>
<td>WDM-8CEIT</td>
<td>-</td>
<td>DCDR-6IT</td>
<td>DE-2B-6CE</td>
<td>-</td>
</tr>

<tr>
<td>5</td>
<td>01:40-02:30</td>
<td>-</td>
<td>WDM-8CEIT</td>
<td>-</td>
<td>DE-2B-6CE</td>
<td>WT-6CE</td>
</tr>

<tr>
<td>6</td>
<td>02:50-03:40</td>
<td>-</td>
<td>-</td>
<td>DCDR-A-6IT</td>
<td>DCDR-B-6IT</td>
<td>WT-6CE</td>
</tr>

<tr>
<td>7</td>
<td>03:40-04:30</td>
<td>-</td>
<td>-</td>
<td>DCDR-A-6IT</td>
<td>DCDR-B-6IT</td>
<td>-</td>
</tr>

</table>
		<?php }
			if($prof_id=="104"){
		?>

		<!-----------For YagneshSir------------------>
		<table border='1' cellspacing=0 align="center" style="text-align:center">
<tr>
<th>LEC</th>
<th>TIME</th>
<th>MON</th>
<th>TUE</th>
<th>WED</th>
<th>THU</th>
<th>FRI</th>
</tr>

<tr >
<td>1</td>
<td>09:30 - 10:20</td>
<td>OS-4CE</td>
<td>OS-4CE</td>
<td>PEM-4IT</td>
<td>PEM-4IT</td>
<td>.NET-6IT</td>
</tr>

<tr>
<td>2</td>
<td>10:20 - 11:10</td>
<td>OS-A-4CE</td>
<td>PEM-4IT</td>
<td>-</td>
<td>-</td>
<td>OS-4CE</td>
</tr>

<tr>
<td>3</td>
<td>11:10 - 12:00</td>
<td>OS-A-4CE</td>
<td>-</td>
<td>.NET-6IT</td>
<td>-</td>
<td>-</td>
</tr>

<tr>
<td>4</td>
<td>12:50 - 01:40</td>
<td>-</td>
<td>.NET-6IT</td>
<td>-</td>
<td>PEM-PS-4IT</td>
<td>OS-C-4CE</td>
</tr>

<tr>
<td>5</td>
<td>01:40 - 02:30</td>
<td>-</td>
<td>.NET-6IT</td>
<td>OS-4CE</td>
<td>-</td>
<td>OS-C-4CE</td>
</tr>

<tr>
<td>6</td>
<td>02:50 - 03:40</td>
<td>-</td>
<td>.NET-B-6IT</td>
<td>OS-B-4CE</td>
<td>-</td>
<td>.NET-A-6IT</td>
</tr>

<tr>
<td>7</td>
<td>03:40 - 04:30</td>
<td>OS-PS-4CE</td>
<td>.NET-B-6IT</td>
<td>OS-B-4CE</td>
<td>-</td>
<td>.NET-A-6IT</td>
</tr>

</table>
		<?php }
		?>

</center>

	<!--	<table>
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
					$query="SELECT * FROM sub_6it, 6it where prof_id='$prof_id'";
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
		</table>--->

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
		<form method="POST">
			<label><b>Enter Start Date:</b></label>
			<div class="textbox">
				<input type="text" name="date_start" placeholder="dd-mm-yy" required="">
			</div>

			<input type="submit" value="Submit" class="btn" name="Mdate" style="width: 10%;">

			<?php 
			$date_start=NULL;
			if(isset($_POST['Mdate'])){
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

					$query1="SELECT * FROM se_6it WHERE prof_id='$prof_id'";
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
									  	echo '<input type="checkbox" name="attendance[$show[stu_id]] value="1" />';
									  	// console.log("1")
									  }


								 ?></td>
							 
					
				</tr>
				</tbody>

				<?php }}

				if(isset($_POST['mAtten'])){
					$at=$_POST['attendance'];
					echo $date_start;
					$query="SELECT * FROM attendance";
					$result=$db->query($query);

					while($show=$result->fetch_assoc())
					{
						$estu_id=$show['stu_id'];
						foreach($at as $key=>$cg_value)
						{
							echo $cg_value;
							if($cg_value=="1" && $estu_id==$key)
							{


								$query1="UPDATE attendance SET cg_value='1' where stu_id='$key' AND cg_date='$date_start'";
								$result1=$db->query($query1);
							}
							elseif($estu_id==$key)
							{

								// echo " hiiiii";
								$query1="UPDATE attendance SET cg_value='1' where stu_id='$key' AND cg_date='$date_start'";
								$result1=$db->query($query1);
							}
						}
					}
					if($result1)
					{
						echo '<script> alert("Updated Attendance Successfuly"); </script>';
					}
			
			}

		}
					
			?>
		</table>
			<input type="submit" value="Take Attendance" class="btn" name="mAtten" style="width: 20%; margin-left: 15%; margin-top: 4%">
		</form>
	</center>
	
</div>
<!------------------------------------See Attendance------------------------>
<div id="seeAtten" class="profmain">
	
		<form method="post">
			<label><b>Enter Start Date:</b></label>
			<div class="textbox">
				<input type="text" name="date_start" placeholder="dd-mm-yy" required="">
			</div>

			<label><b>Enter End Date:</b></label>
			<div class="textbox">
				<input type="text" name="date_end" placeholder="dd-mm-yy" required="">
			</div>

			<input type="submit" value="Submit" class="btn" name="enterDate" style="width: 10%;">

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
				$query12="SELECT * FROM sub_6it WHERE prof_id='$prof_id'";
				$result12=$db->query($query12);

				while ($show12=$result12->fetch_assoc()) {
					$fsub=$show12['sub_name'];
				}

				if($fsub=='SE-6IT')
				{

					$query="UPDATE achart SET SE_6IT='$setotal' WHERE stu_id=$tstu_id";
					$result=$db->query($query);
					// $url1="chart.php?fsub=".$fsub;
					// header('location: chart.php?');
				}

				elseif($fsub=='AJ-6IT')
				{
					$query="UPDATE achart SET AJ_6IT='$ajtotal' WHERE stu_id=$tstu_id";
					$result=$db->query($query);
				}

				elseif($fsub=='WT-6IT')
				{
					// echo "hiiii";
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

	<a href="chart.php"><button class="btn" style="width: 150px">For Chart</button></a>

	<!-- <?php
		if(isset($_POST['cHart']))
		{

		}
	?> -->

	<!-- <button class="btn" style="width: 100px;" name="cHart">Chart</button> -->

</div>


<!-----------------------------------------------AddStudent------------------------------------------------------------->

	<div id="addStudent" class="profmain">
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
	</div>


<!----------------------------------------Take Attendance--------------------------------------------------------------->

	<div id="takeAttendance" class="profmain">
		
		<center>
			<!----------attendance Table---------->

		<form method="POST" style="margin-top: 10%">
		<table>
			
			<thead>
				
				<tr>
					<th>Enronnment No.</th>
					<th>Name</th>
					<th>Attendance</th>
				</tr>

			</thead>

			<tbody>
				
				<tr>
					<?php
					
					$query="SELECT * FROM student";
					$result=$db->query($query);
					while ($show=$result->fetch_assoc()){
						
				?>
					<td><?php echo $show['stu_id'];?></td>
					<td><?php echo $show['stu_name'];?></td>

					

					<td>Present<input type="radio" name="se_6it[<?php echo $show['stu_id']?>]" value="Present">Abssent<input type="radio" name="se_6it[<?php echo $show['stu_id']?>]" value="Abssent"></td>
					
				</tr>
			<?php 
					}
			?>

			</tbody>
			
			
			<?php
				$query="SELECT * FROM sub_6it WHERE prof_id=$prof_id";
				$result=$db->query($query);

				while($show=$result->fetch_assoc())
				{
					$sub=$show['sub_name'];
				}
				
		/*----------------------------------------for SE------------------------------------*/	
				if($sub=='SE-6IT'){
					if(isset($_POST['TakeAtten'])){
						$at=$_POST['se_6it'];
						$se_6it_date=date('d-m-y');

						$query="SELECT DISTINCT se_6it_date FROM se_6it";
						$result=$db->query($query);
						$b=false;

						if($result->num_rows>0){
							while($check=$result->fetch_assoc()){
								if($se_6it_date==$check['se_6it_date']){
									$b=true;
									echo "Attendance already taken.";
								}
							}
						}

						if(!$b){
							foreach($at as $key=>$se_6it_value){

								if($se_6it_value=="Present"){

									$query="INSERT INTO se_6it(stu_id,se_6it_value,se_6it_date) values('$key','1','$se_6it_date')";
									$inserResult=$db->query($query);
								}
								else{
									$query="INSERT INTO se_6it(stu_id,se_6it_value,se_6it_date) values('$key','0','$se_6it_date')";
									$inserResult=$db->query($query);
								}
							}

							if($inserResult){
								echo "Attendance taken successfuly";
							}
						}
		
					}
				}

		/*------------------For  AJ-----------------------*/
				elseif($sub=='AJ-6IT'){
					if(isset($_POST['TakeAtten'])){
						$at=$_POST['se_6it'];
						$aj_6it_date=date('d-m-y');

						$query="SELECT DISTINCT aj_6it_date FROM aj_6it";
						$result=$db->query($query);
						$b=false;

						if($result->num_rows>0){
							while($check=$result->fetch_assoc()){
								if($aj_6it_date==$check['aj_6it_date']){
									$b=true;
									echo "Attendance already taken.";
								}
							}
						}

						if(!$b){
							foreach($at as $key=>$aj_6it_value){

								if($aj_6it_value=="Present"){

									$query="INSERT INTO aj_6it(stu_id,aj_6it_value,aj_6it_date) values('$key','1','$aj_6it_date')";
									$inserResult=$db->query($query);
								}
								else{
									$query="INSERT INTO aj_6it(stu_id,aj_6it_value,aj_6it_date) values('$key','0','$aj_6it_date')";
									$inserResult=$db->query($query);
								}
							}

							if($inserResult){
								echo "Attendance taken successfuly";
							}
						}
		
					}
				}

				/*----------------For WT--------------------*/
				elseif($sub=='WT-6IT'){
					if(isset($_POST['TakeAtten'])){
						$at=$_POST['se_6it'];
						$wt_6it_date=date('d-m-y');

						$query="SELECT DISTINCT wt_6it_date FROM wt_6it";
						$result=$db->query($query);
						$b=false;

						if($result->num_rows>0){
							while($check=$result->fetch_assoc()){
								if($wt_6it_date==$check['wt_6it_date']){
									$b=true;
									echo "Attendance already taken.";
								}
							}
						}

						if(!$b){
							foreach($at as $key=>$wt_6it_value){

								if($wt_6it_value=="Present"){

									$query="INSERT INTO wt_6it(stu_id,wt_6it_value,wt_6it_date) values('$key','1','$wt_6it_date')";
									$inserResult=$db->query($query);
								}
								else{
									$query="INSERT INTO wt_6it(stu_id,wt_6it_value,wt_6it_date) values('$key','0','$wt_6it_date')";
									$inserResult=$db->query($query);
								}
							}

							if($inserResult){
								echo "Attendance taken successfuly";
							}
						}
		
					}
				}
				/*----------------For .NET------------------------------*/

				elseif($sub=='WT-6IT'){
					if(isset($_POST['TakeAtten'])){
						$at=$_POST['se_6it'];
						$net_6it_date=date('d-m-y');

						$query="SELECT DISTINCT net_6it_date FROM net_6it";
						$result=$db->query($query);
						$b=false;

						if($result->num_rows>0){
							while($check=$result->fetch_assoc()){
								if($net_6it_date==$check['net_6it_date']){
									$b=true;
									echo "Attendance already taken.";
								}
							}
						}

						if(!$b){
							foreach($at as $key=>$net_6it_value){

								if($net_6it_value=="Present"){

									$query="INSERT INTO net_6it(stu_id,net_6it_value,net_6it_date) values('$key','1','$net_6it_date')";
									$inserResult=$db->query($query);
								}
								else{
									$query="INSERT INTO net_6it(stu_id,net_6it_value,net_6it_date) values('$key','0','$net_6it_date')";
									$inserResult=$db->query($query);
								}
							}

							if($inserResult){
								echo "Attendance taken successfuly";
							}
						}
		
					}
				}
				/*----------------For DCDR------------------------------*/

				elseif($sub=='DCDR-6IT'){
					if(isset($_POST['TakeAtten'])){
						$at=$_POST['se_6it'];
						$dcdr_6it_date=date('d-m-y');

						$query="SELECT DISTINCT dcdr_6it_date FROM dcdr_6it";
						$result=$db->query($query);
						$b=false;

						if($result->num_rows>0){
							while($check=$result->fetch_assoc()){
								if($dcdr_6it_date==$check['dcdr_6it_date']){
									$b=true;
									echo "Attendance already taken.";
								}
							}
						}

						if(!$b){
							foreach($at as $key=>$dcdr_6it_value){

								if($dcdr_6it_value=="Present"){

									$query="INSERT INTO dcdr_6it(stu_id,dcdr_6it_value,dcdr_6it_date) values('$key','1','$dcdr_6it_date')";
									$inserResult=$db->query($query);
								}
								else{
									$query="INSERT INTO dcdr_6it(stu_id,dcdr_6it_value,dcdr_6it_date) values('$key','0','$dcdr_6it_date')";
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
		<input type="submit" value="Take Attendance" class="btn" name="TakeAtten" style="width: 20%; margin-left: 15%; margin-top: 4%">
	</form>
			
	</div>

	<!-----------------------Mid Marks Excel file--------------------------------------->

	<div id="midSem" class="profmain">
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
									$query10="INSERT INTO marks(stu_id,stu_name,sub,mid1_marks) VALUES('$tstu_id','$stu_name','$sub','$mid1_marks')";
							$result10=$db->query($query10);
								}

								if($sub=="SE-6IT")
								{
									
									$query10="INSERT INTO marks(stu_id,stu_name,sub,mid1_marks) VALUES('$tstu_id','$stu_name','$sub','$mid1_marks')";
							$result10=$db->query($query10);
								}

								if($sub=="DCDR-6IT")
								{
									
									$query10="INSERT INTO marks(stu_id,stu_name,sub,mid1_marks) VALUES('$tstu_id','$stu_name','$sub','$mid1_marks')";
							$result10=$db->query($query10);
								}

								if($sub=="WT-6IT")
								{
									
									$query10="INSERT INTO marks(stu_id,stu_name,sub,mid1_marks) VALUES('$tstu_id','$stu_name','$sub','$mid1_marks')";
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
	</div>

<!-------------------------Material------------------------->
<div id="material" class="profmain">

	

		<form name="form" method="post" action="" enctype="multipart/form-data" >
			<input type="file" name="my_file" /><br /><br />
			<input type="submit" name="fileSubmit" value="Upload"/>
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

			<div >
				Materials <select>
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
	