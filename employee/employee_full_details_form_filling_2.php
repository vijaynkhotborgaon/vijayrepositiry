<?php
require_once('../config.php');
require_once('auth.php');

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





<!--<script type="text/javascript">//<![CDATA[
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
</script>-->
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




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $("#cont_lense").click(function(){
        $("#table111").show();
        
    });
});

$(document).ready(function(){
    $("#cont_lense_1").click(function(){
        $("#table111").hide();
        
    });
});

$(document).ready(function(){
    $("#driving_license").click(function(){
        $("#table_license").show();
        
    });
});

$(document).ready(function(){
    $("#driving_license_1").click(function(){
        $("#table_license").hide();
        
    });
});





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

$result = mysql_query("SELECT * FROM employee_new WHERE emp_id='$uid'");
$row = mysql_fetch_assoc($result);
?>
<div id="formWrapper1" style="clear:both;">









<form action="employee_full_details_form_filling_process_2.php" method="post">


<div id="initial_details">
<h5 style="text-align:left;margin:10px;color:gray;">Emergency Contact Details<h5>
<table id="table11" >
					
					<tr>
						<td style="width:10%;"><label>Name :</label> </td>
						<td><input type="text" name="eme_cont_name" style="width:25%;" placeholder='First Name' value="<?php echo $row['eme_cont_name']; ?>"><input type="text" name="eme_cont_midd_name" style="width:25%;" placeholder='Middle Name' value="<?php echo $row['eme_cont_midd_name']; ?>"><input type="text" name="eme_cont_lastname" style="width:25%;" placeholder='Last Name' value="<?php echo $row['eme_cont_lastname']; ?>"></td>
					</tr>

					<tr>
						<td style="width:10%;"><label>Address :</label> </td>
						<td><textarea name="eme_cont_address" cols="" rows="" id="caddress"></textarea></td>
					</tr>
					
</table>




<table id="table11" >
					
					<tr>
						<td style="width:30%;"><label>Relationship :</label> </td>
						<td><input type="text" name="eme_cont_relationship" style="width:70%;" ></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Residence Tel. :</label> </td>
						<td><input type="text" name="eme_cont_res_no" style="width:70%;" ></td>
					</tr>
					
					
					<tr>
						<td style="width:10%;"><label> Mobile Tel. :</label> </td>
						<td><input type="text" name="eme_cont_mobile" style="width:70%;" ></td>
					</tr>
					
					
					
					
					
</table>

<div style="clear: both; height: 0; overflow: hidden;"> </div>
</div>


<div id="initial_details">
<h5 style="text-align:left;margin:10px;color:gray;">Do You Wear</h5>
<table id="table11" >
					
					<tr>
						<td style="width:10%;"><label>a) Glasses? :</label> </td>
						<td><input type="radio" name="glasses" value="yes" style="margin-left:15px;"/>Yes      <input type="radio" name="glasses" value="no" style="margin-left:10px;" />No</td>
					</tr>

					<tr>
						<td style="width:10%;"><label>b) Contact Lenses :</label> </td>
						<td><input type="radio" name="cont_lense" value="yes" style="margin-left:15px; " id="cont_lense"/>Yes      <input type="radio" name="cont_lense" value="no" style="margin-left:10px;" id="cont_lense_1" />No</td>
					</tr>
					
</table></br>

	
<table id="table111"  <?php if($row['cont_lense']=='no'){ ?> style="display:none;" <?php } ?> >
			
					<tr>
						<td style="width:10%;"><label style="color:gray;">If Yes, Please give details</label> </td>
						<td></td>
					</tr>
					<tr>
						<td style="width:10%;"><label>Long sighted/ Short sighted/ Other :</label> </td>
						<td><input type="text" name="cont_lense_details" style="width:50%;" ></td>
					</tr>
					
					

					
					
</table>

<table id="table111" >
<tr>
						<td style="width:10%;"><label>Do you suffer from colour blindness? :</label> </td>
						<td><input type="radio" name="clr_blind" value="yes" style="margin-left:15px;"/>Yes      <input type="radio" name="clr_blind" value="no" style="margin-left:10px;" />No</td>
					</tr>
					</table>



<div style="clear: both; height: 0; overflow: hidden;"> </div>
</div>


