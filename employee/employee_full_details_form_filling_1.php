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
    $("#hold_dual_nat").click(function(){
        $("#hide_show").show();
        
    });
});

$(document).ready(function(){
    $("#hold_dual_nat_1").click(function(){
        $("#hide_show").hide();
        
    });
});

$(document).ready(function(){
    $("#abuse").click(function(){
        $("#abuse_row").show();
        
    });
});

$(document).ready(function(){
    $("#abuse_1").click(function(){
        $("#abuse_row").hide();
        
    });
});

$(document).ready(function(){
    $("#disability").click(function(){
        $("#disability_row").show();
        
    });
});

$(document).ready(function(){
    $("#disability_1").click(function(){
        $("#disability_row").hide();
        
    });
});


$(document).ready(function(){
    $("#ex_emp").click(function(){
        $(".table_yes_no").show();
        
    });
});

$(document).ready(function(){
    $("#ex_emp_1").click(function(){
        $(".table_yes_no").hide();
        
    });
});

$(document).ready(function(){
    $("#employed").click(function(){
        $(".table_yes_no_1").show();
        
    });
});

$(document).ready(function(){
    $("#employed_1").click(function(){
        $(".table_yes_no_1").hide();
        
    });
});

</script>

<!--<script type="text/javascript">
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









<form action="employee_full_details_form_filling_process_1.php" method="post">
<div id="initial_details">
<table id="table11"  >
					<tr>
						<td style="width:10%;"><label>Date of Birth :</label> </td>
						<td><input name="birth_date" id="birth_date" class="datepicker" type="text" style="width:70%;" readonly value="<?php echo $row['birth_date']; ?>"></td>
					</tr>
					
					
					<tr>
						<td style="width:10%;"><label>Nationality at Birth :</label> </td>
						<td><input type="text" name="nat_birth" style="width:70%;" value="<?php echo $row['nat_birth']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Nationality at Present :</label> </td>
						<td><input type="text" name="nat_present" style="width:70%;" value="<?php echo $row['nat_present']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:30%;"><label>Do You Hold Dual Nationality? :</label> </td>
						<td style="padding-left:5px;"><input type="radio" id="hold_dual_nat" name="hold_dual_nat" value="yes" onclick="opendiv();" style="margin-left:15px;" <?php if($row['hold_dual_nat'] === 'yes') { echo " checked"; } ?>/>Yes      <input type="radio" id="hold_dual_nat_1" onclick="closediv();" name="hold_dual_nat" value="no" style="margin-left:10px;" <?php if($row['hold_dual_nat'] === 'no') { echo " checked"; $qry = "UPDATE employee_new SET nat_specify='' WHERE emp_id='$uid'"; $result = @mysql_query($qry);} ?> />No</td>
				
					</tr>
					<tr id="hide_show" <?php if($row['hold_dual_nat']=='no'){ ?> style="display:none;" <?php } ?>>
						
						<td style="width:30%;"><label style="color:gray;">If Yes Please Specify :</label> </td>
						<td><input type="text" name="nat_specify" style="width:70%;" value="<?php echo $row['nat_specify']; ?>"></td>	
						
					</tr>
					
					<?php if($row['hold_dual_nat']=='yes' && $row['nat_specify'] == ''){?>
					<tr >
						
						<td style="width:30%;"></td>
						<td style="color:red;margin-top:-5px;margin-left:5px;"><?php 
																						if( isset($_SESSION['below_error'])){
																						echo $_SESSION['below_error'];}
																						?></h4></td>
					
						
						</tr>
						<?php } ?>
					
					
					
					
					
					
</table>




<table id="table11" >
					
					<tr>
						<td style="width:30%;"><label>Place of Birth City :</label> </td>
						<td><input type="text" name="birth_place" style="width:70%;" value="<?php echo $row['birth_place']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Place of Birth Country :</label> </td>
						<td><input type="text" name="birth_country" style="width:70%;" value="<?php echo $row['birth_country']; ?>"></td>
					</tr>
					
					
					<tr>
						<td style="width:10%;"><label>Height [in Cms] :</label> </td>
						<td><input type="text" name="height" style="width:70%;" value="<?php echo $row['height']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Weight [in Kgm] :</label> </td>
						<td><input type="text" name="weight" style="width:70%;" value="<?php echo $row['weight']; ?>" ></td>
					</tr>
					<tr>
						<td style="width:10%;"><label>Blood Group :</label> </td>
						<td><input type="text" name="blood" style="width:70%;" value="<?php echo $row['blood']; ?>"></td>
					</tr>
					
					
					
