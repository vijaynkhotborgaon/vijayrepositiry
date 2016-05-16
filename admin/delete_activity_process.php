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


echo $role=clean($_POST['Industry']);


	
	
if($role == '') {





		$errmsg_arr[] = 'Select Activity';


		$errflag = true;





	}







	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: delete_activity.php");





		exit();





	}

	

$qry = "DELETE FROM t_activity WHERE act_id='$role'";
$result = @mysql_query($qry);

$qry_1 = "DELETE FROM t_manage_activity WHERE act_id='$role'";
$result_1 = @mysql_query($qry_1);




if($result) {

			$_SESSION['CAMREGMESG'] = 1;

			session_write_close();

			header("location: delete_activity.php");

			exit();

		}else {

			die("Query failed");

		}


		
		
		
		
		
	?>
	
	