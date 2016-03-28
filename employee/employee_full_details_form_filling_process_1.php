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




$birth_date=clean($_POST['birth_date']);
$nat_birth=clean($_POST['nat_birth']);
$nat_present=clean($_POST['nat_present']);
$hold_dual_nat=clean($_POST['hold_dual_nat']);
$nat_specify=clean($_POST['nat_specify']);
$birth_place=clean($_POST['birth_place']);
$birth_country=clean($_POST['birth_country']);
$height=clean($_POST['height']);
$weight=clean($_POST['weight']);
$blood=clean($_POST['blood']);
$marital=clean($_POST['marital']);
$gender=clean($_POST['gender']);
$religion=clean($_POST['religion']);
$acc_no=clean($_POST['acc_no']);
$pass_no=clean($_POST['pass_no']);
$issue_place=clean($_POST['issue_place']);
$issue_date=clean($_POST['issue_date']);
$expiry_date=clean($_POST['expiry_date']);
$bank_name=clean($_POST['bank_name']);
$branch=clean($_POST['branch']);
$bank_acc_no=clean($_POST['bank_acc_no']);
$convict=clean($_POST['convict']);
$abuse=clean($_POST['abuse']);
$details_crime=clean($_POST['details_crime']);
$ill=clean($_POST['ill']);
$disability=clean($_POST['disability']);
$ill_details=clean($_POST['ill_details']);
$ex_emp=clean($_POST['ex_emp']);
$designation=clean($_POST['designation']);
$dept=clean($_POST['dept']);
$period_from=clean($_POST['period_from']);
$period_till=clean($_POST['period_till']);
$employed=clean($_POST['employed']);
$fn=clean($_POST['fn']);
$mn=clean($_POST['mn']);
$ln=clean($_POST['ln']);
$rel=clean($_POST['rel']);
$rel_emp_des=clean($_POST['rel_emp_des']);

if($birth_date == '') {
	$errmsg_arr[] = 'Enter Birth Date';
	$errflag = true;
}

if($marital == '') {
	$errmsg_arr[] = 'Select Marital Status';
	$errflag = true;
}

if($gender == '') {
	$errmsg_arr[] = 'Select Gender';
	$errflag = true;
}

if($religion == '') {
	$errmsg_arr[] = 'Select Religion';
	$errflag = true;
}

if($convict == '') {
	$errmsg_arr[] = 'Select Criminal Offence';
	$errflag = true;
}

if($abuse == '') {
	$errmsg_arr[] = 'Select drug or alcohol abuse';
	$errflag = true;
}



if($ill == '') {
	$errmsg_arr[] = 'Select medical condition / illness';
	$errflag = true;
}

if($disability == '') {
	$errmsg_arr[] = 'Select physical defect or partial disability';
	$errflag = true;
}

if($ex_emp == '') {
	$errmsg_arr[] = 'Select Ex-employee of Archon?';
	$errflag = true;
}

if($employed == '') {
	$errmsg_arr[] = 'Select relatives employed by Archonor?';
	$errflag = true;
}
	
if($nat_birth == '' || $nat_present == '' || $birth_place == '' || $birth_country == '' || $acc_no == '' || $pass_no == ''  || $issue_place == ''  || $issue_date == '' || $expiry_date == '' || $bank_name == '' || $branch == '' || $bank_acc_no == '') {
	$errmsg_arr[] = 'Specify "N. A." for Empty Fields';
	$errflag = true;
}