</table>

<table id="table111" >
<tr>
						<td style="width:30%;"><label>Marital Status :</label> </td>
						<td style="padding-left:5px;"><input type="radio" name="marital" value="single" <?php if($row['marital'] === 'single') { echo " checked"; } ?> />Single      <input type="radio" name="marital" value="married" style="margin-left:10px;" <?php if($row['marital'] === 'married') { echo " checked"; } ?>/>Married  <input type="radio" name="marital" value="divorced" style="margin-left:10px;" <?php if($row['marital'] === 'divorced') { echo " checked"; } ?>/>Divorced  <input type="radio" name="marital" value="separated" style="margin-left:10px;" <?php if($row['marital'] === 'separated') { echo " checked"; } ?>/>Separated   <input type="radio" name="marital" value="widowed" style="margin-left:10px;" <?php if($row['marital'] === 'widowed') { echo " checked"; } ?>/>Widowed</td>
				
</tr>

<tr>
						<td style="width:30%;"><label>Gender :</label> </td>
						<td style="padding-left:5px;"><input type="radio" name="gender" value="male" <?php if($row['gender'] === 'male') { echo " checked"; } ?>/>Male      <input type="radio" name="gender" value="female" style="margin-left:10px;" <?php if($row['gender'] === 'female') { echo " checked"; } ?>/>Female  </td>
				
</tr>

<tr>
						<td style="width:10%;"><label>Religion  :</label> </td>
						<td><input type="text" name="religion" style="width:50%;" value="<?php echo $row['religion']; ?>"></td>
					</tr>

</table>






<div style="clear: both; height: 0; overflow: hidden;"> </div>
	
	
	
	

</div>


<div id="initial_details">
<table id="table11"  >
					
					
					
					<tr>
						<td style="width:10%;"><label>Permanent Account Number (PAN) :</label> </td>
						<td><input type="text" name="acc_no" style="width:70%;" value="<?php echo $row['acc_no']; ?>"></td>
					</tr>
					
					
</table>

<div style="clear: both; height: 0; overflow: hidden;"> </div>
	
</div>



<div id="initial_details">
<table id="table11"  >
					
					
					
					<tr>
						<td style="width:10%;"><label>Passport Number :</label> </td>
						<td><input type="text" name="pass_no" style="width:70%;" value="<?php echo $row['pass_no']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Place of Issue :</label> </td>
						<td><input type="text" name="issue_place" style="width:70%;" value="<?php echo $row['issue_place']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Date of Issue :</label> </td>
						<td><input name="issue_date" id="activetill" class="datepicker" type="text" style="width:70%;" readonly value="<?php echo $row['issue_date']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Date of Expiry :</label> </td>
						<td><input name="expiry_date" id="activetill" class="datepicker" type="text"  style="width:70%;" readonly value="<?php echo $row['expiry_date']; ?>"></td>
					</tr>
					
					
					
					
					
					
</table>










<div style="clear: both; height: 0; overflow: hidden;"> </div>
	
	
	
	

</div>



<div id="initial_details">
<table id="table11"  >
					
					
					
					<tr>
						<td style="width:10%;"><label>Bank Name :</label> </td>
						<td><input type="text" name="bank_name" style="width:70%;" value="<?php echo $row['bank_name']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Branch :</label> </td>
						<td><input type="text" name="branch" style="width:70%;" value="<?php echo $row['branch']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Account Number :</label> </td>
						<td><input type="text" name="bank_acc_no" style="width:70%;" value="<?php echo $row['bank_acc_no']; ?>"></td>
					</tr>
					
					
					
					
					
					
					
					
</table>










<div style="clear: both; height: 0; overflow: hidden;"> </div>
	
	
	
	

</div>