<div id="initial_details">
<table id="table11" >
					
					<tr>
						<td style="width:10%;"><label>Do you smoke? :</label> </td>
						<td><input type="radio" name="smoke" value="yes" style="margin-left:15px;"/>Yes      <input type="radio" name="smoke" value="no" style="margin-left:10px;" />No</td>
					</tr>

					
</table>




<div style="clear: both; height: 0; overflow: hidden;"> </div>
</div>


<div id="initial_details">

<table id="table11" >
					
					<tr>
						<td style="width:10%;"><label>Do you hold a valid driving license? :</label> </td>
						<td><input type="radio" name="driving_license" id="driving_license"  value="yes" style="margin-left:15px;"/>Yes      <input type="radio" name="driving_license" value="no" style="margin-left:10px;" id="driving_license_1" />No</td>
					</tr>

					
					
</table></br>

	
<table id="table_license" <?php if($row['driving_license']=='no'){ ?> style="display:none;" <?php } ?>>
			
					<tr>
						<td style="width:10%;"><label style="color:gray;" >If Yes, Please give details</label> </td>
						<td></td>
					</tr>
					<tr>
						<td style="width:10%;"><label>License Number :</label> </td>
						<td><input type="text" name="driving_license_no" style="width:50%;" ></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Valid Untill :</label> </td>
						<td><input type="text" name="driving_license_valid_untill" style="width:50%;" ></td>
					</tr>
					
					

					
					
</table>



<div style="clear: both; height: 0; overflow: hidden;"> </div>
</div>


