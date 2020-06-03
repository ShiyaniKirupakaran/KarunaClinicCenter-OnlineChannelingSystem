<?php
	$con=new mysqli('localhost','root','','karuna_clinic_center');

if($con-> connect_errno)
{
	echo $con->connect_error;
	die();
}

	$sql="DELETE from doctor where Doctor_id=".$_GET['id'].";";

	if($con->query($sql))
	{
		echo "<script> alert('Deleted Successfully'); </script>";
		 echo "<script>window.open('D_View.php?mes=record deleted','_self')</script>";
	}
	else
	{
		echo "<script>window.open('D_View.php','_self')</script>";
	}
?>