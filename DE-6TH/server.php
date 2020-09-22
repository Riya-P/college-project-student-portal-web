<?php
session_start();

$s1='';

$errors=array();

$db=mysqli_connect('localhost','root','','de_6') or die("DB could not fount");
// $adb=mysqli_connect('localhost','root','','ex1') or die("DB could not fount");


if(isset($_POST['login_page'])){

	$id_no=mysqli_real_escape_string($db,$_POST['id_no']);
	$password=mysqli_real_escape_string($db,$_POST['password']);

	$query1="SELECT * FROM prof WHERE prof_id='$id_no' AND prof_pass='$password'";
	$result1=mysqli_query($db,$query1);
	$query2="SELECT * FROM student WHERE stu_id='$id_no' AND stu_pass='$password'";
	$result2=mysqli_query($db,$query2);
	$query3="SELECT * FROM adm WHERE adm_id='$id_no' AND adm_pass='$password'";
	$result3=mysqli_query($db,$query3);
	$query4="SELECT * FROM hod WHERE hod_id='$id_no' AND hod_pass='$password'";
	$result4=mysqli_query($db,$query4);
	
		if(mysqli_num_rows($result1)){

			$_SESSION['prof_id']=$id_no;
			$_SESSION['success']="LOGGED insuccessfully";
			header('location: tprof.php');
		}

		else if(mysqli_num_rows($result2)){

			$_SESSION['stu_id']=$id_no;
			$_SESSION['success']="LOGGED insuccessfully";
			header('location: student.php');
		}
		
		else if(mysqli_num_rows($result3)){

			$_SESSION['adm_id']=$id_no;
			$_SESSION['success']="LOGGED insuccessfully";
			header('location: adm.php');
		}

		else if(mysqli_num_rows($result4)){

			$_SESSION['hod_id']=$id_no;
			$_SESSION['success']="LOGGED insuccessfully";
			header('location: hod.php');
		}

		else
		{
			header('location: login.php');
		}
	
}

if(isset($_POST['Change']))
{
	$id_no=mysqli_real_escape_string($db,$_POST['id_no']);
	$name=mysqli_real_escape_string($db,$_POST['name']);
	$npassword=mysqli_real_escape_string($db,$_POST['npassword']);
	$cpassword=mysqli_real_escape_string($db,$_POST['cpassword']);

	if($cpassword!=$npassword)
	{
		echo  "wrong";
		header('location: change_pass.php');
	}

	else
	{
		$query1="SELECT * FROM prof WHERE prof_id='$id_no' AND prof_name='$name'";
		$result1=mysqli_query($db,$query1);
		$query2="SELECT * FROM student WHERE stu_id='$id_no' AND stu_name='$name'";
		$result2=mysqli_query($db,$query2);
		$query3="SELECT * FROM adm WHERE adm_id='$id_no' AND adm_name='$name'";
		$result3=mysqli_query($db,$query3);
		$query4="SELECT * FROM hod WHERE hod_id='$id_no' AND hod_name='$name'";
		$result4=mysqli_query($db,$query4);	

		if(mysqli_num_rows($result1))
		{
			$query="UPDATE prof SET prof_pass='$npassword' WHERE prof_id='$id_no' AND prof_name='$name'";
			$result=mysqli_query($db,$query);
			header('location: login.php');
		}

		elseif(mysqli_num_rows($result2))
		{
			echo "string";
			$query="UPDATE student SET stu_pass='$npassword' WHERE stu_id='$id_no' AND stu_name='$name'";
			$result=mysqli_query($db,$query);
			header('location: login.php');
		}	

		elseif(mysqli_num_rows($result3))
		{
			$query="UPDATE adm SET adm_pass='$npassword' WHERE adm_id='$id_no' AND adm_name='$name'";
			$result=mysqli_query($db,$query);
			header('location: login.php');
		}

		elseif(mysqli_num_rows($result4))
		{
			$query="UPDATE hod SET hod_pass='$npassword' WHERE hod_id='$id_no' AND hod_name='$name'";
			$result=mysqli_query($db,$query);
			header('location: login.php');
		}
	}
}

if(isset($_POST['ChArt']))
{
	$stu_id=$_POST['stu_id'];
	header('location: marks_chart.php');
}

?>
