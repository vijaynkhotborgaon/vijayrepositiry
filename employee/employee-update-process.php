<?php 




	require_once('../config.php');


	require_once('auth.php');


	//Array to store validation errors





	$errmsg_arr = array();





	//Validation error flag





	$errflag = false;





	//Function to sanitize values received from the form. Prevents SQL injection





	function clean($str) {





		$str = @trim($str);





		if(get_magic_quotes_gpc()) {





			$str = stripslashes($str);





		}





		return mysql_real_escape_string($str);





	}





	





	//Sanitize the POST values





$first_name = clean($_POST['emp_first_name']);
$middle_name = clean($_POST['emp_middle_name']);
$last_name = clean($_POST['emp_last_name']);
$mobile = clean($_POST['mobile']);
$address = clean($_POST['address']);

$email = clean($_POST['email']);













	if($first_name == '') {





		$errmsg_arr[] = 'Enter First Name';





		$errflag = true;





	}
	
	
	if($middle_name == '') {





		$errmsg_arr[] = 'Enter middle Name';





		$errflag = true;





	}
	
	
	if($last_name == '') {





		$errmsg_arr[] = 'Enter last Name';





		$errflag = true;





	}
	
	if($mobile == '') {





		$errmsg_arr[] = 'Enter mobile Name';





		$errflag = true;





	}
	
	if($address == '') {





		$errmsg_arr[] = 'Enter address';





		$errflag = true;





	}
	








	if($email == '') {





		$errmsg_arr[] = 'Enter Email ID';





		$errflag = true;





	}








	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: self-details.php");





		exit();





	}





	


	


	//Create INSERT query





	$qry = "UPDATE t_employee SET emp_first_name='$first_name', emp_middle_name='$middle_name', emp_last_name='$last_name', mobile='$mobile', address='$address', email='$email' WHERE emp_id='$uid'";





	$result = @mysql_query($qry);


	













		if($result) {





			$_SESSION['USERUPDATE'] = 1;





			session_write_close();





			header("location: self-details.php");





			exit();





		}else {





			die("Query failed");





		}





?>

















