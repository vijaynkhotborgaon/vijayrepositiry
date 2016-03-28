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




$emp_id=clean($_POST['emp_id']);
$first_name = clean($_POST['emp_first_name']);
$middle_name = clean($_POST['emp_middle_name']);
$last_name = clean($_POST['emp_last_name']);














	if($first_name == '' && $emp_id=='' && $middle_name=='' && $last_name==''  ) {





		$errmsg_arr[] = 'Enter Atleast One Value';





		$errflag = true;





	}
	
	
	

	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: search-emp.php");





		exit();





	}





	


	


	//Create INSERT query

$emp_id=clean($_POST['emp_id']);
$first_name = clean($_POST['emp_first_name']);
$middle_name = clean($_POST['emp_middle_name']);
$last_name = clean($_POST['emp_last_name']);




$qry="SELECT * FROM employee_new WHERE emp_id='$emp_id' OR emp_first_name='$first_name' OR emp_middle_name='$middle_name' OR emp_last_name='$last_name' ";
$result=mysql_query($qry);





	//Check whether the query was successful or not

	if($result) {

		if(mysql_num_rows($result) > 0) {

			//Login Successful

			session_regenerate_id();

			$user = mysql_fetch_assoc($result);
			
			$_SESSION['successful_emp_search'] = 1;
			$_SESSION['SESS_ID'] = $emp_id;
			$_SESSION['SESS_EMP_FIRST_NAME'] = $first_name;
			$_SESSION['SESS_EMP_MIDDLE_NAME'] = $middle_name;
			$_SESSION['SESS_EMP_LAST_NAME'] = $last_name;
			//$_SESSION['SESS_PHOTO'] = $user['photo'];
			

			session_write_close();

			header("location: search-emp.php");

			exit();

		}else {
			
			$errmsg_arr[] = 'No Match Found';

		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;

		session_write_close();

		header("location: search-emp.php");

			exit();

		}

	}
	else {

		die("Query failed");

	}





?>

















