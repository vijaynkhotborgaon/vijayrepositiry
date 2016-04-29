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
	
	
	
	
	
	
	$result_total = mysql_query("SELECT * FROM leave_assign");
$row_total = mysql_fetch_assoc($result_total);
$original_el=$row_total['e_l'];
$original_pl=$row_total['p_l'];
$original_cl=$row_total['c_l'];	
$original_ml=$row_total['m_l'];
$original_patl=$row_total['pat_l'];

	
$result = mysql_query("SELECT * FROM leave_employee_new where emp_id='$uid' ORDER BY leave_id DESC LIMIT 1");
$row = mysql_fetch_assoc($result);
//$row_pending=$row['status'];

$timestamp = $row['timestamp'];
$datetime = explode(" ",$timestamp);
$date = $datetime[0];
$last_year = date('Y', strtotime($date));
$current_year=date("Y");

$el_days=$row['e_l'];
 
 
 
	
	

	

	//Sanitize the POST values

$leave_type = clean($_POST['Industry']);
	
	$result = mysql_query("SELECT * FROM leave_type where leave_type_id= $leave_type");
$row = mysql_fetch_array($result);
$leave_type1=$row['type_name'];
	
$from = clean($_POST['activefrom']);
$till = clean($_POST['activetill']);
$half_day = clean($_POST['half_day'])/2;
$purpose = clean($_POST['caddress']);


if($row_pending == 'Pending')
{
		$_SESSION['Pending'] = 'Pending';

		session_write_close();


		header("location: apply-leaves.php");


		exit();


}




//Define out start and end dates
/*$datetime = new DateTime();

$start = $datetime->format("$from");
$end = $datetime->format("$till");

//Define our holidays
//New Years Day
//Martin Luther King Day
$holidays=array();
$result = mysql_query("SELECT * from holidays");
while($holidays_1 = mysql_fetch_assoc($result))
{
$holidays=$holidays_1['holiday']."</br>";
}

//Create a DatePeriod with date intervals of 1 day between start and end dates
$period = new DatePeriod( $start, new DateInterval( 'P1D' ), $end );

//Holds valid DateTime objects of valid dates
$date_1 = array();
//iterate over the period by day
foreach( $period as $day )
{
        //If the day of the week is not a weekend
	$dayOfWeek = $day->format( 'N' );
	if( $dayOfWeek < 6 ){
                //If the day of the week is not a pre-defined holiday
		$format = $day->format( 'Y-m-d' );
		if( false === in_array( $format, $holidays ) ){
                        //Add the valid day to our days array
                        //This could also just be a counter if that is all that is necessary
			$date_1[] = $day;
		}
	}
}
$date_1=count( $date_1 ) + 1 ;*/





/* code for excluding sunday, sat, holidays */
/*$holidays=array();
$result = mysql_query("SELECT * from holidays");
while($holidays_1 = mysql_fetch_assoc($result))
{
array_push($holidays,$holidays_1['holiday']);
}



$begin = new DateTime("$from" );
$end = new DateTime("$till");
$end = $end->modify( '+1 day' ); 
$date_1=0;
$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval ,$end);

foreach($daterange as $date){
$dayOfWeek = $date->format( 'N' );
    $date->format("Y-m-d");
	if( $dayOfWeek < 7 ){
                //If the day of the week is not a pre-defined holiday
		$format = $date->format( 'Y-m-d' );
		

			if (false===in_array($format, $holidays))
			  {
			     $date_1++;
			  }
		
	}
}*/
$begin = new DateTime("$from" );
$end = new DateTime("$till");
$end = $end->modify( '+1 day' ); 
$interval = $end->diff($begin);
$date_1=$interval->format('%a');


if($half_day !=0 )
{

$date_1=$date_1-$half_day;
}

//echo $date_1;

	
	
if($leave_type == '') {





		$errmsg_arr[] = 'select Leave Type';





		$errflag = true;





	}
	
	
	/*if($middle_name == '') {





		$errmsg_arr[] = 'Enter middle Name';





		$errflag = true;





	}*/
	
	$now = time();


