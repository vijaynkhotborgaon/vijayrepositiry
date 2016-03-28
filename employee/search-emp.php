<?php








	require_once('../config.php');








	require_once('auth.php');











?>








<!DOCTYPE html>








<html lang="en-gb" dir="ltr" class="com_content view-article itemid-723 j33 no-touch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">








  <title>Search Employee</title>








  <link rel="stylesheet" href="../css/css-be258.css" type="text/css">








<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">








<script src="../js/jquery-1.8.3.js" type="text/javascript"></script>








<script src="../js/jquery.validate.js" type="text/javascript"></script>








<script src="../js/jquery.validation.functions.js" type="text/javascript"></script>








        <script type="text/javascript">








            /* <![CDATA[ */








            jQuery(function(){








               






                jQuery("#email").validate({








                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",








                    message: "Please enter a valid Email ID"








                });








                jQuery("#telephone").validate({








                    expression: "if (VAL) return true; else return false;",








                    message: "Please enter telephone number"








                });








            });








            /* ]]> */








        </script>








</head>








<body>








<?php








include('header.php');
include('logo-username-div.php');








?>


<?php


include('topsection.php');


?>









	<article>








											<?php








	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {








		foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>








 








<?php








			echo '<p id="error_msg">',$msg,'</p>'; 








		}








		?>








       									







 








        <?php








		unset($_SESSION['ERRMSG_ARR']);








	}








?>






















<?php



$emp_id=$_SESSION['SESS_ID'];
$first_name=$_SESSION['SESS_EMP_FIRST_NAME'];
$middle_name=$_SESSION['SESS_EMP_MIDDLE_NAME'];

$last_name=$_SESSION['SESS_EMP_LAST_NAME'];
$photo=$_SESSION['SESS_PHOTO'];


$result = mysql_query("SELECT * FROM employee_new WHERE emp_id='$emp_id' OR emp_first_name='$first_name' OR emp_middle_name='$middle_name' OR emp_last_name='$last_name'");








$row = mysql_fetch_assoc($result);
















?>








    <form action="search-employee-process.php" method="post" >




<table border="1" width="100%">


















<tbody>








<tr>








<td colspan="2"><h4><strong>Search Employee</strong></h4></td>








</tr>








<tr style="text-align: center;">








<td width="150"><strong>Employee ID</strong></td>








<td><input name="emp_id" id="emp_id" type="text" value=""></td>








</tr>








<tr>








<td><strong>Employee First Name</strong></td>








<td><input name="emp_first_name" id="emp_first_name" type="text" ></td>








</tr>


<tr>








<td><strong>Employee Middle Name</strong></td>








<td><input name="emp_middle_name" id="emp_middle_name" type="text" value=""></td>








</tr>



<tr>








<td><strong>Employee Last Name</strong></td>








<td><input name="emp_last_name" id="emp_last_name" type="text" value=""></td>








</tr>



<tr>








<td>&nbsp;</td>








<td><input name="submit" type="submit" value="Search Employee"></td>








</tr>








</tbody>








</table>



























<?php if(isset($_SESSION['successful_emp_search']) && $_SESSION['successful_emp_search'] == 1)


{






?>



<table border="1" width="100%" style="margin-top:10px;">
<tbody>
<tr>
<td colspan="6"><h4><strong>Found Employee List</strong></h4></td>
</tr>
<tr style="text-align: center;">
<td style="text-align: center;"><strong>No.</strong></td>
<td><strong>Employee ID</strong></td>
<td><strong>Employee First Name</strong></td>
<td><strong>Employee Middle Name</strong></td>
<td><strong>Employee Last Name</strong></td>
<td><strong>Details</strong></td>

</tr>
<?php
if($emp_id != '')
{
$result = mysql_query("SELECT * FROM employee_new WHERE emp_id='$emp_id' ");
$i=1;
while($row = mysql_fetch_array($result))
{ 

?>
<tr style="text-align: center;">
<td><?php echo $i; ?></td>
<td><?php echo $row['emp_id']; ?></td>

<td><?php echo $row['emp_first_name']; ?></td>
<td><?php echo $row['emp_middle_name']; ?></td>
<td><?php echo $row['emp_last_name']; ?></td>
<td><a href="view-emp-details.php?empid=<?php echo $row['emp_id']; ?>">View Details</a></td>

</tr>
<?php   $i++; }} ?>




<?php
if($first_name != '')
{
$result = mysql_query("SELECT * FROM employee_new WHERE emp_first_name='$first_name' ");
$i=1;
while($row = mysql_fetch_array($result))
{ 

?>
<tr style="text-align: center;">
<td><?php echo $i; ?></td>
<td><?php echo $row['emp_id']; ?></td>

<td><?php echo $row['emp_first_name']; ?></td>
<td><?php echo $row['emp_middle_name']; ?></td>
<td><?php echo $row['emp_last_name']; ?></td>
<td><a href="view-emp-details.php?empid=<?php echo $row['emp_id']; ?>">View Details</a></td>

</tr>
<?php   $i++; }} ?>




<?php
if($middle_name != '')
{
$result = mysql_query("SELECT * FROM employee_new WHERE emp_middle_name='$middle_name' ");
$i=1;
while($row = mysql_fetch_array($result))
{ 

?>
<tr style="text-align: center;">
<td><?php echo $i; ?></td>
<td><?php echo $row['emp_id']; ?></td>

<td><?php echo $row['emp_first_name']; ?></td>
<td><?php echo $row['emp_middle_name']; ?></td>
<td><?php echo $row['emp_last_name']; ?></td>
<td><a href="view-emp-details.php?empid=<?php echo $row['emp_id']; ?>">View Details</a></td>

</tr>
<?php   $i++; }} ?>


<?php
if($last_name != '')
{
$result = mysql_query("SELECT * FROM employee_new WHERE emp_last_name='$last_name' ");
$i=1;
while($row = mysql_fetch_array($result))
{ 

?>
<tr style="text-align: center;">
<td><?php echo $i; ?></td>
<td><?php echo $row['emp_id']; ?></td>

<td><?php echo $row['emp_first_name']; ?></td>
<td><?php echo $row['emp_middle_name']; ?></td>
<td><?php echo $row['emp_last_name']; ?></td>
<td><a href="view-emp-details.php?empid=<?php echo $row['emp_id']; ?>">View Details</a></td>

</tr>
<?php   $i++; }} ?>
</tbody>
</table>



















	<!-- //Article -->


























    <!-- //MAIN CONTENT -->






<?php








		unset($_SESSION['successful_emp_search']);








	}







?>






</article>



    

















<?php








include('footer.php');








?>








<!-- //FOOTER -->    








  </body></html>