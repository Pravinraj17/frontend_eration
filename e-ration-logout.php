<?php 
		session_start();

			unset($_SESSION['e_login_username']);
			unset($_SESSION['e_ration_login']);
			header('location:e-ration-login.php');
?>