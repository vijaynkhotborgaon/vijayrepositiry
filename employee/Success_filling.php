<?php
require_once('../config.php');
	session_start();
$leadid=$_GET['leadid'];
$resultlead = mysql_query("SELECT * FROM company_lead where lead_id=$leadid");
$rowlead = mysql_fetch_assoc($resultlead);
if($rowlead['status']==1){
header('Location: '.$mainurl.'company');
}
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="com_content view-article itemid-723 j33 no-touch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add company detail</title>
<!--<link rel="stylesheet" href="../css/css-be258.css" type="text/css">
<link rel="stylesheet" type="text/css" href="..\css\next_page.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<script src="../js/jquery-1.8.3.js" type="text/javascript"></script>-->
<link rel="stylesheet" href="../css/css-be258.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="../js/jquery-1.8.3.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
$(function() {
$( ".datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' });
});
</script>
<script src="../js/jquery.validate.js" type="text/javascript"></script>
<script src="../js/jquery.validation.functions.js" type="text/javascript"></script>






<script type="text/javascript">//<![CDATA[
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
/*jQuery(function(){
jQuery("#Company_Logo").validate({
expression: "if (VAL) return true; else return false;",
message: "Please select the company Logo"
});
jQuery("#Name_of_CEO").validate({
expression: "if (VAL) return true; else return false;",
message: "Please enter the name of CEO"
});
jQuery("#caddress").validate({
expression: "if (VAL) return true; else return false;",
message: "Enter the Company address"
});
jQuery("#Number_of_Employees").validate({
expression: "if (VAL) return true; else return false;",
message: "Please enter Number of Employees working in the Company"
});
jQuery("#Industry").validate({
expression: "if (VAL) return true; else return false;",
message: "Please enter the Company Industry"
});
jQuery("#Corporate_Description").validate({
expression: "if (VAL) return true; else return false;",
message: "Please enter the Company Description"
});
jQuery("#Active_From").validate({
expression: "if (VAL) return true; else return false;",
message: "Please select the start date to be active"
});
jQuery("#Active_Till").validate({
expression: "if (VAL) return true; else return false;",
message: "Please select the till date to be active"
});
jQuery("#spocuname1").validate({
expression: "if (VAL) return true; else return false;",
message: "Please enter the user name"
});
jQuery("#spocpword1").validate({
expression: "if (VAL.length > 5 && VAL) return true; else return false;",
message: "Please enter the password"
});
jQuery("#spocvpword1").validate({
expression: "if ((VAL == jQuery('#spocpword1').val()) && VAL) return true; else return false;",
message: "Confirm password field doesn't match the password field"
});
});*/
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
<div id="system-message">
<div class="alert alert-message">
<?php foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>
<?php
echo '<p>',$msg,'</p>'; 
}
?>
</div>
</div>	
<?php
unset($_SESSION['ERRMSG_ARR']);
}
?>
<?php
if(isset($_SESSION['COMREGMESG']) && $_SESSION['COMREGMESG']==1 ) {
?>
<div id="system-message">
<div class="alert alert-message">
<p>Updated the Company Details successfully</p>
</div>
</div>	
<?php
unset($_SESSION['COMREGMESG']);
}

$result = mysql_query("SELECT * FROM company_lead where lead_id=$leadid");
$row = mysql_fetch_assoc($result);
$result2 = mysql_query("SELECT * FROM company_contract where lead_id=$leadid");
$row2 = mysql_fetch_assoc($result2);
?>
<div id="formWrapper1" style="clear:both;">


<h1 style=" font-style: oblique;color:red;">Form Filling has been Completed....</h1>








</div>
</article>
<!-- //Article -->

<!-- //MAIN CONTENT -->


<?php
include('footer.php');
?>
<!-- //FOOTER -->    



  </body></html>