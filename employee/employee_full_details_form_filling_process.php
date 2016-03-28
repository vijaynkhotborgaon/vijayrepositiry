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




$title=clean($_POST['title']);
$first_name = clean($_POST['fn']);
$middle_name = clean($_POST['mn']);
$last_name = clean($_POST['ln']);
$address1=clean($_POST['address1']);
$tel_1=clean($_POST['tel_1']);
$off_tel_1=clean($_POST['off_tel_1']);
$mob_1=clean($_POST['mob_1']);
$fax1=clean($_POST['fax1']);
$email_1=clean($_POST['email_1']);
$address2=clean($_POST['address2']);
$tel_2=clean($_POST['tel_2']);
$off_tel_2=clean($_POST['off_tel_2']);
$mob_2=clean($_POST['mob_2']);
$fax2=clean($_POST['fax2']);
$email_2=clean($_POST['email2']);




if($title == '') {





		$errmsg_arr[] = 'Enter Title';





		$errflag = true;





	}
	








if($first_name == '') {





		$errmsg_arr[] = 'Enter First Name';





		$errflag = true;





	}
	
	
	if($last_name == '') {





		$errmsg_arr[] = 'Enter last Name';





		$errflag = true;





	}
	
	
	if($address1 == '') {





		$errmsg_arr[] = 'Enter Present Address';





		$errflag = true;





	}
	
	if($address2 == '') {





		$errmsg_arr[] = 'Enter Permanent Address';





		$errflag = true;





	}
	
	if($mob_1 == '') {





		$errmsg_arr[] = 'Enter mobile Number';





		$errflag = true;





	}
	
	if($email_1 == '') {





		$errmsg_arr[] = 'Enter Email Address';





		$errflag = true;





	}
	
	
	
	
	
	
if($tel_1 == '' || $off_tel_1 == '' || $fax1 == '' || $tel_2 == '' || $off_tel_2 == '' || $mob_2 == ''  || $fax2 == ''  || $email_2 == '' ) {





		$errmsg_arr[] = 'Specify "N. A." for Empty Fields';





		$errflag = true;





	}

	if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: employee_full_details_form_filling.php");





		exit();





	}



//Create INSERT query
	$qry = "UPDATE employee_new SET emp_title_name='$title', emp_first_name='$first_name', emp_middle_name='$middle_name', emp_last_name='$last_name', mobile='$mob_1', address='$address1',address2='$address2', office_ext='$off_tel_1',  email='$email_1', res_tel='$mob_1', per_tel='$tel_2', per_office_tel='$off_tel_2', per_mobile_tel='$mob_2', fax1='$fax1', fax2='$fax2', per_email='$email_2' WHERE emp_id='$uid'";





	$result = @mysql_query($qry);


	













		if($result) {





			$_SESSION['USERUPDATE'] = 1;





			session_write_close();





			header("location: employee_full_details_form_filling_1.php");





			exit();





		}else {





			die("Query failed");





		}





?>



















	




	
		
		
		
	
	
	