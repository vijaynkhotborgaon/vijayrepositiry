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


$activity=clean($_POST['role_name']);


$result = mysql_query("SELECT * FROM t_activity WHERE act_name='$activity'");
$num_rows = mysql_num_rows($result);

if ($num_rows) {
   $errmsg_arr[] = 'Already Exists';
   $errflag = true;
}



	
	
if($activity == '') {





		$errmsg_arr[] = 'Enter Activity';





		$errflag = true;





	}
	
	
	/*if($middle_name == '') {





		$errmsg_arr[] = 'Enter middle Name';





		$errflag = true;





	}*/
	
	
	








	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: add_activity.php");





		exit();





	}

	

$qry = "INSERT INTO t_activity(act_name) VALUES('$activity')";
$result = @mysql_query($qry);




if($result) {

			$_SESSION['CAMREGMESG'] = 1;

			session_write_close();

			header("location: add_activity.php");

			exit();

		}else {

			die("Query failed");

		}


		
		
		
		
		
	?>
	
	