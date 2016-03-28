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









<form action="employee_full_details_form_filling_process_3.php" method="post">



<div id="initial_details">
<h5 style="text-align:left;margin:15px;color:gray;">Employment History (Start with your current / last employer)</h5>
<table id="table11" border="1" style="width:98%;margin:10px;">
					
					<tr >
						
						<td style="width:42%;" rowspan="3"><h5 style="padding-top:20px;">Name and City of Employer </h5></td>
						<td colspan="4"><h5>Dates</h5></td>
						<td style="width:11%;" rowspan="3"><h5 style="padding-top:20px;">Position Held </h5></td>
						<td style="width:11%;" rowspan="3"><h5 style="padding-top:20px;">Gross Annual Salary Package</h5></td>
						
						
						
					</tr>
					
					<tr>
						<td colspan="2"><h5>From</h5></td>
						<td colspan="2"><h5>To</h5></td>
						
						
					</tr>
					
					<tr>
						<td ><h5>MM</h5></td>
						<td><h5>YY</h5></td>
						<td><h5>MM</h5></td>
						<td><h5>YY</h5></td>
						
					</tr>
					
					<tr style="height:80px;;" >
						
						<td > <textarea name="ill_details" cols="" rows="" id="caddress" style="width:95%;height:95%;"></textarea></td>
						<td ><select id="month_year" style="width:70%">
								  <option value="">Select</option>
								  <option value="volvo">Jan</option>
								  <option value="saab">Feb</option>
								  <option value="opel">March</option>
								  <option value="audi">Apr</option>
								  <option value="audi">May</option>
								  <option value="audi">June</option>
								  <option value="audi">July</option>
								  <option value="audi">Aug</option>
								  <option value="audi">Sept</option>
								  <option value="audi">Oct</option>
								  <option value="audi">Nov</option>
								  <option value="audi">Dec</option>
							</select>
						</td>
						<td >
						<select id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option>$i</option>"; 
						} ?> 
						</select>

						</td>
						<td ><select id="month_year" style="width:70%">
									<option value="">Select</option>
								  <option value="volvo">Jan</option>
								  <option value="saab">Feb</option>
								  <option value="opel">March</option>
								  <option value="audi">Apr</option>
								  <option value="audi">May</option>
								  <option value="audi">June</option>
								  <option value="audi">July</option>
								  <option value="audi">Aug</option>
								  <option value="audi">Sept</option>
								  <option value="audi">Oct</option>
								  <option value="audi">Nov</option>
								  <option value="audi">Dec</option>
							</select>
						</td>
						<td >
						<select id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option>$i</option>"; 
						} ?> 
						</select>
						</td>
						
						<td><input id="lang_input" type="text" name="res_tel" style="width:70%;" ></td>
						<td><input id="lang_input" type="text" name="res_tel" style="width:70%;" ></td>
						
						
						
						
						
					</tr>
					
					<tr style="height:80px;;">
						
						<td> <textarea name="ill_details" cols="" rows="" id="caddress" style="width:95%;height:95%;"></textarea></td>
						<td><select id="month_year" style="width:70%">
								  <option value="">Select</option>
								  <option value="volvo">Jan</option>
								  <option value="saab">Feb</option>
								  <option value="opel">March</option>
								  <option value="audi">Apr</option>
								  <option value="audi">May</option>
								  <option value="audi">June</option>
								  <option value="audi">July</option>
								  <option value="audi">Aug</option>
								  <option value="audi">Sept</option>
								  <option value="audi">Oct</option>
								  <option value="audi">Nov</option>
								  <option value="audi">Dec</option>
							</select>
						
						</td>
						<td>
						<select id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option>$i</option>"; 
						} ?> 
						</select>
						</td>
						<td><select id="month_year" style="width:70%">
								  <option value="">Select</option>
								  <option value="volvo">Jan</option>
								  <option value="saab">Feb</option>
								  <option value="opel">March</option>
								  <option value="audi">Apr</option>
								  <option value="audi">May</option>
								  <option value="audi">June</option>
								  <option value="audi">July</option>
								  <option value="audi">Aug</option>
								  <option value="audi">Sept</option>
								  <option value="audi">Oct</option>
								  <option value="audi">Nov</option>
								  <option value="audi">Dec</option>
							</select>
						
						</td>
						<td>
						<select id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option>$i</option>"; 
						} ?> 
						</select>
						</td>
						
						
						<td><input id="lang_input" type="text" name="res_tel" style="width:70%;" ></td>
						<td><input id="lang_input" type="text" name="res_tel" style="width:70%;" ></td>
						
					</tr>
					
					<tr style="height:80px;;">
						
						<td>  <textarea name="ill_details" cols="" rows="" id="caddress" style="width:95%;height:95%;"></textarea></td>
						<td><select id="month_year" style="width:70%">
								  <option value="">Select</option>
								  <option value="volvo">Jan</option>
								  <option value="saab">Feb</option>
								  <option value="opel">March</option>
								  <option value="audi">Apr</option>
								  <option value="audi">May</option>
								  <option value="audi">June</option>
								  <option value="audi">July</option>
								  <option value="audi">Aug</option>
								  <option value="audi">Sept</option>
								  <option value="audi">Oct</option>
								  <option value="audi">Nov</option>
								  <option value="audi">Dec</option>
							</select>
						
						</td>
						<td>
						<select id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option>$i</option>"; 
						} ?> 
						</select>
						
						</td>
						<td><select id="month_year" style="width:70%">
								  <option value="">Select</option>
								  <option value="volvo">Jan</option>
								  <option value="saab">Feb</option>
								  <option value="opel">March</option>
								  <option value="audi">Apr</option>
								  <option value="audi">May</option>
								  <option value="audi">June</option>
								  <option value="audi">July</option>
								  <option value="audi">Aug</option>
								  <option value="audi">Sept</option>
								  <option value="audi">Oct</option>
								  <option value="audi">Nov</option>
								  <option value="audi">Dec</option>
							</select>
						
						</td>
						<td>
						<select id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option>$i</option>"; 
						} ?> 
						</select>
						</td>
						
						<td><input id="lang_input" type="text" name="res_tel" style="width:70%;" ></td>
						<td><input id="lang_input" type="text" name="res_tel" style="width:70%;" ></td>
						
					</tr>
					
