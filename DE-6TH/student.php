<?php include('server.php')?>
<?php include('style.php')?>
<?php $stu_id=$_SESSION['stu_id'];
	

			$query="SELECT * FROM student where stu_id=$stu_id";
			$result=$db->query($query);

			while($row = mysqli_fetch_array($result)){
				$stu_name=$row['stu_name'];
			 }
?>
<?php static $atotal=0, $ayes=0,$ano=0,$jtotal=0, $jyes=0,$jno=0,$ctotal=0, $cyes=0,$cno=0,$stotal=0, $syes=0,$sno=0; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Page</title>
</head>
<body style="background-color: #EFF4FA">

	<div class="profnav" style="font-family: 'Times New Roman', Times, serif;background-color: #039BE5">
		<div class="up" >
			<i class="fa fa-user-circle" aria-hidden="true"><span style="color: #888888">STUDEN</span></i>
			<div>
				<h2><?php echo $stu_name ?></h2>
			</div>
		</div>
		<a onclick="openf(event,'home')" id="defaultOpen" class="tablink"><i class="fa fa-home" aria-hidden="true"> Home</i></a>
		<a onclick="openf(event,'today')" class="tablink"><i class="fa fa-calendar" aria-hidden="true"> See Attendance</i></a>
		<a onclick="openf(event,'report')" class="tablink"><i class="fa fa-calendar" aria-hidden="true"> Generate Report</i></a>
		<a onclick="openf(event,'academic')" class="tablink"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Academic Calendar</i></a>
		<a onclick="openf(event,'midSem')" class="tablink"><i class="fa fa-file-excel-o" aria-hidden="true"></i></i> Mid Marks</i></a>
		<a onclick="openf(event,'material')" class="tablink"><i class="fa fa-book" aria-hidden="true"></i> Material</a>
		<a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></a>
	</div>

