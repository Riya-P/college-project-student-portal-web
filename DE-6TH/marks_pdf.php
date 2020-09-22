<?php
include('server.php');

// if(!empty($_POST['submit']))
// {
	$prof_id=$_SESSION['prof_id'];
			$sub_name=Null;
			$prof_name=NULL;
			$code=NULL;
	$qu="SELECT * FROM sub_6it WHERE prof_id='$prof_id'";
	$re=$db->query($qu);

	while($show=$re->fetch_assoc())
	{
		$sub_name=$show['sub_name'];	
		$code=$show['sub_cod'];	
	}

	$qu="SELECT * FROM prof WHERE prof_id='$prof_id'";
	$re=$db->query($qu);

	while($show=$re->fetch_assoc())
	{
		$prof_name=$show['prof_name'];		
	}



				if($_SERVER['REQUEST_METHOD']=='POST')
				{
							

					require("fpdf/fpdf.php");
					$pdf=new FPDF();
					$pdf->AddPage();
					$pdf->SetFont("Arial","",16);

					$pdf->Cell(0,10,"Mid Report",1,1,'C');
					$pdf->Cell(0,10,"",0,1);

					$pdf->Cell(0,10,"Professor Name: {$prof_name}",0,1);
					$pdf->Cell(0,10,"Subject Name/Department: {$sub_name}",0,1);
					$pdf->Cell(0,10,"Subject Code: {$code}",0,1);

					$pdf->Cell(0,10,"",0,1);
					$pdf->Cell(0,10,"",0,1);

					$pdf->Cell(50,10,"Enrollment No.",1,0);
					$pdf->Cell(50,10,"Student Name",1,0);
					$pdf->Cell(50,10,"Mid 1 Marks",1,1);

					$qe="SELECT * FROM marks_mid_6it WHERE sub_name='$sub_name'";
					$re=$db->query($qe);

					$stuName=Null;$stuEnno=NULL;$mr=0;
					while($show=$re->fetch_assoc())
					{
						$stuEnno=$show['stu_id'];
						$stuName=$show['stu_name'];
						$mr=$show['mid1_marks'];

						$pdf->Cell(50,10,"{$stuEnno}",1,0);
						$pdf->Cell(50,10,"{$stuName}",1,0);
						$pdf->Cell(50,10,"{$mr}",1,1);
					}

$pdf->output();
}

?>