</table></br>
<table id="table11">
<tr>
<td><h5 style="text-align:left;margin:15px;">Reason for leaving last position : </h5></td>
<td><textarea name="ill_details" cols="" rows="" id="caddress" ></textarea></td>
<tr>
</table>




<div style="clear: both; height: 0; overflow: hidden;"> </div>
</div>













<div id="initial_details">
<h5 style="text-align:left;margin:15px;color:gray;">References</h5>
<h5 style="text-align:left;margin:20px 0px 0px 15px;color:#848484;">1. </h5>
<table id="table11" border="1" style="width:80%;margin:0px 0px 15px 30px;">
					
					<tr >
						
						<td style="width:20%;" ><h5 style="text-align:right;">Name :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
					</tr>
					
					<tr>
						<td  ><h5 style="text-align:right;">Address :</h5></td>
						<td ><textarea name="ill_details" cols="" rows="" id="caddress" ></textarea></td>
						
						
						
						
						
					</tr>
					
					<tr >
						
						<td  ><h5 style="text-align:right;">Position or title :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
					</tr>
					
					<tr>
						<td  ><h5 style="text-align:right;">Telephone :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
						
					</tr>
					
					<tr >
						
						<td ><h5 style="text-align:right;">Fax :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
					</tr>
					
					<tr>
						<td ><h5 style="text-align:right;">Email Address :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
						
					</tr>
					
					
					
</table></br>



<h5 style="text-align:left;margin:20px 0px 0px 15px;color:#848484;">2. </h5>
<table id="table11" border="1" style="width:80%;margin:0px 0px 15px 30px;">
					
					<tr >
						
						<td style="width:20%;" ><h5 style="text-align:right;">Name :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
					</tr>
					
					<tr>
						<td  ><h5 style="text-align:right;">Address :</h5></td>
						<td ><textarea name="ill_details" cols="" rows="" id="caddress" ></textarea></td>
						
						
						
						
						
					</tr>
					
					<tr >
						
						<td  ><h5 style="text-align:right;">Position or title :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
					</tr>
					
					<tr>
						<td  ><h5 style="text-align:right;">Telephone :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
						
					</tr>
					
					<tr >
						
						<td ><h5 style="text-align:right;">Fax :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
					</tr>
					
					<tr>
						<td ><h5 style="text-align:right;">Email Address :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
						
					</tr>
					
					
					
</table></br>



<h5 style="text-align:left;margin:20px 0px 0px 15px;color:#848484;">3. </h5>
<table id="table11" border="1" style="width:80%;margin:0px 0px 15px 30px;">
					
					<tr >
						
						<td style="width:20%;" ><h5 style="text-align:right;">Name :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
					</tr>
					
					<tr>
						<td  ><h5 style="text-align:right;">Address :</h5></td>
						<td ><textarea name="ill_details" cols="" rows="" id="caddress" ></textarea></td>
						
						
						
						
						
					</tr>
					
					<tr >
						
						<td  ><h5 style="text-align:right;">Position or title :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
					</tr>
					
					<tr>
						<td  ><h5 style="text-align:right;">Telephone :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
						
					</tr>
					
					<tr >
						
						<td ><h5 style="text-align:right;">Fax :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
					</tr>
					
					<tr>
						<td ><h5 style="text-align:right;">Email Address :</h5></td>
						<td ><input type="text" name="res_tel" style="width:50%;" ></td>
						
						
						
						
						
					</tr>
					
					
					
</table>




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