<div id="initial_details">
<h5 style="text-align:left;margin:15px;color:gray;">Education Qualification</h5>
<table id="table11" border="1" style="width:97%;margin:10px;">
					
					<tr >
						<td style="width:20%;" rowspan="3"></td>
						<td style="width:42%;" rowspan="3"><h5 style="padding-top:20px;">Qualifications Achieved </h5></td>
						<td colspan="4"><h5>Dates</h5></td>
						
						
						
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
						<td ><h5 style="padding-top:10px;">School / College (Highest Qualification)</h5></td>
						<td > <textarea name="high_qual" cols="" rows="" id="caddress" style="width:95%;height:95%;"></textarea></td>
						<td ><select name="high_qual_from_mm" id="month_year" style="width:70%">
								  <option value="">Select</option>
								  <option value="jan">Jan</option>
								  <option value="feb">Feb</option>
								  <option value="march">March</option>
								  <option value="apr">Apr</option>
								  <option value="may">May</option>
								  <option value="june">June</option>
								  <option value="july">July</option>
								  <option value="aug">Aug</option>
								  <option value="sept">Sept</option>
								  <option value="oct">Oct</option>
								  <option value="nov">Nov</option>
								  <option value="dec">Dec</option>
							</select>
						</td>
						<td >
						<select name="high_qual_from_yy" id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option value='$i'>$i</option>"; 
						} ?> 
						</select>

						</td>
						<td ><select name="high_qual_to_mm" id="month_year" style="width:70%">
									<option value="">Select</option>
								 <option value="jan">Jan</option>
								  <option value="feb">Feb</option>
								  <option value="march">March</option>
								  <option value="apr">Apr</option>
								  <option value="may">May</option>
								  <option value="june">June</option>
								  <option value="july">July</option>
								  <option value="aug">Aug</option>
								  <option value="sept">Sept</option>
								  <option value="oct">Oct</option>
								  <option value="nov">Nov</option>
								  <option value="dec">Dec</option>
							</select>
						</td>
						<td >
						<select name="high_qual_to_yy" id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option value='$i'>$i</option>"; 
						} ?> 
						</select>
						</td>
						
						
						
					</tr>
					
					<tr style="height:80px;;">
						<td ><h5 style="padding-top:10px;">University / Other</h5></td>
						<td> <textarea name="university" cols="" rows="" id="caddress" style="width:95%;height:95%;"></textarea></td>
						<td><select name="university_from_mm" id="month_year" style="width:70%">
								  <option value="">Select</option>
								  <option value="jan">Jan</option>
								  <option value="feb">Feb</option>
								  <option value="march">March</option>
								  <option value="apr">Apr</option>
								  <option value="may">May</option>
								  <option value="june">June</option>
								  <option value="july">July</option>
								  <option value="aug">Aug</option>
								  <option value="sept">Sept</option>
								  <option value="oct">Oct</option>
								  <option value="nov">Nov</option>
								  <option value="dec">Dec</option>
							</select>
						
						</td>
						<td>
						<select name="university_from_yy" id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option value='$i'>$i</option>"; 
						} ?> 
						</select>
						</td>
						<td><select name="university_to_mm" id="month_year" style="width:70%">
								  <option value="">Select</option>
								  <option value="jan">Jan</option>
								  <option value="feb">Feb</option>
								  <option value="march">March</option>
								  <option value="apr">Apr</option>
								  <option value="may">May</option>
								  <option value="june">June</option>
								  <option value="july">July</option>
								  <option value="aug">Aug</option>
								  <option value="sept">Sept</option>
								  <option value="oct">Oct</option>
								  <option value="nov">Nov</option>
								  <option value="dec">Dec</option>
							</select>
						
						</td>
						<td>
						<select name="university_to_yy" id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option value='$i'>$i</option>"; 
						} ?> 
						</select>
						</td>
						
					</tr>
					
					<tr style="height:80px;;">
						<td ><h5 style="padding-top:10px;">Business / Professional</h5></td>
						<td>  <textarea name="business" cols="" rows="" id="caddress" style="width:95%;height:95%;"></textarea></td>
						<td><select name="business_from_mm" id="month_year" style="width:70%">
								  <option value="">Select</option>
								 <option value="jan">Jan</option>
								  <option value="feb">Feb</option>
								  <option value="march">March</option>
								  <option value="apr">Apr</option>
								  <option value="may">May</option>
								  <option value="june">June</option>
								  <option value="july">July</option>
								  <option value="aug">Aug</option>
								  <option value="sept">Sept</option>
								  <option value="oct">Oct</option>
								  <option value="nov">Nov</option>
								  <option value="dec">Dec</option>
							</select>
						
						</td>
						<td>
						<select name="business_from_yy" id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option value='$i'>$i</option>"; 
						} ?> 
						</select>
						
						</td>
						<td><select id="month_year" name="business_to_mm" style="width:70%">
								  <option value="">Select</option>
								 <option value="jan">Jan</option>
								  <option value="feb">Feb</option>
								  <option value="march">March</option>
								  <option value="apr">Apr</option>
								  <option value="may">May</option>
								  <option value="june">June</option>
								  <option value="july">July</option>
								  <option value="aug">Aug</option>
								  <option value="sept">Sept</option>
								  <option value="oct">Oct</option>
								  <option value="nov">Nov</option>
								  <option value="dec">Dec</option>
							</select>
						
						</td>
						<td>
						<select name="business_to_yy" id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option value='$i'>$i</option>"; 
						} ?> 
						</select>
						</td>
						
					</tr>
					
					<tr style="height:80px;;">
						<td ><h5 style="padding-top:10px;">Other</h5></td>
						<td> <textarea name="other" cols="" rows="" id="caddress" style="width:95%;height:95%;"></textarea></td>
						<td><select name="other_from_mm" id="month_year" style="width:70%">
								  <option value="">Select</option>
								 <option value="jan">Jan</option>
								  <option value="feb">Feb</option>
								  <option value="march">March</option>
								  <option value="apr">Apr</option>
								  <option value="may">May</option>
								  <option value="june">June</option>
								  <option value="july">July</option>
								  <option value="aug">Aug</option>
								  <option value="sept">Sept</option>
								  <option value="oct">Oct</option>
								  <option value="nov">Nov</option>
								  <option value="dec">Dec</option>
							</select>
						
						</td>
						<td>
						<select name="other_from_yy" id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option value='$i'>$i</option>"; 
						} ?> 
						</select>
						</td>
						<td><select name="other_to_mm" id="month_year" style="width:70%">
								  <option value="">Select</option>
								 <option value="jan">Jan</option>
								  <option value="feb">Feb</option>
								  <option value="march">March</option>
								  <option value="apr">Apr</option>
								  <option value="may">May</option>
								  <option value="june">June</option>
								  <option value="july">July</option>
								  <option value="aug">Aug</option>
								  <option value="sept">Sept</option>
								  <option value="oct">Oct</option>
								  <option value="nov">Nov</option>
								  <option value="dec">Dec</option>
							</select>
						
						
						</td>
						<td>
						<select name="other_to_yy" id="month_year" style='width:70%'>
						<option value="">Select</option>
						<?php for ($i=date("Y"); $i>1929; $i--) 
						{ 
								echo "<option value='$i'>$i</option>"; 
						} ?> 
						</select>
						
						</td>
						
					</tr>
					
					

					
					
