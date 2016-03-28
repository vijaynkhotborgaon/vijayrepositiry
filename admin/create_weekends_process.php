<?php

$datepicker=$_POST['datepicker'];
$date_picker_array=array();
$date_picker_array=explode(",",$datepicker);

$array_size=sizeof($date_picker_array);

foreach ($date_picker_array as $date_picker_array) {

$date_picker_array ."</br>";
}
?>




<?php 
	//Include database connection details

	require_once('../config.php');
	require_once('auth.php');
	//Array to store validation errors

	$errmsg_arr = array();

	//Validation error flag

	$errflag = false;
	
	
	function clean($str) {

		$str = @trim($str);

		if(get_magic_quotes_gpc()) {

			$str = stripslashes($str);

		}

		return mysql_real_escape_string($str);

	}

	
	
	$datepicker=clean($_POST['datepicker']);
	
	if($datepicker == '') {





		$errmsg_arr[] = 'select one or more date\'s';





		$errflag = true;





	}


	
	

	//Sanitize the POST values





	
	

	
	
	/*if($middle_name == '') {





		$errmsg_arr[] = 'Enter middle Name';





		$errflag = true;





	}*/
	
	
	








	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: create_weekends.php");





		exit();





	}
	
	
	
	$date_picker_array=array();
$date_picker_array=explode(",",$datepicker);

$array_size=sizeof($date_picker_array);

foreach ($date_picker_array as $date_picker_array) {
$dd=date_create($date_picker_array);
$datepic=date_format($dd,"Y-m-d");
$new_date=$datepic.'TH:M:S+05:30';


$qry = "INSERT INTO holidays(holiday) VALUES('$new_date')";
$result = @mysql_query($qry);


}

	





if($result) {

			$_SESSION['CAMREGMESG'] = 1;

			session_write_close();

			header("location: create_weekends.php");

			exit();

		}else {

			die("Query failed");

		}


		
		
		
		
		
	?>
	
	