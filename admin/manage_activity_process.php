<?php 
	//Include database connection details

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


$role_id=clean($_POST['Industry']);
$act_id=$_POST['Industry_1'];

	
if($role_id == '') {





		$errmsg_arr[] = 'Select Role';





		$errflag = true;





	}
	
	
	
	
if($act_id == '') {





		$errmsg_arr[] = 'Select activity';





		$errflag = true;





	}
	
	
	
	/*if($middle_name == '') {





		$errmsg_arr[] = 'Enter middle Name';





		$errflag = true;





	}*/
	
	
	








	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: manage_activity.php");





		exit();





	}
	
	

foreach ($act_id as $act_id_1){	


$qry = "INSERT INTO t_manage_activity(act_id, priority_id) VALUES('$act_id_1','$role_id')";
$result = @mysql_query($qry);

}


if($result) {

			$_SESSION['CAMREGMESG'] = 1;

			session_write_close();

			header("location: manage_activity.php");

			exit();

		}else {

			die("Query failed");

		}


		
		
		
		
		
	?>
	
	