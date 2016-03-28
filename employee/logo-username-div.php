<?php

include('config_files/manage_act.php');

?>


<div id="logo-username">

		
			
			
			
			
			
			
			
			
			
			
			<?php
			
			$user_id=$_SESSION['SESS_USER_ID'];
			
			$id_priority=activity($user_id);
			$result_act = mysql_query("SELECT * FROM t_manage_activity where priority_id='$id_priority'");	
			 if(mysql_num_rows($result_act) != 0)
			{
         
				while($row = mysql_fetch_array($result_act))
				{             
					 
					 $priority_id=$row['act_id'];
					 $result_act_1 = mysql_query("SELECT * FROM t_activity where act_id='$priority_id'");
					 if(mysql_num_rows($result_act_1) != 0)
					{
         
						while($row_1 = mysql_fetch_array($result_act_1))
						{   
							if($row_1['act_name']=='View')
							{
						?>         
							<div style="margin:10px;padding:20px;background-color:yellow;color:green;border-style: solid;float:left;"><a href="view_desc.php?user=<?php echo $user_id;?>"><?php echo 'View';?></a></div>
						<?php 
						}
						if($row_1['act_name']=='Edit')
							{
						?>         
							<div style="margin:10px;padding:20px;background-color:yellow;color:green;border-style: solid;float:left;"><a href="view_desc.php?user=<?php echo $user_id;?>"><?php echo 'Edit';?></a></div>
						<?php 
						}
						if($row_1['act_name']=='Delete')
							{
						?>         
							<div style="margin:10px;padding:20px;background-color:yellow;color:green;border-style: solid;float:left;"><a href="view_desc.php?user=<?php echo $user_id;?>"><?php echo 'Delete';?></a></div>
						<?php 
						}
						
							
					}
					 
					}
			   
			}
			}
			
			
			
			
			
			
			
			
$result = mysql_query("SELECT * FROM t_employee where emp_id='$user_id'");	
$row = mysql_fetch_assoc($result);
?>
			
			
			
			
			
			<!--<img src="<?php //echo $mainurl;?>/<?php //echo $row['photo']; ?>" alt="user" height="100" width="100"/>-->			
			
			<div id="user-details" style="border-radius:10px;border-width:5px;">
<p >Hello <strong><?php echo $row['emp_first_name'];?></strong></p>
<p >Employee ID <strong><?php echo $_SESSION['SESS_USER_ID'];?></strong></p>


	<?php
		$priority_id=$row['priority_id'];
$result = mysql_query("SELECT * FROM t_priority_role where priority_id='$priority_id'");	
$row_id = mysql_fetch_assoc($result);
?>
			
<p >Role <strong><?php echo $row_id['role_name'];?></strong></p>

<a href="logout.php" style="float:left; color:#fff; margin-bottom:5px; margin-top:5px; color:green; padding-left:15px;">Logout</a></p>


			
			
			
			
			
			
			 
			  
			</div>
			</div>