$result_total = mysql_query("SELECT * FROM leave_assign");
$row_total = mysql_fetch_assoc($result_total);
$original_el=$row_total['e_l'];	
	
$result = mysql_query("SELECT * FROM leave_employee_new where emp_id='$uid' ORDER BY leave_id DESC LIMIT 1");
$row = mysql_fetch_assoc($result);


$timestamp = $row['timestamp'];
$datetime = explode(" ",$timestamp);
$date = $datetime[0];
$last_year = date('Y', strtotime($date));

$current_year=date("Y");

 echo $el_days=$row['e_l'];
 
 
 if($last_year == $current_year)
 {
 
 
		
		 if($el_days>5)
		 {
		 $qry_five = "INSERT INTO t_carry_forward(no, id, carry_forward_days) VALUES('','$uid',5)";
			$result_five = mysql_query($qry_five);
			
			
			$qry_total = "INSERT INTO total_carry_forward_with_assigned(no, id, total_days, forward) VALUES('','$uid','$original_el', 5)";
			$result_total = mysql_query($qry_total);
			
		}
		 else
		 {
		 
		 $qry_less = "INSERT INTO t_carry_forward(no, id, carry_forward_days) VALUES('','$uid','$el_days')";
					mysql_query($qry_less);
				
		 
		$qry_total = "INSERT INTO total_carry_forward_with_assigned(no, id, total_days, forward) VALUES('','$uid','$original_el','$el_days')";
			$result_total = mysql_query($qry_total);
		 
		 }
				 
		
 }





	
