<?php 
	//Include database connection details

	/*require_once('../config.php');
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

	}*/
	
	header("location: employee_full_details_form_filling_5.php");

	

	//Sanitize the POST values

/*$leave_type = clean($_POST['Industry']);
	
	$result = mysql_query("SELECT * FROM leave_type where leave_type_id= $leave_type");
$row = mysql_fetch_array($result);
$leave_type1=$row['type_name'];
	
$from = clean($_POST['activefrom']);
$till = clean($_POST['activetill']);
$days = clean($_POST['designation']);
$purpose = clean($_POST['caddress']);



	
	
if($leave_type == '') {





		$errmsg_arr[] = 'select Leave Type';





		$errflag = true;





	}
	
	
	/*if($middle_name == '') {





		$errmsg_arr[] = 'Enter middle Name';





		$errflag = true;





	}*/
	
	//$now = time();


//if (strtotime($from) <$now) {
   // $errmsg_arr[] = 'Selected From Date Invalid';





		//$errflag = true;





	
	
	//} 
	
	
	/*if (strtotime($till) < $now || strtotime($till) < strtotime($from)) {
    $errmsg_arr[] = 'Selected Till Date Invalid';





		$errflag = true;





	
	
	} 
	
	
	if($from == 'Click to select date') {





		$errmsg_arr[] = 'select date from';





		$errflag = true;





	}
	
	if($till == 'Click to select date') {





		$errmsg_arr[] = 'select date till';





		$errflag = true;





	}
	
	if($days == '' || $days == 0) {





		$errmsg_arr[] = 'Invalid Number of Days';





		$errflag = true;





	}*/
	
	








	

		/*if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();*/





		//header("location: employee_full_details_form_filling_process.php");





	/*	exit();





	}

	
	$result_emp = mysql_query("SELECT * FROM leave_employee WHERE emp_id='$uid'");
	if(mysql_num_rows($result_emp)==0)
	{
			
			$result_plcl = mysql_query("SELECT * FROM leave_assign");
			$row_plcl = mysql_fetch_array($result_plcl);
			
			$pl=$row_plcl['p_l'];
			$cl=$row_plcl['c_l'];
			
			if($days>$pl)
			{
			$_SESSION['from_date'] = 1;

				session_write_close();

				header("location: apply-leaves.php");

				exit();
			}
			
			
			if($days>$cl)
			{
			$_SESSION['till_date'] = 1;

				session_write_close();

				header("location: apply-leaves.php");

				exit();

			
			}
			
			
			
			
			
			
			
			$qry = "INSERT INTO leave_employee(emp_id, leave_type, from_date, till, number_of_day, purpose, status, comment, p_l, c_l ) VALUES('$uid', '$leave_type1','$from','$till', $days,'$purpose','Pending' ,'-No Comments-', $pl, $cl)";
			$result = @mysql_query($qry);
			
			
			
			
			
			
			
			
			
			if($result) {

				$_SESSION['CAMREGMESG'] = 1;

				session_write_close();

				header("location: apply-leaves.php");

				exit();

			}
		
			else {

				die("Query failed");

			}

	}
	
	else
	{
			
			$result_plcl = mysql_query("SELECT * FROM leave_employee WHERE emp_id='$uid' ORDER BY timestamp DESC LIMIT 1");
			$row_plcl = mysql_fetch_array($result_plcl);
			echo $pl=$row_plcl['p_l'];
			echo $cl=$row_plcl['c_l'];
			$pl_or_cl=$row_plcl['leave_type'];
			
			
			if($leave_type1=='P. L.' AND  ($days>$pl OR $pl== 0))
			{
			$_SESSION['from_date'] = 1;

				session_write_close();

				header("location: apply-leaves.php");

				exit();
			}
			
			
			if($leave_type1=='C. L.' AND ($days>$cl OR $cl== 0))
			{
			$_SESSION['till_date'] = 1;

				session_write_close();

				header("location: apply-leaves.php");

				exit();

			
			}
			
			
			
			$qry = "INSERT INTO leave_employee(emp_id, leave_type, from_date, till, number_of_day, purpose, status, comment, p_l, c_l ) VALUES('$uid', '$leave_type1','$from','$till', $days,'$purpose','Pending' ,'-No Comments-', $pl, $cl)";
			$result = @mysql_query($qry);
			
			
			
			
			
			
			if($result) {

				$_SESSION['CAMREGMESG'] = 1;

				session_write_close();

				header("location: apply-leaves.php");

				exit();

			}
		
			else {

				die("Query failed");

			}

	}*/
		
		
		
		
		
	?>
	
	