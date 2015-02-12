<?php

	//Start session

	session_start();

	

	//Unset the variables stored in session

	unset($_SESSION['SESS_USER_ID']);

	unset($_SESSION['SESS_NAME']);

	unset($_SESSION['SESS_EMAIL']);

	

	header("location: index.php");

	exit();

?>

