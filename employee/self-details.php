<?php








	require_once('../config.php');








	require_once('auth.php');











?>








<!DOCTYPE html>








<html lang="en-gb" dir="ltr" class="com_content view-article itemid-723 j33 no-touch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">








  <title>Update Personal Detail</title>








  <link rel="stylesheet" href="../css/css-be258.css" type="text/css">








<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">








<script src="../js/jquery-1.8.3.js" type="text/javascript"></script>








<script src="../js/jquery.validate.js" type="text/javascript"></script>








<script src="../js/jquery.validation.functions.js" type="text/javascript"></script>








        <script type="text/javascript">








            /* <![CDATA[ */








            jQuery(function(){








                jQuery("#emp_first_name").validate({








                    expression: "if (VAL) return true; else return false;",








                    message: "Please enter First Name"








                });








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








	if(isset($_SESSION['USERUPDATE']) && $_SESSION['USERUPDATE']==1 ) {








?>








 








							








<p id="update_success">Updated Employee Details successfully</p>








       								








					








<?php








		unset($_SESSION['USERUPDATE']);








	}








?>








<?php








	if(isset($_SESSION['PASSCNG']) && $_SESSION['PASSCNG']==1 ) {








?>








 








<p id="update_success">Password Changed successfully</p>








       									








<?php








		unset($_SESSION['PASSCNG']);








	}








?>








<?php








$result = mysql_query("SELECT * FROM t_employee WHERE emp_id='$uid'");








$row = mysql_fetch_assoc($result);
















?>








    <form action="employee-update-process.php" method="post">














<table border="1" width="100%">








<tbody>








<tr>








<td colspan="2"><h4><strong>Update Employee Details</strong></h4></td>








</tr>








<tr style="text-align: center;">








<td width="150"><strong>Employee ID</strong></td>








<td><?php echo $row['emp_id']; ?></td>








</tr>








<tr>








<td><strong>Employee First Name</strong></td>








<!--<td><input name="emp_first_name" id="emp_first_name" type="text" value="<?php //echo $row['emp_first_name']; ?>"></td>-->

<td><?php echo $row['emp_first_name']; ?></td>







</tr>


<tr>








<td><strong>Employee Middle Name</strong></td>








<td><input name="emp_middle_name" id="emp_middle_name" type="text" value="<?php echo $row['emp_middle_name']; ?>"></td>








</tr>



<tr>








<td><strong>Employee Last Name</strong></td>








<td><input name="emp_last_name" id="emp_last_name" type="text" value="<?php echo $row['emp_last_name']; ?>"></td>








</tr>
<tr>
<td><strong>Mobile</strong></td>








<td><input name="mobile" id="mobile" type="text" value="<?php echo $row['mobile']; ?>"></td>








</tr>

<tr>


<td><strong>Employee Address</strong></td>








<td><input name="address" id="address" type="text" value="<?php echo $row['address']; ?>"></td>








</tr>



<tr>


<td><strong>Office Extension</strong></td>








<td><input name="ext" id="ext" type="text" value="<?php echo $row['office_ext']; ?>"></td>








</tr>








<!--<tr>


<td><strong>Employee Status</strong></td>








<td><?php //echo $row['emp_status']; ?></td>








</tr>-->


<tr>


<td><strong>Email ID</strong></td>








<td><input name="email" id="email" type="text" value="<?php echo $row['email']; ?>"></td>








</tr>













<tr>
























<tr>








<td>&nbsp;</td>








<td><input name="submit" type="submit" value="Update Employee detail"></td>








</tr>








</tbody>








</table>








</form>





<form action="password-change.php" method="post">








<table border="1" width="100%">








<tbody>








<tr>








<td colspan="2"><h4><strong>Change Password</strong></h4></td>








</tr>








<tr style="text-align: center;">








<td width="150"><strong>New Password</strong></td>








<td><input name="pword" id="pword" type="password"></td>








</tr>








<tr>








<td><strong>Verify New Password</strong></td>








<td><input name="vpword" id="vpword" type="password"></td>








</tr>








<tr>








<td>&nbsp;</td>





<td><input name="submit" type="submit" value="Change Password"></td>








</tr>








</tbody>








</table>








</form>








</article>








	<!-- //Article -->


























    <!-- //MAIN CONTENT -->

















    

















<?php








include('footer.php');








?>








<!-- //FOOTER -->    








  </body></html>