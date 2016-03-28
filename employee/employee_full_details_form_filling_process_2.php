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




$eme_cont_name=clean($_POST['eme_cont_name']);
$eme_cont_midd_name=clean($_POST['eme_cont_midd_name']);
$eme_cont_lastname=clean($_POST['eme_cont_lastname']);
$eme_cont_address=clean($_POST['eme_cont_address']);
$eme_cont_relationship=clean($_POST['eme_cont_relationship']);
$eme_cont_res_no=clean($_POST['eme_cont_res_no']);
$eme_cont_mobile=clean($_POST['eme_cont_mobile']);
$glasses=clean($_POST['glasses']);
$cont_lense=clean($_POST['cont_lense']);
$cont_lense_details=clean($_POST['cont_lense_details']);
$clr_blind=clean($_POST['clr_blind']);
$smoke=clean($_POST['smoke']);
$driving_license=clean($_POST['driving_license']);
$driving_license_no=clean($_POST['driving_license_no']);
$driving_license_valid_untill=clean($_POST['driving_license_valid_untill']);
$high_qual=clean($_POST['high_qual']);
$high_qual_from_mm=clean($_POST['high_qual_from_mm']);
$high_qual_from_yy=clean($_POST['high_qual_from_yy']);
$high_qual_to_mm=clean($_POST['high_qual_to_mm']);
$high_qual_to_yy=clean($_POST['high_qual_to_yy']);
$university=clean($_POST['university']);
$university_from_mm=clean($_POST['university_from_mm']);
$university_from_yy=clean($_POST['university_from_yy']);
$university_to_mm=clean($_POST['university_to_mm']);
$university_to_yy=clean($_POST['university_to_yy']);
$business=clean($_POST['business']);
$business_from_mm=clean($_POST['business_from_mm']);
$business_from_yy=clean($_POST['business_from_yy']);
$business_to_mm=clean($_POST['business_to_mm']);
$business_to_yy=clean($_POST['business_to_yy']);
$other=clean($_POST['other']);
$other_from_mm=clean($_POST['other_from_mm']);
$other_from_yy=clean($_POST['other_from_yy']);
$other_to_mm=clean($_POST['other_to_mm']);
$other_to_yy=clean($_POST['other_to_yy']);
$lang1=clean($_POST['lang1']);
$read1=clean($_POST['read1']);
$write1=clean($_POST['write1']);
$speak1=clean($_POST['speak1']);
$lang2=clean($_POST['lang2']);
$read2=clean($_POST['read2']);
$write2=clean($_POST['write2']);
$speak2=clean($_POST['speak2']);
$lang3=clean($_POST['lang3']);
$read3=clean($_POST['read3']);
$write3=clean($_POST['write3']);
$speak3=clean($_POST['speak3']);
$lang4=clean($_POST['lang4']);
$read4=clean($_POST['read4']);
$write4=clean($_POST['write4']);
$speak4=clean($_POST['speak4']);
$lang5=clean($_POST['lang5']);
$read5=clean($_POST['read5']);
$write5=clean($_POST['write5']);
$speak5=clean($_POST['speak5']);
$lang6=clean($_POST['lang6']);
$read6=clean($_POST['read6']);
$write6=clean($_POST['write6']);
$speak6=clean($_POST['speak6']);





/*if($birth_date == '') {
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





		//header("location: employee_full_details_form_filling_1.php");





		exit();





	}*/
	
	
	
																																																																																																																													$ln=clean($_POST['ln']);
																																																																																

//Create INSERT query
	$qry = "UPDATE employee_new SET eme_cont_name='$eme_cont_name', eme_cont_midd_name='$eme_cont_midd_name', eme_cont_lastname='$eme_cont_lastname',
	eme_cont_address='$eme_cont_address',eme_cont_relationship='$eme_cont_relationship', eme_cont_res_no='$eme_cont_res_no',
	eme_cont_mobile='$eme_cont_mobile', glasses='$glasses', cont_lense='$cont_lense', cont_lense_details='$cont_lense_details', 
	clr_blind='$clr_blind', smoke='$smoke', driving_license='$driving_license', driving_license_no='$driving_license_no', driving_license_valid_untill='$driving_license_valid_untill',
    high_qual='$high_qual', high_qual_from_mm='$high_qual_from_mm', high_qual_from_yy='$high_qual_from_yy', high_qual_to_mm='$high_qual_to_mm',
 	high_qual_to_yy='$high_qual_to_yy', university='$university', university_from_mm='$university_from_mm', university_from_yy='$university_from_yy',
	university_to_mm='$university_to_mm', university_to_yy='$university_to_yy', business='$business', business_from_mm='$business_from_mm',
	business_from_yy='$business_from_yy', business_to_mm='$business_to_mm', business_to_yy='$business_to_yy',
	other='$other', other_from_mm='$other_from_mm', other_from_yy='$other_from_yy', other_to_mm='$other_to_mm',  other_to_yy='$other_to_yy', 
	lang1='$lang1',read1='$read1', write1='$write1', speak1='$speak1', lang2='$lang2', read2='$read2', write2='$write2', speak2='$speak2',
	lang3='$lang3',read3='$read3',write3='$write3', speak3='$speak3',
	lang4='$lang4',read4='$read4',write4='$write4', speak4='$speak4',
	lang5='$lang5',read5='$read5',write5='$write5', speak5='$speak5',
	lang6='$lang6',read6='$read6',write6='$write6', speak6='$speak6'
	WHERE emp_id='$uid'";





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
				
				//header("location: employee_full_details_form_filling_1.php");
					exit();
	} else {





			





			



			//header("location: employee_full_details_form_filling_3.php");

			





			exit();





		}





?>



















	




	
		
		
		
	
	
			
		
		
		
		
	
	
	