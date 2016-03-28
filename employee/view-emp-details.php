<?php
require_once('../config.php');
require_once('auth.php');?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="com_content view-article itemid-723 j33 no-touch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>View Employee Details</title>
<link rel="stylesheet" href="../css/css-be258.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script src="../js/jquery-1.8.3.js" type="text/javascript"></script>
</head>
<body>

<?php








include('header.php');
include('logo-username-div.php');








?>


<?php


include('topsection.php');

$emp=$_GET['empid'];
?>




<div id="content"><!-- TemplateBeginEditable name="edit1" -->
 
<?php
$result = mysql_query("SELECT * FROM employee_new where emp_id='$emp'");
$row = mysql_fetch_assoc($result);

?>

<article>
<form action="#">
<table border="1" width="100%" >
<tbody>
<tr>








<td colspan="2"><h4><strong>Employee Details</strong></h4></td>








</tr>



<tr style="text-align: center;">
<td width="200">Employee ID</td>
<td><?php echo $row['emp_id']; ?></td>
</tr>

<tr>
<td>Employee First Name</td>
<td><?php echo $row['emp_first_name']; ?></td>
</tr>

<tr>
<td>Employee Middle Name</td>
<td><?php echo $row['emp_middle_name']; ?></td>
</tr>

<tr>
<td>Employee Last Name</td>
<td><?php echo $row['emp_last_name']; ?></td>
</tr>

<tr>
<td>Mobile</td>
<td><?php echo $row['mobile']; ?></td>
</tr>


<tr>
<td>Address</td>
<td><?php echo $row['address']; ?></td>
</tr>

<tr>
<td>Office Extension</td>
<td><?php echo $row['office_ext']; ?></td>
</tr>

<tr>
<td>Employee Status</td>
<td><?php echo $row['emp_status']; ?></td>
</tr>

<tr>
<td>Employee Email</td>
<td><?php echo $row['email']; ?></td>
</tr>


<tr>
<td>Employee Photo </td>
<td><img src="<?php echo $mainurl;?>/<?php echo $row['photo']; ?>" alt="<?php echo $row['photo']; ?>" height="100" width="100" /></td>
</tr>

</tbody>
</table>


<!-- //Article -->


<!-- //MAIN CONTENT -->





</form>








</article>



</div>





















<?php
include('footer.php');
?>
<!-- //FOOTER -->    
  </body></html>