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

$title = clean($_POST['title']);
	$first_name = clean($_POST['emp_first_name']);
 $middle_name = clean($_POST['emp_middle_name']);
$last_name = clean($_POST['emp_last_name']);
$mobile = clean($_POST['mobile']);
$address = clean($_POST['address']);

$email = clean($_POST['email']);
$role = clean($_POST['Industry']);

echo $roport_to = clean($_POST['Industry_1']);
$emp_id_hidden = clean($_POST['country']);



if($roport_to=='my')
{


$qry = "UPDATE t_employee SET title='$title', emp_first_name='$first_name', emp_middle_name='$middle_name', emp_last_name='$last_name', mobile='$mobile', address='$address', email='$email', priority_id='$role' WHERE emp_id='$emp_id_hidden'";



	$result = @mysql_query($qry);

}else{



	$qry = "UPDATE t_employee SET title='$title', emp_first_name='$first_name', emp_middle_name='$middle_name', emp_last_name='$last_name', mobile='$mobile', address='$address', email='$email', priority_id='$role', assign_to='$roport_to' WHERE emp_id='$emp_id_hidden'";



	$result = @mysql_query($qry);

}
	













		if($result) {





			$_SESSION['USERUPDATE'] = 1;





			session_write_close();





			header("location: employee_edit.php?emp_id=$emp_id_hidden");





			exit();





		}else {





			die("Query failed");





		}





?>

















