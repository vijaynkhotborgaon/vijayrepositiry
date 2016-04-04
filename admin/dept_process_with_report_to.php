
<?php
ob_start();
 require_once('../config.php');
	require_once('auth.php');
$selected=$_POST['selected'];


  $events = array();
  
$resultid = mysql_query("SELECT * FROM t_employee where dept_id=$selected");
if(mysql_num_rows($resultid)>0)
{
while($fetch = mysql_fetch_array($resultid)){
$pr_id=$fetch['priority_id'];
 $resultid_1 = mysql_query("SELECT * FROM t_priority_role where priority_id=$pr_id");
  $fetch_1 = mysql_fetch_array($resultid_1);
     $e = array();
	 $e['status']='success';
	 $e['emp_id']=$fetch['emp_id'];
     $e['emp_first_name'] = $fetch['emp_first_name'];
	 $e['role_name']=$fetch_1['role_name'];
    
     array_push($events, $e);
   }
   ob_end_clean();
   echo json_encode($events);
 }
 else
 {
 $e['status']='fail';
  array_push($events, $e);
   echo json_encode($events);
 }
 


?>