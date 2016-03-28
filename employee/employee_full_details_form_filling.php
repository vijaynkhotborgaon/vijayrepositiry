<?php
require_once('../config.php');








	require_once('auth.php');



?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="com_content view-article itemid-723 j33 no-touch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add company detail</title>
<link rel="stylesheet" href="../css/css-be258.css" type="text/css">
<link rel="stylesheet" type="text/css" href="..\css\next_page.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<script src="../js/jquery-1.8.3.js" type="text/javascript"></script><script type="text/javascript">//<![CDATA[ 
$(document).ready(function(){
//when the Add Filed button is clicked
$("#addSpoc").click(function (e) {
//Append a new row of code to the "#items" div
var i = $('#Spoc_Details fieldset').size() + 1;
var n = $("#Spoc_Details fieldset").length;
if (n <=4) {
$("#Spoc_Details").append('<fieldset class="fBlockspoc" id="Spocs"><legend>Secondary Spocs</legend><p><label>Name</label><input type="text" name="spocname[]" id="spocname"></p><p><label>Email</label><input type="text" name="spocemail[]" id="spocemail"></p><p><label>Phone Number</label><input type="text" name="spocphone[]" id="spocphone"></p><p><label>Designation</label><input type="text" name="spocdesignation[]" id="spocdesignation"></p><p><label>User name</label><input type="text" name="spocuname[]" id="spocuname"></p><p><label>Password</label><input type="password" name="spocpword[]" id="spocpword"></p><p><label>Verify Password</label><input type="password" name="spocvpword[]" id="spocvpword"></p><a href="javascript:void(0)" id="remSpoc">Remove spoc</a></fieldset>');
i++;
}
else{
alert("Maximum five spocs are allowed!")
}
});
$("body").on("click", "#remSpoc", function (e) {
$(this).parent("fieldset").remove();
});
});
</script>
<script src="../js/jquery.validate.js" type="text/javascript"></script>
<script src="../js/jquery.validation.functions.js" type="text/javascript"></script>
<script type="text/javascript">
/* <![CDATA[ */
jQuery(function(){
jQuery("#title").validate({
expression: "if (VAL) return true; else return false;",
message: "Enter title"
});
jQuery("#fn").validate({
expression: "if (VAL) return true; else return false;",
message: "Please enter the name of CEO"
});
jQuery("#ln").validate({
expression: "if (VAL) return true; else return false;",
message: "Enter the Company address"
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











<div id="content" style="clear:both;">
<article>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {?>

<?php foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>
<?php
echo '<p id="error_msg">',$msg,'</p>'; 
}
?>

<?php
unset($_SESSION['ERRMSG_ARR']);
}
?>
<?php

$result = mysql_query("SELECT * FROM employee_new WHERE emp_id='$uid'");
$row = mysql_fetch_assoc($result);

?>
<div id="formWrapper1" style="clear:both;">
<div id="initial_details" >
<h1 style="color:#4E9258;">APPLICATION FORM</h1>
</div>

<div id="initial_details">
<p><h2 style="margin-top:10px; color:#4E9258;">PLEASE READ THESE INSTRUCTIONS CAREFULLY</h2></p>
<p>1. Do not leave any item blank. If it is not applicable to you, indicate "N.A."</p>
<p>2. False particulars or willful suppression of material facts will render you liable to disqualification, or, if appointed, to termination and/or appropriate legal proceedings. </p>
</div>


<div id="initial_details" style="clear:both;">
<h3 style="margin-top:10px; margin-bottom:10px;color:#4E9258;">Position Offered : <?php echo $row['role']; ?></h3>
</div>








<form action="employee_full_details_form_filling_process.php" method="post">
<div id="initial_details">
<table id="table1" style="width:100%;margin-top:10px; ">
					<tr>
						<td><label>Name : </label></td>
						<td><input type="text" name="title" style="width:7%;" placeholder='Title' value="<?php echo $row['emp_title_name']; ?>"><input type="text" name="fn" style="width:20%;" placeholder='First Name' value="<?php echo $row['emp_first_name']; ?>"><input type="text" name="mn" style="width:20%;" placeholder='Middle Name' value="<?php echo $row['emp_middle_name']; ?>"><input type="text" name="ln" style="width:20%;" placeholder='Last Name' value="<?php echo $row['emp_last_name']; ?>"></td>
					
					</tr>
</table>

	<div id="address1">
	<table id="table1" style="width:100%; ">
					<tr>
						<td style="width:30%;"><label>Present Address : </label> </td>
						<td><textarea rows="5" cols="60" name="address1" ><?php echo $row['address']; ?></textarea></td>
					
					</tr>
					
					<tr>
						<td style="width:30%;"><label>Residence Tel :  </label> </td>
						<td><input type="text" name="tel_1" style="width:60%;" value="<?php echo $row['res_tel']; ?>"></td>
					
					</tr>
					
					<tr>
						<td style="width:30%;"><label>Office Tel :  </label> </td>
						<td><input type="text" name="off_tel_1" style="width:60%;" value="<?php echo $row['office_ext']; ?>" ></td>
					
					</tr>
					
					<tr>
						<td style="width:30%;"><label>Mobile Tel :  </label> </td>
						<td><input type="text" name="mob_1" style="width:60%;" value="<?php echo $row['mobile']; ?>"></td>
					
					</tr>
					
					<tr>
						<td style="width:30%;"><label>Fax :  </label> </td>
						<td><input type="text" name="fax1" style="width:60%;" value="<?php echo $row['fax1']; ?>"></td>
					
					</tr>
					
					<tr>
						<td style="width:30%;"><label>Email Address :   </label></td>
						<td><input type="text" name="email_1" style="width:60%;" value="<?php echo $row['email']; ?>" ></td>
					
					</tr>
					
					
	</table>
	
	</div>
	
	<div id="address2">
	
	<table id="table1" style="width:100%; ">
					<tr>
						<td style="width:30%;"><label>Permanent Address : </label> </td>
						<td><textarea rows="5" cols="60" name="address2"> <?php echo $row['address2']; ?></textarea></td>
					
					</tr>
					
					<tr>
						<td style="width:30%;"><label>Residence Tel :  </label> </td>
						<td><input type="text" name="tel_2" style="width:60%;" value="<?php echo $row['per_tel']; ?>"></td>
					
					</tr>
					
					<tr>
						<td style="width:30%;"><label>Office Tel :   </label></td>
						<td><input type="text" name="off_tel_2" style="width:60%;" value="<?php echo $row['per_office_tel']; ?>"></td>
					
					</tr>
					
					<tr>
						<td style="width:30%;"><label>Mobile Tel :   </label></td>
						<td><input type="text" name="mob_2" style="width:60%;" value="<?php echo $row['per_mobile_tel']; ?>"></td>
					
					</tr>
					
					<tr>
						<td style="width:30%;"><label>Fax :  </label> </td>
						<td><input type="text" name="fax2" style="width:60%;" value="<?php echo $row['fax2']; ?>" ></td>
					
					</tr>
					
					<tr>
						<td style="width:30%;"><label>Email Address :   </label></td>
						<td><input type="text" name="email2" style="width:60%;" value="<?php echo $row['per_email']; ?>"></td>
					
					</tr>
	</table>
	
	</div>
	
	<div style="clear: both; height: 0; overflow: hidden;"> </div>
	

</div>

<center><input type="submit" value="SUBMIT AND NEXT" style="background-color:#4E9258;color:#ffffff; position:relative; top:5px; margin-bottom:10px; border-radius:5px; float:right;" /></center>

		

</form>
</div>
</article>
<!-- //Article -->

<!-- //MAIN CONTENT -->


<?php
include('footer.php');
?>
<!-- //FOOTER -->    



  </body></html>