<div id="initial_details">
<table id="table_long"  >
					
					
					
					<tr>
						<td style="width:10%;"><label id="long_label">Have you ever been convicted of a criminal offence? :</label> </td>
						<td><input type="radio" name="convict" value="yes" style="margin-left:15px;" <?php if($row['convict'] === 'yes') { echo " checked"; } ?>/>Yes      <input type="radio" name="convict" value="no" style="margin-left:10px;" <?php if($row['convict'] === 'no') { echo " checked"; } ?>/>No</td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label id="long_label">Have you ever required medical treatment or counseling for drug or alcohol abuse?  :</label> </td>
						<td><input type="radio" name="abuse" id="abuse" value="yes" style="margin-left:15px;" <?php if($row['abuse'] === 'yes') { echo " checked"; } ?>/>Yes      <input type="radio" name="abuse" id="abuse_1" value="no" style="margin-left:10px;" <?php if($row['abuse'] === 'no') { echo " checked";$qry = "UPDATE employee_new SET details_crime='' WHERE emp_id='$uid'"; $result = @mysql_query($qry); } ?>/>No</td>
					</tr>
					
					
					
					
					
					
</table>

<table id="abuse_row"  <?php if($row['abuse']=='no'){ ?> style="display:none;" <?php } ?> >
<tr  >
						<td style="width:10%;"><label id="long_label" style="color:gray;">If Yes, Please give details  :</label> </td>
						<td><textarea name="details_crime" cols="" rows="" id="caddress"><?php echo $row['details_crime']; ?></textarea></td>
					</tr>
					
					
					<?php if($row['abuse']=='yes' && $row['details_crime'] == ''){?>
					<tr >
						
						<td style="width:10%;"></td>
						<td style="color:red;margin-top:-5px;margin-left:5px;"><?php 
																						if( isset($_SESSION['below_error'])){
																						echo $_SESSION['below_error'];}
																						?></h4></td>
					
						
						</tr>
						<?php } ?>
						
			</table>
					

<div style="clear: both; height: 0; overflow: hidden;"> </div>
</div>

<div id="initial_details">
<table id="table_long"  >
					
					
					
					<tr>
						<td style="width:10%;"><label id="long_label">Have you any pre-existing medical condition / illness? :</label> </td>
						<td><input type="radio" name="ill" value="yes" style="margin-left:15px;" <?php if($row['ill'] === 'yes') { echo " checked"; } ?>/>Yes      <input type="radio" name="ill" value="no" style="margin-left:10px;" <?php if($row['ill'] === 'no') { echo " checked"; } ?>/>No</td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label id="long_label">Do you suffer from any any physical defect or partial disability?  :</label> </td>
						<td><input type="radio" name="disability" id="disability" value="yes" style="margin-left:15px;" <?php if($row['disability'] === 'yes') { echo " checked"; } ?>/>Yes      <input type="radio" name="disability" id="disability_1" value="no" style="margin-left:10px;" <?php if($row['disability'] === 'no') { echo " checked"; $qry = "UPDATE employee_new SET ill_details='' WHERE emp_id='$uid'"; $result = @mysql_query($qry);} ?>/>No</td>
					</tr>
					
					
					
					
					
</table>

<table id="disability_row"  <?php if($row['disability']=='no'){ ?> style="display:none;" <?php } ?> >
<tr  >
						<td style="width:10%;"><label id="long_label" style="color:gray;">If Yes, Please give details  :</label> </td>
						<td><textarea name="ill_details" cols="" rows="" id="caddress"><?php echo $row['ill_details']; ?></textarea></td>
					</tr>
					
					<?php if($row['disability']=='yes' && $row['ill_details'] == ''){?>
					
					<tr>
						<td style="width:10%;"></td>
						<td style="color:red;margin-top:-5px;margin-left:5px;"><?php 
																						if( isset($_SESSION['below_error'])){
																						echo $_SESSION['below_error'];}
																						?></h4></td>
					</tr>
					
					<?php } ?>
</table>



<div style="clear: both; height: 0; overflow: hidden;"> </div>
</div>


<div id="initial_details">
<table id="table_long"  >
					
					
					
					<tr>
						<td style="width:10%;"><label id="long_label">Are you an Ex-employee of Archon? :</label> </td>
						<td><input type="radio" name="ex_emp" id="ex_emp" value="yes" style="margin-left:15px;" <?php if($row['ex_emp'] === 'yes') { echo " checked"; } ?>/>Yes      <input type="radio" name="ex_emp" id="ex_emp_1" value="no" style="margin-left:10px;" <?php if($row['ex_emp'] === 'no') { echo " checked"; $qry = "UPDATE employee_new SET designation='', dept='', period_from='', period_till='' WHERE emp_id='$uid'"; $result = @mysql_query($qry);} ?>/>No</td>
					</tr>
					
					
					
					
					
					
					
					
					
					
