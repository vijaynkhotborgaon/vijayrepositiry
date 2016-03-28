

<div id="topnav">
			<ul id="hori">
			<li><a href="#" ><strong>Employee Details</strong></a>
			
			 <ul>
    <li><a href="self-details.php" title="Your Details">Your Details</a></li>
	<li><a href="employee_full_details_form_filling.php" title="Full Details">Fill Full Details</a></li>
	
    <li><a href="search-emp.php" title="Search Employee">Search Employee</a></li>
   

 </ul>  </li>    
			
			
			
			
		<!--This is a comment. Comments are not displayed in the browser-->	
			
			
		<li>	<a href="#"><strong>Asset Managments</strong></a>
		
		<ul>
    <li><a href="lapy.php" title="Your Lapy">Your Assets Details</a></li>
    <!--<li><a href="os.php" title="Operating System">OS</a></li>
	 <li><a href="mobile.php" title="Mobile">Mobile</a></li>-->
	
   

 </ul> 
		</li>
			
			
			
			
			
			
	<li><a href="#"><strong>leave managments</strong></a>
			
			<ul>
    <!--<li><a href="list-holidays.php" title="Holidays">List of Holidays</a></li>-->
	
	<?php
			$result_act_new = mysql_query("SELECT * FROM t_employee where emp_id='$uid'");	
			$row_new = mysql_fetch_array($result_act_new);
			$for_ceo=$row_new['assign_to'];
			
			
			$result_act = mysql_query("SELECT * FROM t_employee where assign_to='$uid'");	
			$row = mysql_fetch_array($result_act);
			
			 if(mysql_num_rows($result_act) != 0)
			 {
			 
			?>
	
	<li><a href="leave_request.php" title="Holidays">Leave requests</a></li>
	<?php }
	if($for_ceo!='')
	{
	?>
    
	 <li><a href="apply-leaves.php" title="applied leaves">Apply Leaves</a></li>
	 
	
	 <li><a href="leave-status.php" title="approved leaves">leave status</a></li>
	 	<!-- <li><a href="cancel-leaves.php" title="canceled leaves">Cancel Leaves</a></li>-->
	 
	 <?php }?>

 </ul> 
			
			</li>
			
			</ul>
			
		</div>
			
			