</table></br>





<div style="clear: both; height: 0; overflow: hidden;"> </div>
</div>






<div id="initial_details">
<h5 style="text-align:left;margin:15px;color:gray;">Please indicate competency in languages </h5>
<table id="table11" border="1" style="width:97%;margin:10px;">
					
					<tr >
						<td><h5>Language</h5></td>
						<td><h5>Read</h5></td>
						<td><h5>Write</h5></td>
						<td><h5>Speak</h5></td>
						<td><h5>Language</h5> </td>
						<td><h5>Read</h5></td>
						<td><h5>Write</h5></td>
						<td><h5>Speak</h5></td>
						
						
					</tr>
					
					<tr>
						<td><input id="lang_input" type="text" name="lang1" style="width:70%;" ></td>
						<td>
						<select name="read1" id="month_year" style="width:70%">
								  <option value="">Select</option>
								  <option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select>
						
						</td>
						<td>
						<select name="write1" id="month_year" style="width:70%">
								  <option value="">Select</option>
								  <option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select>
						</td>
						<td>
						<select name="speak1" id="month_year" style="width:70%">
								  <option value="">Select</option>
								 <option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select>
						</td>
						<td><input id="lang_input" type="text" name="lang2" style="width:70%;" ></td>
						<td>
						<select name="read2" id="month_year" style="width:70%">
								  <option value="">Select</option>
								 <option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select>
						
						</td>
						<td>
						<select  name="write2"  id="month_year" style="width:70%">
								  <option value="">Select</option>
								 <option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select>
						</td>
						<td>
						<select  name="speak2" id="month_year" style="width:70%">
								  <option value="">Select</option>
								<option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select>
						</td>
						
						
					</tr>
					
					<tr>
						<td><input id="lang_input" type="text" name="lang3" style="width:70%;" ></td>
						<td><select name="read3"  id="month_year" style="width:70%">
								  <option value="">Select</option>
								<option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						<td><select  name="write3" id="month_year" style="width:70%">
								  <option value="">Select</option>
								<option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						<td><select  name="speak3" id="month_year" style="width:70%">
								  <option value="">Select</option>
								 <option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						<td><input id="lang_input" type="text" name="lang4" style="width:70%;" ></td>
						<td><select name="read4"  id="month_year" style="width:70%">
								  <option value="">Select</option>
								 <option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						<td><select  name="write4" id="month_year" style="width:70%">
								  <option value="">Select</option>
								<option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						<td><select  name="speak4" id="month_year" style="width:70%">
								  <option value="">Select</option>
								<option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						
					</tr>
					
					<tr  >
						<td><input id="lang_input" type="text" name="lang5" style="width:70%;" ></td>
						<td><select  name="read5"  id="month_year" style="width:70%">
								  <option value="">Select</option>
								<option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						<td><select  name="write5" id="month_year" style="width:70%">
								  <option value="">Select</option>
								<option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						<td><select  name="speak5" id="month_year" style="width:70%">
								  <option value="">Select</option>
								<option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						<td><input id="lang_input" type="text" name="lang6" style="width:70%;" ></td>
						<td><select  name="read6"  id="month_year" style="width:70%">
								  <option value="">Select</option>
								 <option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						<td><select  name="write6" id="month_year" style="width:70%">
								  <option value="">Select</option>
								 <option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						<td><select  name="speak6" id="month_year" style="width:70%">
								  <option value="">Select</option>
								 <option value="basic">Basic</option>
								  <option value="intermediate">Intermediate</option>
								  <option value="fluent">Fluent</option>
					    </select></td>
						
						
						
					</tr>
					
					
					

					
					
</table></br>





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