</table>



<table id="table11" class="table_yes_no" style="float:right;margin-right:20%;<?php if($row['ex_emp']=='no'){ ?> display:none; <?php } ?>"  >
					
		<tr>
						<td style="width:10%;"><label style="color:gray;">If Yes, Please give below details  :</label> </td>
						<td></td>
					</tr>
		
		
		<tr>
						<td style="width:10%;"><label>Designation :</label> </td>
						<td><input type="text" name="designation" style="width:70%;" value="<?php echo $row['designation']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Department :</label> </td>
						<td><input type="text" name="dept" style="width:70%;" value="<?php echo $row['dept']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Period From :</label> </td>
						<td><input type="text" name="period_from" style="width:70%;" value="<?php echo $row['period_from']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Period Till :</label> </td>
						<td><input type="text" name="period_till" style="width:70%;" value="<?php echo $row['period_till']; ?>"></td>
					</tr>	

					<?php if($row['ex_emp']=='yes' && ($row['designation'] == '' || $row['dept'] == '' || $row['period_from'] == '' || $row['period_till'] == '')){?>
					
					<tr>
						<td style="width:10%;"></td>
						<td style="color:red;margin-top:-5px;margin-left:5px;"><?php 
																						if( isset($_SESSION['below_error'])){
																						echo $_SESSION['below_error'];}
																						?></td>
					</tr>
					
					<?php } ?>
					
					
					
					
</table>

<table id="table_long"  >
					
					
					
					<tr>
						<td style="width:10%;"><label id="long_label">Do you have any relatives employed by Archonor? :</label> </td>
						<td><input type="radio" name="employed" id="employed" value="yes" style="margin-left:15px;" <?php if($row['employed'] === 'yes') { echo " checked"; } ?>/>Yes      <input type="radio" name="employed" id="employed_1" value="no" style="margin-left:10px;" <?php if($row['employed'] === 'no') { echo " checked"; $qry = "UPDATE employee_new SET employed_fn='', employed_mn='', employed_ln='', period_till='', rel='', rel_emp_des='' WHERE emp_id='$uid'"; $result = @mysql_query($qry);} ?>/>No</td>
					</tr>
					
					
					
					
					
					
					
					
					
					
</table>

<table id="table11" class="table_yes_no_1" style="float:right;margin-right:20%;<?php if($row['employed']=='no'){ ?> display:none; <?php } ?>" >
					
		<tr>
						<td style="width:10%;"><label  style="color:gray;">If Yes, Please give below details  :</label> </td>
						
					</tr>
		
		<tr>
						<td style="width:10%;"><label>Name :</label> </td>
						<td><input type="text" name="fn" style="width:20%;" placeholder='First Name' value="<?php echo $row['employed_fn']; ?>"><input type="text" name="mn" style="width:20%;" placeholder='Middle Name' value="<?php echo $row['employed_mn']; ?>"><input type="text" name="ln" style="width:20%;" placeholder='Last Name' value="<?php echo $row['employed_ln']; ?>"></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Relationship :</label> </td>
						<td><input type="text" name="rel" style="width:70%;" value="<?php echo $row['rel']; ?>" ></td>
					</tr>
					
					<tr>
						<td style="width:10%;"><label>Designation :</label> </td>
						<td><input type="text" name="rel_emp_des" style="width:70%;" value="<?php echo $row['rel_emp_des']; ?>" ></td>
					</tr>
					
					
					<?php if($row['employed']=='yes' && ($row['employed_fn'] == '' || $row['rel'] == '' ||  $row['rel_emp_des'] == '')  ){?>
					
					<tr>
						<td style="width:10%;"></td>
						<td style="color:red;margin-top:-5px;margin-left:5px;"><?php 
																						if( isset($_SESSION['below_error'])){
																						echo $_SESSION['below_error'];}
																						unset($_SESSION['below_error']);?></td>
					</tr>
					
					<?php } ?>
					
					
							
					
					
					
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