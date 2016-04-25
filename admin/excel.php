<?php 

require_once('../config.php');
	
	

	$output='';
	
	
		$sql="SELECT * FROM leave_employee_new";
		$result=mysql_query($sql);
		if(mysql_num_rows($result)>0)
		{
		
			$output .= '
					<table>
					<tr style="text-align: center;">
<td style="text-align: center;"><strong>No.</strong></td>
<td><strong>Employee Code</strong></td>
<td><strong>Employee Name</strong></td>
<td><strong>Report To</strong></td>
<td><strong>Leave Type</strong></td>
<td><strong>From</strong></td>
<td><strong>To</strong></td>
<td><strong>Number of Days</strong></td>
<td><strong>Purpose</strong></td>
<td><strong>Comment from manager</strong></td>
<td><strong>Status</strong></td>
</tr>';

$result = mysql_query("SELECT * FROM leave_employee_new");
$i=1;

while($row = mysql_fetch_array($result))

  { 
 
					
					$output .= '<tr style="text-align: center;">

<td>'.$i++.'</td>';

$emp_id_1=$row['emp_id'];
$result_1 = mysql_query("SELECT * FROM t_employee where emp_id='$emp_id_1'");
while($row_1 = mysql_fetch_array($result_1))
{

 $output .= '<td>'.$row_1['emp_code'].'</td>';
$emp_name=$row_1['emp_first_name'];
$emp_mid_name=$row_1['emp_middle_name'];
$emp_last_name=$row_1['emp_last_name'];

$assign_to=$row['assign_to'];

$result_2 = mysql_query("SELECT * FROM t_employee where emp_id=$assign_to");
while($row_2 = mysql_fetch_array($result_2))
{
$emp_name_1=$row_2['emp_first_name'];
$emp_mid_name_1=$row_2['emp_middle_name'];
$emp_last_name_1=$row_2['emp_last_name'];
}

$output .= '<td>'.$emp_name." ".$emp_mid_name." ".$emp_last_name.'</td>';

$output .= '<td>'.$emp_name_1." ".$emp_mid_name_1." ".$emp_last_name_1.'</td>';

$output .= '<td>'.$row['leave_type'].'</td>';

$output .= '<td>'.$row['from_date'].'</td>';

$output .= '<td>'.$row['till'].'</td>';


$output .= '<td>'.$row['number_of_day'].'</td>';
$output .= '<td>'.$row['purpose'].'</td>';

$output .= '<td>'.$row['comment'].'</td>';


if($row['status']=='Pending') {

$output .= '<td style="color:red;">Pending</td>';
}

if($row['status']=='Approved') {

$output .= '<td style="color:green;">Approved</td>';

}

if($row['status']=='Rejected') {

$output .= '<td style="color:#B09EC8;">Rejected</td>';

}

if($row['status']=='cancled') {

$output .= '<td style="color:#210B61;">Cancelled By <?php echo $emp_name." ".$emp_mid_name." ".$emp_last_name;  ?></td>';

}















}
					
	}
					$output .= '<table>';
					header("Content-Type:application/xls");
					header("Content-Disposition:attachment; filename=download.xls");
					echo $output;
					
					
					
					
					
					
}
	
	
	
	
	
	
	
	
	
	?>