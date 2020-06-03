<?php
	$con=new mysqli('localhost','root','','karuna_clinic_center');

if($con-> connect_errno)
{
	echo $con->connect_error;
	die();
}

	$sql="DELETE from appointment where Appointment_id=".$_GET['id'].";";

	if($con->query($sql))
	{
		echo "<script> alert('Appointment cancelled'); </script>";
		 echo "<script>window.open('doctor_view_edit_appointments.php?mes=Appointment Canceled','_self')</script>";
	}
	else
	{
		echo "<script>window.open('doctor_view_edit_appointments.php','_self')</script>";
	}
?>