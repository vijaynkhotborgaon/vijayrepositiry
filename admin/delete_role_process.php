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





		$errmsg_arr[] = 'Select Role';


		$errflag = true;





	}







	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: delete_role.php");





		exit();





	}

	

$qry = "DELETE FROM t_priority_role WHERE priority_id='$role'";
$result = @mysql_query($qry);




if($result) {

			$_SESSION['CAMREGMESG'] = 1;

			session_write_close();

			header("location: delete_role.php");

			exit();

		}else {

			die("Query failed");

		}


		
		
		
		
		
	?>
	
	