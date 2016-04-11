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

$username = clean($_POST['username']);
$email = clean($_POST['email']);
/*$middle_name = clean($_POST['emp_middle_name']);
$last_name = clean($_POST['emp_last_name']);
$mobile = clean($_POST['mobile']);
$address = clean($_POST['address']);

$email = clean($_POST['email']);
$dateofjoining = clean($_POST['DOJ']);
$role = clean($_POST['Industry']);
$roport_to = clean($_POST['Industry_1']);
$emp_code_hidden = clean($_POST['country']);*/



$qry = "UPDATE users SET user_name='$username', email_admin='$email' WHERE user_id=1";



	$result = @mysql_query($qry);

	


		if($result) {





			$_SESSION['USERUPDATE'] = 1;





			session_write_close();





			header("location: edit_admin.php");





			exit();





		}else {





			die("Query failed");





		}





?>

















