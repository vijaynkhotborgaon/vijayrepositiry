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

$leave_id = clean($_POST['leave_id']);
$days = clean($_POST['days']);
$plcl = clean($_POST['plcl']);
$pl = clean($_POST['pl']);
$cl = clean($_POST['cl']);
$el = clean($_POST['el']);

	
	//$result = mysql_query("SELECT * FROM leave_type where leave_type_id= $leave_type");
//$row = mysql_fetch_array($result);
//$leave_type1=$row['type_name'];
	
//$from = clean($_POST['activefrom']);
//$till = clean($_POST['activetill']);
//$days = clean($_POST['designation']);
$comment = clean($_POST['caddress']);



	
	
/*if($leave_type == '') {





		$errmsg_arr[] = 'select Leave Type';





		$errflag = true;





	}
	
	
	if($middle_name == '') {





		$errmsg_arr[] = 'Enter middle Name';





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
	
	if($days == '') {





		$errmsg_arr[] = 'Enter Days';





		$errflag = true;





	}
	
	








	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: apply-leaves.php");





		exit();





	}*/

	
	




if (isset($_POST['approve'])) 
{


	if($plcl=='P. L.')
	{

	$pl=$pl-$days;
	$qry = "UPDATE leave_employee_new SET status='Approved', comment='$comment',p_l=$pl   WHERE leave_id=$leave_id";





		$result = @mysql_query($qry);





	if($result) {

				$_SESSION['CAMREGMESG'] = 1;

				session_write_close();

				header("location: leave_request_process.php?request=$leave_id");

				exit();

			}
			
			else {

				die("Query failed");

			}
			
	}
    if($plcl=='C. L.')
	{

	$cl=$cl-$days;
	$qry = "UPDATE leave_employee_new SET status='Approved', comment='$comment',c_l=$cl   WHERE leave_id=$leave_id";





		$result = @mysql_query($qry);





	if($result) {

				$_SESSION['CAMREGMESG'] = 1;

				session_write_close();

				header("location: leave_request_process.php?request=$leave_id");

				exit();

			}
			
			else {

				die("Query failed");

			}
			
	}
	
	
	
	  if($plcl=='E.L.')
	{

	$el=$el-$days;
	$qry = "UPDATE leave_employee_new SET status='Approved', comment='$comment',e_l=$el   WHERE leave_id=$leave_id";





		$result = @mysql_query($qry);





	if($result) {

				$_SESSION['CAMREGMESG'] = 1;

				session_write_close();

				header("location: leave_request_process.php?request=$leave_id");

				exit();

			}
			
			else {

				die("Query failed");

			}
			
	}
	
	
	
	
	
	
	
	
	
	
	
}


if (isset($_POST['reject'])) 
{



$qry = "UPDATE leave_employee_new SET status='Rejected', comment='$comment' WHERE leave_id=$leave_id";





	$result = @mysql_query($qry);





if($result) {

			$_SESSION['Rejected'] = 1;

			session_write_close();

			header("location: leave_request_process.php?request=$leave_id");

			exit();

		}
		
		else {

			die("Query failed");

		}
		
}




		
		
		
		
		
	?>
	
	