if (strtotime($from) <$now) {
    $errmsg_arr[] = 'Selected From Date Invalid';





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
	
	/*if($days == '' || $date_1 == 0) {





		$errmsg_arr[] = 'Invalid Number of Days';





		$errflag = true;





	}*/
	
		$result_ml = mysql_query("SELECT * FROM leave_employee_new  where emp_id='$uid' AND leave_type='M.L.' ORDER BY leave_id DESC LIMIT 1");
$num_ml = mysql_fetch_assoc($result_ml);
$state=$num_ml['status'];
echo $leave_type1;
if($state=='Approved' AND $leave_type1=='M.L.')
{

$errmsg_arr[] = 'You already applied for maternity leave';





		$errflag = true;


}

if($state=='Approved' AND $leave_type1=='P.L.')
{

$errmsg_arr[] = 'You already applied for paternity leave';





		$errflag = true;


}





	

		if($errflag) {





		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;





		session_write_close();





		header("location: apply-leaves.php");


exit();


		





	}

	$result_t = mysql_query("SELECT * FROM leave_employee_new  where emp_id='$uid'");
$num_rows = mysql_num_rows($result_t);
if(($current_year!=$last_year) AND ($num_rows != 0))
 {
 
 
 
		$result_tot = mysql_query("SELECT * FROM total_carry_forward_with_assigned where id='$uid' ORDER BY no DESC LIMIT 1");
$row_tot = mysql_fetch_assoc($result_tot);
$total_days=$row_tot['total_days'];
$forward=$row_tot['forward'];
$sum=$total_days+$forward;

$result_assign = mysql_query("SELECT * FROM leave_assign");
$row_assign = mysql_fetch_assoc($result_assign);
$pl_assign=$row_assign['p_l'];
$cl_assign=$row_assign['c_l'];
$ml_assign=$row_assign['m_l'];

$original_pl_remaining=$pl_assign+$row_tot['pl_remaining'];
$original_cl_remaining=$cl_assign+$row_tot['cl_remaining'];

				if($date_1>$sum)

				{
				
				$_SESSION['till_date'] = 1;

				session_write_close();

				header("location: apply-leaves.php");
				
				exit();



				}

$result_assign = mysql_query("SELECT * FROM t_employee WHERE emp_id='$uid'");
			$row_assign = mysql_fetch_array($result_assign);
			$assign_to=$row_assign['assign_to'];


 $qry = "INSERT INTO leave_employee_new(emp_id, assign_to,leave_type, from_date, till, number_of_day, purpose, status, comment, p_l, c_l, e_l ,m_l,pat_l,pl_for_previous,cl_for_previous,el_for_previous) VALUES('$uid','$assign_to', '$leave_type1','$from','$till',$date_1,'$purpose','Pending' ,'-No Comments-', '$original_pl_remaining', '$original_cl_remaining', '$sum','$original_ml','$original_patl','$original_pl','$original_cl','$sum')";
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





	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$result_emp = mysql_query("SELECT * FROM leave_employee_new WHERE emp_id='$uid'");
	if(mysql_num_rows($result_emp)==0)
	{
			
			$result_plcl = mysql_query("SELECT * FROM leave_assign");
			$row_plcl = mysql_fetch_array($result_plcl);
			
			$pl=$row_plcl['p_l'];
			$cl=$row_plcl['c_l'];
			$el=$row_plcl['e_l'];
			$ml=$row_plcl['m_l'];
			$patl=$row_plcl['pat_l'];
			
			/*if($leave_type1=='P. L.' AND  ($date_1>$pl OR $pl== 0))
			{
			$_SESSION['from_date'] = 1;

				session_write_close();

			header("location: apply-leaves.php");
			
			exit();

			
			}
			
			
			if($leave_type1=='C. L.' AND ($date_1>$cl OR $cl== 0))
			{
			$_SESSION['till_date'] = 1;

				session_write_close();

				header("location: apply-leaves.php");
				
				exit();

				

			
			}
			
			if($leave_type1=='E.L.' AND ($date_1>$el OR $el== 0))
			{
			$_SESSION['till_date'] = 1;

				session_write_close();

				header("location: apply-leaves.php");

				exit();

			
			}*/
			
			$result_assign = mysql_query("SELECT * FROM t_employee WHERE emp_id='$uid'");
			$row_assign = mysql_fetch_array($result_assign);
			$assign_to=$row_assign['assign_to'];
			
			$result_tot = mysql_query("SELECT * FROM total_carry_forward_with_assigned where id='$uid' ORDER BY no DESC LIMIT 1");
$row_tot = mysql_fetch_assoc($result_tot);
$total_days=$row_tot['total_days'];
$forward=$row_tot['forward'];
$sum=$total_days+$forward;
			
			
			$result_assign = mysql_query("SELECT * FROM leave_assign");
$row_assign = mysql_fetch_assoc($result_assign);
$pl_assign=$row_assign['p_l'];
$cl_assign=$row_assign['c_l'];
$original_pl_remaining=$pl_assign+$row_tot['pl_remaining'];
$original_cl_remaining=$cl_assign+$row_tot['cl_remaining'];
			
			
			
			$qry = "INSERT INTO leave_employee_new(emp_id, assign_to,leave_type, from_date, till, number_of_day, purpose, status, comment, p_l, c_l, e_l,m_l,pat_l,pl_for_previous,cl_for_previous,el_for_previous ) VALUES('$uid','$assign_to', '$leave_type1','$from','$till',$date_1,'$purpose','Pending' ,'-No Comments-', $original_pl_remaining, $original_cl_remaining, $el,$ml,$patl,$pl,$cl,$el)";
			$result = @mysql_query($qry);
			
			
				
	
	/* mail to manager */
	
	
	if($result)
	{

$result_assign = mysql_query("SELECT * FROM t_employee WHERE emp_id='$uid'");
			$row_assign = mysql_fetch_array($result_assign);
			$assign_to=$row_assign['assign_to'];
			$emp_mail=$row_assign['email'];
			
			$result_2 = mysql_query("SELECT * FROM t_employee where emp_id=$assign_to");
while($row_2 = mysql_fetch_array($result_2))
{
$emp_name_1=$row_2['emp_first_name'];
$emp_mid_name_1=$row_2['emp_middle_name'];
$emp_last_name_1=$row_2['emp_last_name'];
$email=$row_2['email'];
}



/*$query1 = mysql_query("select * from employee_seq ORDER BY emp_id DESC LIMIT 1");
$row1=  mysql_fetch_assoc($query1);*/

echo $mail_emp= "<p><b>Hi ".$emp_name_1."</b>,</p><p> You got leave request from <b>".$row_assign['emp_first_name']." ".$row_assign['emp_middle_name']." ".$row_assign['emp_last_name']."</b>, go to your dashboard and please take a action on same. </p>
<p>Thank you,</p>
<p>Archon System Pvt Lt.</p>";

$to = $email;
$subject = "Leave Request";


$mail_body = '<html>
<body>' . $mail_emp . ' 
</body>
</html>';




$headers = "From: ".$emp_mail." \r\n";
  $headers .= "Reply-To: ".$emp_mail." \r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$sendmail= mail($to, $subject, $mail_body, $headers);

/* mail to HR or Admin on leave request */
$result_admin = mysql_query("SELECT * FROM users");
			$row_admin = mysql_fetch_array($result_admin);
			$admin_mail=$row_admin['email_admin'];



echo $mail_emp_1= "<p><b>Hi ".$row_admin['user_name']."</b>,</p><p> leave request from <b>".$row_assign['emp_first_name']." ".$row_assign['emp_middle_name']." ".$row_assign['emp_last_name']."</b></p>
<p>Thank you,</p>
<p>Archon System Pvt Lt.</p>";

$to = $admin_mail;
$subject = "Leave Request";


$mail_body = '<html>
<body>' . $mail_emp_1 . ' 
</body>
</html>';




$headers = "From: ".$emp_mail." \r\n";
  $headers .= "Reply-To: ".$emp_mail." \r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$sendmail= mail($to, $subject, $mail_body, $headers);





	}
		
	
			
			
			
			
			
			
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
			
			$result_plcl = mysql_query("SELECT * FROM leave_employee_new WHERE emp_id='$uid' ORDER BY timestamp DESC LIMIT 1");
			$row_plcl = mysql_fetch_array($result_plcl);
			$pl=$row_plcl['p_l'];
			$cl=$row_plcl['c_l'];
			$el=$row_plcl['e_l'];
			$ml=$row_plcl['m_l'];
			$patl=$row_plcl['pat_l'];
			$pl_or_cl=$row_plcl['leave_type'];
			
			
			/*if($leave_type1=='P. L.' AND  ($date_1>$pl OR $pl== 0))
			{
			$_SESSION['from_date'] = 1;

				session_write_close();

			header("location: apply-leaves.php");
			exit();
			
			}
			
			
			if($leave_type1=='C. L.' AND ($date_1>$cl OR $cl== 0))
			{
			$_SESSION['till_date'] = 1;

				session_write_close();

				header("location: apply-leaves.php");

				exit();

			
			}
			
			if($leave_type1=='E.L.' AND ($date_1>$el OR $el== 0))
			{
			$_SESSION['till_date'] = 1;

				session_write_close();

				header("location: apply-leaves.php");

				exit();

			
			}*/
				$result_assign = mysql_query("SELECT * FROM t_employee WHERE emp_id='$uid'");
			$row_assign = mysql_fetch_array($result_assign);
			$assign_to=$row_assign['assign_to'];
			
			
			
			$qry = "INSERT INTO leave_employee_new(emp_id, assign_to, leave_type, from_date, till, number_of_day, purpose, status, comment, p_l, c_l, e_l,m_l,pat_l,pl_for_previous,cl_for_previous,el_for_previous ) VALUES('$uid', '$assign_to','$leave_type1','$from','$till', $date_1,'$purpose','Pending' ,'-No Comments-', $pl, $cl, $el,$ml,$patl,$pl,$cl,$el)";
			$result = @mysql_query($qry);
			
				
	
	/* mail to manager On Leave Request*/
	
	
	if($result)
	{

$result_assign = mysql_query("SELECT * FROM t_employee WHERE emp_id='$uid'");
			$row_assign = mysql_fetch_array($result_assign);
			$assign_to=$row_assign['assign_to'];
			$emp_mail=$row_assign['email'];
			
			$result_2 = mysql_query("SELECT * FROM t_employee where emp_id=$assign_to");
while($row_2 = mysql_fetch_array($result_2))
{
$emp_name_1=$row_2['emp_first_name'];
$emp_mid_name_1=$row_2['emp_middle_name'];
$emp_last_name_1=$row_2['emp_last_name'];
$email=$row_2['email'];
}



/*$query1 = mysql_query("select * from employee_seq ORDER BY emp_id DESC LIMIT 1");
$row1=  mysql_fetch_assoc($query1);*/

echo $mail_emp= "<p><b>Hi ".$emp_name_1."</b>,</p><p> You got leave request from <b>".$row_assign['emp_first_name']." ".$row_assign['emp_middle_name']." ".$row_assign['emp_last_name']."</b>, go to your dashboard and please take a action on same. </p>
<p>Thank you,</p>
<p>Archon System Pvt. Ltd.</p>";

$to = $email;
$subject = "Leave Request";


$mail_body = '<html>
<body>' . $mail_emp . ' 
</body>
</html>';




$headers = "From: ".$emp_mail." \r\n";
  $headers .= "Reply-To: ".$emp_mail." \r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$sendmail= mail($to, $subject, $mail_body, $headers);


/* mail to HR or Admin on leave request */
$result_admin = mysql_query("SELECT * FROM users");
			$row_admin = mysql_fetch_array($result_admin);
			$admin_mail=$row_admin['email_admin'];



echo $mail_emp_1= "<p><b>Hi ".$row_admin['user_name']."</b>,</p><p> leave request from <b>".$row_assign['emp_first_name']." ".$row_assign['emp_middle_name']." ".$row_assign['emp_last_name']." </b></p>
<p>Thank you,</p>
<p>Archon System Pvt. Ltd.</p>";

$to = $admin_mail;
$subject = "Leave Request";


$mail_body = '<html>
<body>' . $mail_emp_1 . ' 
</body>
</html>';




$headers = "From: ".$emp_mail." \r\n";
  $headers .= "Reply-To: ".$emp_mail." \r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$sendmail= mail($to, $subject, $mail_body, $headers);




	}
	
	
	

		
	
			
			
			
			
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
		
}
	
		
	?>
	
	