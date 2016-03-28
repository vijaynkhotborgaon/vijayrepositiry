<?php

	//Start session

	require_once('auth.php');

	session_start();

	

	//Unset the variables stored in session

	unset($_SESSION['SESS_USER_ID']);
	unset($_SESSION['SESS_EMP_FIRST_NAME']);
	unset($_SESSION['SESS_EMP_LAST_NAME']);
	unset($_SESSION['SESS_PHOTO']);
	
	

	header("location: index.php");

?>