if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: employee_full_details_form_filling_1.php");





		exit();





	}
	
																																																																								$birth_date=clean($_POST['birth_date']);
																																																																																$nat_birth=clean($_POST['nat_birth']);
																																																																																$nat_present=clean($_POST['nat_present']);
																																																																																$hold_dual_nat=clean($_POST['hold_dual_nat']);
																																																																																$nat_specify=clean($_POST['nat_specify']);
																																																																																$birth_place=clean($_POST['birth_place']);
																																																																																$birth_country=clean($_POST['birth_country']);
																																																																																$height=clean($_POST['height']);
																																																																																$weight=clean($_POST['weight']);
																																																																																$blood=clean($_POST['blood']);
																																																																																$marital=clean($_POST['marital']);
																																																																																$gender=clean($_POST['gender']);
																																																																																$religion=clean($_POST['religion']);
																																																																																$acc_no=clean($_POST['acc_no']);
																																																																																$pass_no=clean($_POST['pass_no']);
																																																																																$issue_place=clean($_POST['issue_place']);
																																																																																$issue_date=clean($_POST['issue_date']);
																																																																																$expiry_date=clean($_POST['expiry_date']);
																																																																																$bank_name=clean($_POST['bank_name']);
																																																																																$branch=clean($_POST['branch']);
																																																																																$bank_acc_no=clean($_POST['bank_acc_no']);
																																																																																$convict=clean($_POST['convict']);
																																																																																$abuse=clean($_POST['abuse']);
																																																																																$details_crime=clean($_POST['details_crime']);
																																																																																$ill=clean($_POST['ill']);
																																																																																$disability=clean($_POST['disability']);
																																																																																$ill_details=clean($_POST['ill_details']);
																																																																																$ex_emp=clean($_POST['ex_emp']);
																																																																																$designation=clean($_POST['designation']);
																																																																																$dept=clean($_POST['dept']);
																																																																																$period_from=clean($_POST['period_from']);
																																																																																$period_till=clean($_POST['period_till']);
																																																																																$employed=clean($_POST['employed']);
																																																																																$fn=clean($_POST['fn']);
																																																																																$mn=clean($_POST['mn']);
																																																																																$ln=clean($_POST['ln']);
																																																																																$rel=clean($_POST['rel']);
																																																																																$rel_emp_des=clean($_POST['rel_emp_des']);

//Create INSERT query
	$qry = "UPDATE employee_new SET birth_date='$birth_date', nat_birth='$nat_birth', nat_present='$nat_present', hold_dual_nat='$hold_dual_nat', nat_specify='$nat_specify', birth_place='$birth_place',birth_country='$birth_country', height='$height',  weight='$weight', blood='$blood', marital='$marital', gender='$gender', religion='$religion', acc_no='$acc_no', pass_no='$pass_no', issue_place='$issue_place' ,
																																																																																issue_date='$issue_date' , expiry_date='$expiry_date' , bank_name='$bank_name' , branch='$branch' , bank_acc_no='$bank_acc_no', 
																																																																																convict='$convict' , abuse='$abuse' , details_crime='$details_crime' , ill='$ill' , disability='$disability', 
																																																																																ill_details='$ill_details' , ex_emp='$ex_emp' , designation='$designation' , dept='$dept' , period_from='$period_from' , period_till='$period_till',
																																																																																employed='$employed' , employed_fn='$fn' , employed_mn='$mn' , employed_ln='$ln' , rel='$rel' , rel_emp_des='$rel_emp_des' WHERE emp_id='$uid'";





	$result = @mysql_query($qry);
	
	$result_new = mysql_query("SELECT * FROM employee_new WHERE emp_id='$uid'");
			$result_fetch = mysql_fetch_array($result_new);
	
	
	
	if(($result_fetch['disability'] == 'yes' && $result_fetch['ill_details'] == '') OR ($result_fetch['abuse'] == 'yes' && $result_fetch['details_crime'] == '') OR
	   ($result_fetch['ex_emp'] == 'yes' && ($result_fetch['designation'] == '' || $result_fetch['dept']== '' || $result_fetch['period_from']== '' || $result_fetch['period_till']== '')) OR
		($result_fetch['employed'] == 'yes' && ($result_fetch['employed_fn'] == '' || $result_fetch['rel']== '' || $result_fetch['rel_emp_des']== '')) OR
		($result_fetch['hold_dual_nat'] == 'yes' && $result_fetch['nat_specify'] == '')
		)
		{
			$below_error = 'If Yes, Above Fields Require';
			$new_error = true;
			}
	
	if($new_error) {
				$_SESSION['below_error'] = $below_error;
				
				header("location: employee_full_details_form_filling_1.php");
					exit();
	} else {





			





			



			header("location: employee_full_details_form_filling_2.php");

			





			exit();





		}





?>



















	




	
		
		
		
	
	
			
		
		
		
		
	
	
	