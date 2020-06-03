<?php
		session_start();
		session_unset($_SESSION['Admin_id']);
		session_unset($_SESSION['Patient_id']);
		session_unset($_SESSION['Doctor_id']);
		session_unset($_SESSION['Labassistant_id']);
		session_destroy();
		header("location:Login.php");

	?>
	