<?php
include('server.php');

// if(!empty($_POST['submit']))
// {
	$stu_id=$_SESSION['stu_id'];
			$sname=Null;

			$query5="SELECT stu_name FROM student where stu_id=$stu_id ";
			$result5=$db->query($query5);

			while ($show5=$result5->fetch_assoc()){
				$sname=$show5['stu_name'];
			}


						$setotal=0;$yse=0;$nse=0;$ajtotal=0;$yaj=0;$naj=0;$dcdrtotal=0;$ydcdr=0;$ndcdr=0;$nettotal=0;$ynet=0;$nnet=0;$wttotal=0;$ywt=0;$nwt=0;$net=0;$all=0;
				if($_SERVER['REQUEST_METHOD']=='POST')
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
									$all=$all+($yse-$nse);
									$setotal=($yse-$nse)*100/($nse+$yse);
									$setotal=round($setotal,2);
								}
								else{
									//$all=$all;
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
									$all=$all+($yaj-$naj);
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
									$all=$all+($ywt-$nwt);
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
									$all=$all+($ydcdr-$ndcdr);
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
									$all=$all+($ynet-$nnet);
									$nettotal=($ynet-$nnet)*100/($nnet+$ynet);
									$nettotal=round($nettotal,2);
								}
								else{
									$nettotal=0;
								}
							}
							
						}
						$all=($nettotal+$setotal+$dcdrtotal+$wttotal+$ajtotal)/5;
						// $all=($ynet-$nnet+$ydcdr-$ndcdr+$ywt-$nwt+$yaj-$naj+$yse-$nse)*100/($nnet+$ynet+$ndcdr+$ydcdr+$nwt+$ywt+$naj+$yaj+$nse+$yse);
						// $all=74;	
						$all=round($all,2);	
				// }
							
							

	require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);

$pdf->Cell(0,10,"Attendance Report",1,1,'C');
$pdf->Cell(0,10,"",0,1);
$pdf->Cell(0,10,"Name : {$sname} ",0,1);
$pdf->Cell(0,10,"Enrollment No : {$stu_id} ",0,1);
$pdf->Cell(0,10,"From Date: {$date}",0,1);
$pdf->Cell(0,10,"TO Date: {$edate}",0,1);

$pdf->Cell(0,10,"",0,1);
$pdf->Cell(0,10,"",0,1);

$pdf->Cell(50,10,"Subject Name",1,0);
$pdf->Cell(50,10,"Attendance",1,1);

$pdf->Cell(50,10,"SE",1,0);
$pdf->Cell(50,10,"{$setotal}%",1,1);

$pdf->Cell(50,10,"AJ",1,0);
$pdf->Cell(50,10,"{$ajtotal}%",1,1);

$pdf->Cell(50,10,".Net",1,0);
$pdf->Cell(50,10,"{$nettotal}%",1,1);

$pdf->Cell(50,10,"DCDR",1,0);
$pdf->Cell(50,10,"{$dcdrtotal}%",1,1);

$pdf->Cell(50,10,"WT",1,0);
$pdf->Cell(50,10,"{$wttotal}%",1,1);

$pdf->Cell(0,10,"",0,1);

$pdf->Cell(55,10,"Overall Attendance",1,0);
$pdf->Cell(50,10,"{$all}%",1,1);



$pdf->output();
}

?>