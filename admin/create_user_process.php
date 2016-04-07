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
$emp_code = clean($_POST['emp_code']);
$title=clean($_POST['title']);
$first_name = clean($_POST['emp_first_name']);
$middle_name = clean($_POST['emp_middle_name']);
$last_name = clean($_POST['emp_last_name']);
$mobile = clean($_POST['mobile']);
$address = clean($_POST['address']);
$email = clean($_POST['email']);
$dateofjoining = clean($_POST['DOJ']);
$dept=clean($_POST['dept']);
$role=clean($_POST['Industry']);

/*$result_role = mysql_query("SELECT * FROM employee_role WHERE role_id='$role'");
$role_1 = mysql_fetch_array($result_role);
$role_new=$role_1['role'];*/

$report_to=clean($_POST['Industry_1']);

if($emp_code=='')
{

$errmsg_arr[] = 'Please provide employee code';

}


if($title=='')
{

$errmsg_arr[] = 'Select Title';

}


	
if($first_name == '') {





		$errmsg_arr[] = 'Enter First Name';





		$errflag = true;

	}
	
	
	/*if($middle_name == '') {





		$errmsg_arr[] = 'Enter middle Name';





		$errflag = true;





	}*/
	
	
	if($last_name == '') {





		$errmsg_arr[] = 'Enter last Name';





		$errflag = true;





	}
	
	if($mobile == '') {





		$errmsg_arr[] = 'Enter mobile Name';





		$errflag = true;





	}
	
	if($address == '') {





		$errmsg_arr[] = 'Enter address';





		$errflag = true;





	}
	
	/*if($ext == '') {





		$errmsg_arr[] = 'Enter extension';





		$errflag = true;





	}*/







	if($email == '') {





		$errmsg_arr[] = 'Enter Email ID';





		$errflag = true;





	}
	
	
	if($dateofjoining == '') {

		$errmsg_arr[] = 'Enter Date of Joining of the employee';

		$errflag = true;

	}
	
	
	if($role == '') {





		$errmsg_arr[] = 'Select Role';





		$errflag = true;


	}
	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: create_user.php");





		exit();





	}

	
	
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$chars2="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$rand=substr(str_shuffle($chars),0,20);
$rand2=substr(str_shuffle($chars2),0,20);
$original="Arc_";
$original2="Arc_";
$sub=substr($rand,0,6);
$sub2=substr($rand2,0,6);

$new_str=$original.$sub;
//echo "password : " .$new_str ."</br>";
$new_str2=$original2.$first_name;
//echo "username : " .$new_str2;
$pass_emp=md5($new_str);


$qry="SELECT COUNT(*) FROM t_ex_employee where emp_code='$emp_code'";
$ExEmpCodeCompare=mysql_result(mysql_query($qry),0);

$qry1="SELECT COUNT(*) FROM t_employee where emp_code='$emp_code'";
$EmpCodeCompare=mysql_result(mysql_query($qry1),0);

//echo "ExEmployee".$ExEmpCompare;
if($ExEmpCodeCompare!=0)
{
	//echo "ExEmployee".$ExEmpCompare. "exists as Ex Employee";
	
	$_SESSION['ERRMSG_ARR1'] = 100;
	header("location: create_user.php");

	exit();
}

if($EmpCodeCompare!=0)
{
	//echo "ExEmployee".$ExEmpCompare. "exists as Ex Employee";
	
	$_SESSION['ERRMSG_ARR1'] = 100;
	header("location: create_user.php");

	exit();
}

if($report_to=='my')
{
$qry = "INSERT INTO t_employee(emp_code, title, emp_first_name, emp_middle_name, emp_last_name, mobile, address, email, JoiningDate, dept_id,  priority_id, assign_to, username, password) VALUES('$emp_code','$title','$first_name','$middle_name','$last_name','$mobile','$address', '$email', '$dateofjoining','$dept','$role', NULL,'$new_str2', '$pass_emp' )";
$result = @mysql_query($qry);
}else{
$qry = "INSERT INTO t_employee(emp_code, title,emp_first_name, emp_middle_name, emp_last_name, mobile, address, email, JoiningDate, dept_id, priority_id, assign_to, username, password) VALUES('$emp_code','$title','$first_name','$middle_name','$last_name','$mobile','$address', '$email', '$dateofjoining', '$dept','$role', '$report_to','$new_str2', '$pass_emp' )";
$result = @mysql_query($qry);
}

if($result)
{

/*$query1 = mysql_query("select * from employee_seq ORDER BY emp_id DESC LIMIT 1");
$row1=  mysql_fetch_assoc($query1);*/

echo $mail_emp= "<p><b>Hi ".$first_name."</b>,</p><p> You are successfully registered From Company Admin. </p><p><b>Your Credentials are: <b></p><p>Username : ".$new_str2."</p><p>Password : ".$new_str."</p><p>URL : <a href='".$mainurl."employee/"."' target='_blank' style='color:#4E9258;'>".$mainurl."employee/"."</a></p>";

$to = $email;
$subject = "Employee Registered";


$mail_body = '<html>
<body>' . $mail_emp . ' 
</body>
</html>';

$admin_mail = mysql_query("SELECT * FROM users");
$row5=  mysql_fetch_assoc($admin_mail);


$headers = "From: ".$row5['email_admin']." \r\n";
  $headers .= "Reply-To: ".$row5['email_admin']." \r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$sendmail= mail($to, $subject, $mail_body, $headers);

}



if($result) {

			$_SESSION['CAMREGMESG'] = 1;

			session_write_close();

			//header("location: create_user.php");

			exit();

		}else {

			die("Query failed");

		}


		
		
		
		
		
	?>
	
	