<!----------------------------------------Home Page-------------------------------------------------------->

	<div id="home" class="profmain">
	<center>
		<h2 style="margin-top: 50px"><u>6IT Time-Table</u></h2>
		<table style="text-align: center;margin-top: 50px" border="1px" cellpadding="1" cellspacing="0">

		<tr>
			<th>Time/Day</th>
			<th>Monday</th>
			<th>Tuesday</th>
			<th>Wednesday</th>
			<th>Thursday</th>
			<th>Friday</th>
		</tr>

		<tr>
			<td>10:00-10:50</td>
			<td>WT-PAPA</td>
			<td>DCDR-TBP</td>
			<td>SE-JJ</td>
			<td>SE-JJ</td>
			<td>.NET-YRP</td>
		</tr>

		<tr>
			<td>10:50-11:40</td>
			<td rowspan="2" >WT-A-ARK<br>AJ-B-RLP</td>
			<td>WT-PAP</td>
			<td>WT-PAP</td>
			<td>DCDR-TBP</td>
			<td>AJ-RLP</td>
		</tr>

		<tr>
			<td>11:40-12:30</td>
			<td >Software<br>Session</td>
			<td>.NET-YRP</td>
			<td >SE-PS-JJ</td>
			<td>AJ-RLP</td>
		</tr>

		<tr>
			<td>01:20-02:10</td>
			<td>SE-JJ</td>
			<td>.NET-YRP</td>
			<td>DCDR-TBP</td>
			<td rowspan="2">DE-2B-SJ</td>
			<td>DCDR-TBP</td>
		</tr>

		<tr>
			<td>02:10-03:00</td>
			<td>DE-2B</td>
			<td>.NET-YRP</td>
			<td>SE-JJ</td>
			<td>WT-PAP</td>
		</tr>

		<tr>
			<td>03:20-04:10</td>
			<td>AJ-RLP</td>
			<td rowspan="2" >SE-A-JJ<br>.NET-B-YRP</td>
			<td rowspan="2" >DCDR-A-TBP<br>WT-B-ARK</td>
			<td rowspan="2" >AJ-A-RLP<br>DCDR-B-TBP</td>
			<td rowspan="2" >.NET-A-YRP<br>SE-B-JJ</td>
		</tr>

		<tr>
			<td>04:10-04:30</td>
			<td>AJ-RLP</td>
		</tr>

		<!-- <tr><td colspan="6"><br></td></tr> -->

		<!---------------------Teacher Details------------------------------------------------->

		<!-- <tr style="text-align: center;">
			<th colspan="2"></th>
			<th>Subject Name</th>
			<th colspan="3">Name of Teacher</th>
		</tr>

		<tr style="text-align: left;">
			<td colspan="2">HOD</td>
			<td>SE</td>
			<td>JJ</td>
			<td colspan="2">Prof. Jaimin Jani</td>
		</tr>

		<tr style="text-align: left;">
			<td colspan="2"></td>
			<td>AJ</td>
			<td>RLP</td>
			<td colspan="2">Prof. Ravindra Patel</td>
		</tr>

		<tr style="text-align: left;">
			<td colspan="2">Co-ordinator</td>
			<td>DCDR</td>
			<td>TBP</td>
			<td colspan="2">Prof. Tejas Patel</td>
		</tr>

		<tr style="text-align: left;">
			<td colspan="2"></td>
			<td>WT</td>
			<td>ARK,PAP</td>
			<td colspan="2">Prof.Akshay Kansara,Prof.Parimal Patel</td>
		</tr>

		<tr style="text-align: left;">
			<td colspan="2">Principal</td>
			<td>.NET</td>
			<td>YRP</td>
			<td colspan="2">Prof. Yagnesh Patel</td>
		</tr>

		<tr style="text-align: left;">
			<td colspan="2"></td>
			<td>DE-2B</td>
			<td>SJ</td>
			<td colspan="2">Prof. Sarfraz Jarda</td>
		</tr>

		<tr style="text-align: left;">
			<td colspan="2">Date</td>
			<td>Software<br>Session</td>
			<td>EKJ</td>
			<td colspan="2">Prof. Ekta Joshi</td>
		</tr> -->
	</table>
	</center>
	</div>

	<!--------------------------Mid Sem------------------------>
	<div id="midSem" class="profmain">
		<center>
			<h2><u>Mid Sem Marks</u></h2>
			<table style="margin-top: 50px">
			<tr>
				<th>Sr No.</th>
				<th>Subject Name</th>
				<th>Mid 1 Marks</th>
				<th>GTU Fighter/<br>Shining Stars</th>
			</tr>
		<?php
		$sr=0;
			$query="SELECT * FROM marks_mid_6it";
			$result=$db->query($query);

			while($show=$result->fetch_assoc())
			{
				
				if($stu_id==$show['stu_id'] && $show['mid1_marks']>"30")
				{
					$sr++;
					?>
					<tr>
					<td><?php echo $sr;?></td>
					<td><?php echo $show['sub_name']; ?></td>
					<td><?php echo $show['mid1_marks']; ?></td>
					<td><i class="fa fa-star" aria-hidden="true" style="color: #04FE5D"></i></td>
				    </tr>
				<?php 
				}
				elseif($stu_id==$show['stu_id'] && $show['mid1_marks']<="30")
				{
					$sr++;
					?>
					<tr>
						<td><?php echo $sr;?></td>
						<td><?php echo $show['sub_name']; ?></td>
						<td><?php echo $show['mid1_marks']; ?></td>
						<td><i class="fa fa-star" aria-hidden="true" style="color: #FD463D"></i></td>
					</tr>
		<?php   }
			}
			$sr=0;
		?>
	</table>
		</center>
		<br>
		<div>
			<h4 style="margin-left: 170px"><i class="fa fa-star" aria-hidden="true" style="color: #FD463D; "></i> GTU Fighter</h4>
			<h4 style="margin-left: 170px"><i class="fa fa-star" aria-hidden="true" style="color:#04FE5D "></i> Shining Stars </h4>
		</div>
		<!-- <?php $url="marks_chart.php?stu_id=".$stu; ?> -->
		<!-- <form method="post">
			<input type="text" name="stu_id">
			<input type="submit"  value="Chart Form" class="btn" name="ChArt" style="width: 170px;margin-left: 170px">
		</form> -->
		<a href="marks_chart.php"><input type="submit"  value="Chart Form" class="btn" name="ChArt" style="width: 170px;margin-left: 170px"></a>
	</div>

	<!-----------------------------Academic Calendar------------------->
	<div id="academic" class="profmain">
		<center>
			<iframe src="Academic.pdf" width="900px" height="600px" style="margin-top: 0px"></iframe>
		</center>
	</div>


	<!-------------------------------------Attendance-------------------------------------------------------------->

	
	<div id="today" class="profmain">
		<!--<form method="post">
			<div class="textbox">
				<h3>Enrollment No:</h3><?php echo $en_no; ?>
			</div>
			<label><b>Enter Start Date:</b></label>
			<div class="textbox">
				
				<input type="text" name="date_start" placeholder="dd-mm-yy">
			</div>
			<label><b>Enter End Date:</b></label>
			<div class="textbox">
				
				<input type="text" name="date_end" placeholder="dd-mm-yy">
			</div>

			<input onclick="takedate(event,'date_start','date_end')" type="submit" name="taken" value="Submit" class="btn" style="width: 100px;">
		</form>-->

		<form method="post">
			<label><b>Enter Start Date:</b></label>
			<div class="textbox">
				<input type="text" name="date_start" placeholder="dd-mm-yy" required="">
			</div>

			<label><b>Enter End Date:</b></label>
			<div class="textbox">
				<input type="text" name="date_end" placeholder="dd-mm-yy" required="">
			</div>

			<input type="submit" value="Submit" class="btn" formtarget="_top" name="enterDate" style="width: 10%;">

		</form>
			
			<table>
			<thead>
				
				<tr>
					<th>Sr. No.</th>
					<th>AJ</th>
					<th>DCDR</th>
					<th>SE</th>
					<th>WT</th>
					<th>.NET</th>
				</tr>

			</thead>

			<tbody>

			<?php
				$setotal=0;$yse=0;$nse=0;$ajtotal=0;$yaj=0;$naj=0;$dcdrtotal=0;$ydcdr=0;$ndcdr=0;$nettotal=0;$ynet=0;$nnet=0;$wttotal=0;$ywt=0;$nwt=0;$net=0;$sr=0;
				if(isset($_POST['enterDate']))
				{

					$date=$_POST['date_start'];
						$edate=$_POST['date_end'];

						$query="SELECT * FROM se_6it where stu_id=$stu_id ";
						$result=$db->query($query);

						$query1="SELECT * FROM aj_6it where stu_id=$stu_id ";
						$result1=$db->query($query1);

						$query2="SELECT * FROM wt_6it where stu_id=$stu_id ";
						$result2=$db->query($query2);

						$query3="SELECT * FROM dcdr_6it where stu_id=$stu_id ";
						$result3=$db->query($query3);

						$query4="SELECT * FROM net_6it where stu_id=$stu_id ";
						$result4=$db->query($query4);
				
				/*--------------------For SE--------------------------*/
						while ($show=$result->fetch_assoc())
						{
							$sr++;
							if($date<= $show['se_6it_date'] && $edate>=$show['se_6it_date'])
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
							
						}

				/*--------------------For AJ--------------------------*/
						while ($show1=$result1->fetch_assoc())
						{
							if($date<= $show1['aj_6it_date'] && $edate>=$show1['aj_6it_date'])
							{
								if($show1['aj_6it_value']=="1")
								{
									$yaj++;
								}
								elseif($show1['aj_6it_value']=="0")
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
							
						}

				/*--------------------For WT--------------------------*/
						while ($show2=$result2->fetch_assoc())
						{
							if($date== $show2['wt_6it_date'] && $edate>=$show2['wt_6it_date'])
							{
								if($show2['wt_6it_value']=="1")
								{
									$ywt++;
								}
								elseif($show2['wt_6it_value']=="0")
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
							
						}
					
				/*--------------------For DCDR--------------------------*/
						while ($show3=$result3->fetch_assoc())
						{
							if($date<= $show3['dcdr_6it_date'] && $edate>=$show3['dcdr_6it_date'])
							{
								if($show3['dcdr_6it_value']=="1")
								{
									$ydcdr++;
								}
								elseif($show3['dcdr_6it_value']=="0")
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
							
						}

				/*--------------------For .NET--------------------------*/
						while ($show4=$result4->fetch_assoc())
						{
							if($date<= $show4['net_6it_date'] && $edate>=$show4['net_6it_date'])
							{
								if($show4['net_6it_value']=="1")
								{
									$ynet++;
								}
								elseif($show4['net_6it_value']=="0")
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
				}

			?>

			<tr>
				<td style="width: 70px"><?php echo $sr;?></td>
				<td><?php echo $ajtotal,"%";?></td>
				<td><?php echo $dcdrtotal,"%";?></td>
				<td><?php echo $setotal,"%";?></td>
				<td><?php echo $wttotal,"%";?></td>
				<td><?php echo $nettotal,"%";?></td>
			</tr>
				<?php $sr=0;?>
			<!--<?php
			$avalue=0;
			$atol=0;$atotal=0;
			if(isset($_POST['EnterDate'])){
						$date=$_POST['date_start'];
						$edate=$_POST['date_end'];

						$query="SELECT * FROM se_6it where stu_id=$stu_id ";
						$result=$adb->query($query);
				
						while ($show=$result->fetch_assoc()){
								
								if( $show['ada_date']<=$edate)
								{
									
									if($show['ada_value']=='Present')
									{
										$ayes++;
									}
									else if($show['ada_value']=='Abssent')
									{
										$ano++;
									}
								}
								/*-------for JAVA--------------*/
								if( $show['java_date']<=$edate)
								{
									
									
									if($show['java_value']=='Present')
									{
										$jyes++;
									}
									else if($show['java_value']=='Abssent')
									{
										$jno++;
									}
								}

								/*---------for CG------------*/
								if( $show['cg_date']<=$edate)
								{
									
									
									if($show['cg_value']=='Present')
									{
										$cyes++;
									}
									else if($show['cg_value']=='Abssent')
									{
										$cno++;
									}
								}

								/*-----------------for SP-----------------*/
								if( $show['sp_date']<=$edate)
								{
									
									
									if($show['sp_value']=='Present')
									{
										$syes++;
									}
									else if($show['sp_value']=='Abssent')
									{
										$sno++;
									}
								}

								if($ayes>=$ano && $ano+$ayes>0){
									$atotal=($ayes-$ano)*100/($ano+$ayes);
								}
								else{
									$atotal=0;
								}

								if($jyes>=$jno && $jno+$jyes>0){
									$jtotal=($jyes-$jno)*100/($jno+$jyes);
								}
								else{
									$jtotal=0;
								}

								if($cyes>=$cno && $cno+$cyes>0){
									$ctotal=($cyes-$cno)*100/($cno+$cyes);
								}
								else{
									$ctotal=0;
								}

								if($syes>=$sno && $sno+$syes>0){
									$stotal=($syes-$sno)*100/($sno+$syes);
								}
								else{
									$stotal=0;
								}
							
							
							?><?php }}?>	
						<tr>
							<td><?php echo $atotal,"%";?></td>
							<td><?php echo $jtotal,"%";?></td>
							<td><?php echo $ctotal,"%";?></td>
							<td><?php echo $stotal,"%";?></td>
						</tr>
								
						------------>
			</tbody>
		</table>
		

	</div>

	<!---<script class="profmain">
		function takedate(event,date_start,date_end)
		{
			var date_start="date_start";
			<?php echo "$date_start" ?>

		}
	</script>--->

	</div>

	<!-----------------------------------------Report-------------------------->
	<div id="report" class="profmain">
		<form method="post" action="form.php">
			<label><b>Enter Start Date:</b></label>
			<div class="textbox">
				<input type="text" name="date_start" placeholder="dd-mm-yy">
			</div>

			<label><b>Enter End Date:</b></label>
			<div class="textbox">
				<input type="text" name="date_end" placeholder="dd-mm-yy">
			</div>

			<input type="submit" value="Submit" name="submit" class="btn" style="width: 10%;">

		</form>

		

		<script class="profmain">
		function takedate(event,date_start,date_end)
		{
			var date_start="date_start";
			<?php echo "$date_start" ?>

		}
	</script>
		
	</div>

<!---------------------------Material------------------------------------->
	<div id="material" class="profmain">
		<form method="post" class="login-box" style="margin-left: 150px;width: 400">
			<h2 style="text-align: center;margin-top: 20px">Uploaded Materials</h2>
			<hr>
			<div style="margin-top: 70px">
				<b>Select File</b> <select name="material" style="border: 1px solid #03A9F4; padding: 2px; font-size: 16px;">
				<?php
						$query="SELECT * FROM material";
						$result=$db->query($query);

						while($show=$result->fetch_assoc())
						{?>
							<option  value="<?php $show['file_name'];?>"><?php echo $show['file_name'];?></option>
						<?php }
					?>
		
			</select>
			<?php
				if(isset($_POST['search']))
				{
					$fname=$_POST['material'];

					if(file_exists('upload/'.$fname))
					{
						
						echo '<iframe src="upload/.$fname.pdf"></iframe>';
					}
				}
			?>
			</div>
			<center>
				<br>
				<input type="submit" name="search" class="btn" style="width: 100px;">
			</center>
		</form>
	</div>


	<!----------------------------------------------Script------------------------------------------------------------->

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