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


	
if($role_id == '') {





		$errmsg_arr[] = 'Select Role';





		$errflag = true;





	}
	
	
	
	

	
	
	/*if($middle_name == '') {





		$errmsg_arr[] = 'Enter middle Name';





		$errflag = true;





	}*/
	
	
	








	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: View_RoleActivity.php");





		exit();





	}
	
	

$qry="SELECT * FROM t_manage_activity WHERE priority_id='$role_id'";
$result=mysql_query($qry);



if($result) {

		if(mysql_num_rows($result) > 0) {

			//Login Successful

			session_regenerate_id();

			$user = mysql_fetch_assoc($result);
			
			$_SESSION['successful_emp_search'] = 1;
			$_SESSION['SESS_ID'] = $role_id;
			
			//$_SESSION['SESS_PHOTO'] = $user['photo'];
			

			session_write_close();

			header("location: View_RoleActivity.php");

			exit();

		}else {
			
			$errmsg_arr[] = 'No Activity Assigned';

		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

		session_write_close();

		header("location: View_RoleActivity.php");

			exit();

		}

	}
	else {

		die("Query failed");

	}


		
		
		
		
		
	?>
	
	