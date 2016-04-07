
  
  
  <?php


	require_once('../config.php');
	
	require_once('auth.php');

$dept=$_POST['dept'];
$Industry_1=$_POST['Industry_1'];
$emp_code=$_POST['emp_code'];
	


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
	
		<link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='js/jquery-1.9.1.min.js'></script>
<script src='js/jquery-ui-1.10.2.custom.min.js'></script>
<script src='js/fullcalendar.min.js'></script>

   
	
	
	<script>
	/*$(document).ready(function() {
	$("#dept").change(function(){
	
	$.ajax({

			url: 'dept_process_with_report_to.php',
			
	        type: 'POST', // Send post data
		
	        data: {
            'selected' : $(this).val()
        },
	        async: false,
		dataType: "json",
			
			
	        success: function(data){
	        	//alert(freshevents = s);
				
			
			 option ='';
			 option += "<option value=''>Select Manager</option>";
			$.each(data, function (i, jsondata) {
			
			if(jsondata.status=='success'){
			
          
option += '<option value=' +jsondata.emp_id + '>' +jsondata.emp_first_name+ ' ['+jsondata.role_name+']</option>';			 
    }
	else
	{
	option="<option value=''>Select Manager</option>";
	}
	  $("#Industry_1").empty().append(option);
                   
			});
		
     
	        }
		
		});
	});
	
	});*/
	</script>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
 

  <link rel="stylesheet" href="../css/css-be258.css" type="text/css">








<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">











<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">


  <script src="//code.jquery.com/jquery-1.10.2.js"></script>


  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>


<script>


  $(function() {


    $( "#emp_first_name" ).datepicker({ dateFormat: 'dd-mm-yy' });
	 $( "#emp_middle_name" ).datepicker({ dateFormat: 'dd-mm-yy' });


  });


  </script>





</head>








<body>

  <!-- container section start -->
  <section id="container" class="">
     
      <?php include('header.php');?>

     <?php include('side_bar.php');?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>
						
					</ol>
				</div>
			</div>
			<article>

	




<h4 style="float:left;"><strong>Leave Requests</strong></h4>

 <form action="leave_req_list.php" class="form-inline" role="form" style="float:right;" method="post">
   <div class="col-sm-8">
        <select name="dept" id="dept" class="form-control">
<option value="">Select Department</option>
<?php
$resultid = mysql_query("SELECT * FROM t_dept");
while($rowindustry = mysql_fetch_array($resultid)){
?>
<option value="<?php echo $rowindustry['no']; ?>"><?php echo $rowindustry['dept_name']; ?></option>
<?php
} ?>
</select>


	
      </div>
	   <button type="submit" class="btn btn-default">Submit</button>
  </form>
	  
	  <form action="leave_req_list.php" class="form-inline" role="form" style="float:right;" method="post">
   <div class="col-sm-8">
        <select name="Industry_1" id="Industry_1" class="form-control">
		<option value=''>Select Manager</option>
		<?php
$resultid = mysql_query("SELECT * FROM t_employee");
while($rowindustry = mysql_fetch_array($resultid)){
?>
<option value="<?php echo $rowindustry['emp_id']; ?>"><?php echo $rowindustry['emp_first_name']; ?></option>
<?php
} ?>
</select>


	
      </div>
	  <button type="submit" class="btn btn-default">Submit</button>
  </form>
  
  
	 
<form action="leave_req_list.php" class="form-inline" role="form" style="float:right;" method="post">	 
     
      <div class="col-sm-8">
        <input type="text" class="form-control" placeholder="Employee Code" name="emp_code" id="emp_code">
      </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

</br>
</br>




<?php
if($dept=='' AND $Industry_1=='' AND $emp_code=='')
{
?>
<table class="table" >
<tbody>
<tr style="text-align: center;">
<td style="text-align: center;"><strong>No.</strong></td>
<td><strong>Employee ID</strong></td>
<td><strong>Employee Name</strong></td>
<td><strong>Report To</strong></td>
<td><strong>Leave Type</strong></td>
<td><strong>From</strong></td>
<td><strong>To</strong></td>
<td><strong>Number of Days</strong></td>
<td><strong>Purpose</strong></td>
<td><strong>Comment from manager</strong></td>
<td><strong>Status</strong></td>
</tr>
<?php
$result = mysql_query("SELECT * FROM leave_employee_new");
$i=1;

while($row = mysql_fetch_array($result))

  { 

?>

<tr style="text-align: center;">

<td><?php echo $i; ?></td>

<td><?php echo $row['emp_id']; ?></td>


<?php
$emp_id_1=$row['emp_id'];
$result_1 = mysql_query("SELECT * FROM t_employee where emp_id='$emp_id_1'");
while($row_1 = mysql_fetch_array($result_1))
{
$emp_name=$row_1['emp_first_name'];
$emp_mid_name=$row_1['emp_middle_name'];
$emp_last_name=$row_1['emp_last_name'];
}
$assign_to=$row['assign_to'];

$result_2 = mysql_query("SELECT * FROM t_employee where emp_id=$assign_to");
while($row_2 = mysql_fetch_array($result_2))
{
$emp_name_1=$row_2['emp_first_name'];
$emp_mid_name_1=$row_2['emp_middle_name'];
$emp_last_name_1=$row_2['emp_last_name'];
}


?>


<td><?php echo $emp_name." ".$emp_mid_name." ".$emp_last_name;  ?></td>

<td><?php echo $emp_name_1." ".$emp_mid_name_1." ".$emp_last_name_1;  ?></td>

<td><?php echo $row['leave_type']; ?></td>

<td><?php echo $row['from_date']; ?></td>

<td><?php echo $row['till']; ?></td>


<td><?php echo $row['number_of_day']; ?></td>
<td><?php echo $row['purpose']; ?></td>

<td><?php echo $row['comment']; ?></td>

<?php if($row['status']=='Pending') {?>

<td style="color:red;">Pending</td>
<?php }?>

<?php if($row['status']=='Approved') {?>

<td style="color:green;">Approved</td>

<?php }?>

<?php if($row['status']=='Rejected') {?>

<td style="color:#B09EC8;">Rejected</td>

<?php }?>

<?php if($row['status']=='cancled') {?>

<td style="color:#210B61;">Cancelled By <?php echo $emp_name." ".$emp_mid_name." ".$emp_last_name;  ?></td>

<?php }?>



</tr>



<?php   $i++; } ?>




</tbody>


</table>

<?php }?>





<?php
if($dept !=''AND $Industry_1=='' AND $emp_code=='')
{

?>
<table class="table" >
<tbody>
<tr style="text-align: center;">
<td style="text-align: center;"><strong>No.</strong></td>
<td><strong>Employee ID</strong></td>
<td><strong>Employee Name</strong></td>
<td><strong>Report To</strong></td>
<td><strong>Leave Type</strong></td>
<td><strong>From</strong></td>
<td><strong>To</strong></td>
<td><strong>Number of Days</strong></td>
<td><strong>Purpose</strong></td>
<td><strong>Comment from manager</strong></td>
<td><strong>Status</strong></td>
</tr>
<?php

$result = mysql_query("SELECT * FROM t_employee where dept_id=$dept");
$i=1;

while($row = mysql_fetch_array($result))

  {

     $emp_id=$row['emp_id'];

    $result_1 = mysql_query("SELECT * FROM leave_employee_new where emp_id=$emp_id");
	echo mysql_num_rows($result_1);
	while($row_1 = mysql_fetch_array($result_1))

	  { 
	  
	  
	  
?>

  



<tr style="text-align: center;">

<td><?php echo $i; ?></td>

<td><?php echo $row_1['emp_id']; ?></td>


<?php

$emp_name=$row['emp_first_name'];
$emp_mid_name=$row['emp_middle_name'];
$emp_last_name=$row['emp_last_name'];

$result_w = mysql_query("SELECT * FROM t_employee where assign_to=".$row_1['assign_to']);
	
$row_w = mysql_fetch_array($result_w);

$result_w = mysql_query("SELECT * FROM t_employee where emp_id=".$row_w['assign_to']);
	
$row_q = mysql_fetch_array($result_w);


?>


<td><?php echo $emp_name." ".$emp_mid_name." ".$emp_last_name;  ?></td>

<td><?php echo $row_q['emp_first_name'];?></td>

<td><?php echo $row_1['leave_type']; ?></td>

<td><?php echo $row_1['from_date']; ?></td>

<td><?php echo $row_1['till']; ?></td>


<td><?php echo $row_1['number_of_day']; ?></td>
<td><?php echo $row_1['purpose']; ?></td>

<td><?php echo $row_1['comment']; ?></td>

<?php if($row_1['status']=='Pending') {?>

<td style="color:red;">Pending</td>
<?php }?>

<?php if($row_1['status']=='Approved') {?>

<td style="color:green;">Approved</td>

<?php }?>

<?php if($row_1['status']=='Rejected') {?>

<td style="color:#B09EC8;">Rejected</td>

<?php }?>

<?php if($row_1['status']=='cancled') {?>

<td style="color:#210B61;">Cancelled By <?php echo $emp_name." ".$emp_mid_name." ".$emp_last_name;  ?></td>

<?php }?>



</tr>



<?php   $i++; }}?>




</tbody>


</table>

<?php 
 

}

?>






<?php
if($dept=='' AND $Industry_1!='' AND $emp_code=='')
{

?>
<table class="table" >
<tbody>
<tr style="text-align: center;">
<td style="text-align: center;"><strong>No.</strong></td>
<td><strong>Employee ID</strong></td>
<td><strong>Employee Name</strong></td>
<td><strong>Report To</strong></td>
<td><strong>Leave Type</strong></td>
<td><strong>From</strong></td>
<td><strong>To</strong></td>
<td><strong>Number of Days</strong></td>
<td><strong>Purpose</strong></td>
<td><strong>Comment from manager</strong></td>
<td><strong>Status</strong></td>
</tr>
<?php

$result = mysql_query("SELECT * FROM t_employee where emp_id=$Industry_1");
$i=1;
while($row = mysql_fetch_array($result))

  {

    $emp_id=$row['emp_id'];

    $result_1 = mysql_query("SELECT * FROM leave_employee_new where assign_to=$emp_id");
	
	while($row_1 = mysql_fetch_array($result_1))

	  {
	  
	
?>

  



<tr style="text-align: center;">

<td><?php echo $i; ?></td>

<td><?php echo $row_1['emp_id']; ?></td>


<?php
$emp_name=$row['emp_first_name'];
$emp_mid_name=$row['emp_middle_name'];
$emp_last_name=$row['emp_last_name'];

$result_w = mysql_query("SELECT * FROM t_employee where assign_to=".$row_1['assign_to']);
	
$row_w = mysql_fetch_array($result_w);

$result_w = mysql_query("SELECT * FROM t_employee where emp_id=".$row_w['assign_to']);
	
$row_q = mysql_fetch_array($result_w);


?>


<td><?php echo $emp_name." ".$emp_mid_name." ".$emp_last_name;  ?></td>

<td><?php echo  $row_q['emp_first_name']; ?></td>

<td><?php echo $row_1['leave_type']; ?></td>

<td><?php echo $row_1['from_date']; ?></td>

<td><?php echo $row_1['till']; ?></td>


<td><?php echo $row_1['number_of_day']; ?></td>
<td><?php echo $row_1['purpose']; ?></td>

<td><?php echo $row_1['comment']; ?></td>

<?php if($row_1['status']=='Pending') {?>

<td style="color:red;">Pending</td>
<?php }?>

<?php if($row_1['status']=='Approved') {?>

<td style="color:green;">Approved</td>

<?php }?>

<?php if($row_1['status']=='Rejected') {?>

<td style="color:#B09EC8;">Rejected</td>

<?php }?>

<?php if($row_1['status']=='cancled') {?>

<td style="color:#210B61;">Cancelled By <?php echo $emp_name." ".$emp_mid_name." ".$emp_last_name;  ?></td>

<?php }?>



</tr>



<?php   $i++; } ?>




</tbody>


</table>

<?php }
}

?>







<?php
if($dept=='' AND $Industry_1=='' AND $emp_code!='')
{

?>
<table class="table" >
<tbody>
<tr style="text-align: center;">
<td style="text-align: center;"><strong>No.</strong></td>
<td><strong>Employee ID</strong></td>
<td><strong>Employee Name</strong></td>
<td><strong>Report To</strong></td>
<td><strong>Leave Type</strong></td>
<td><strong>From</strong></td>
<td><strong>To</strong></td>
<td><strong>Number of Days</strong></td>
<td><strong>Purpose</strong></td>
<td><strong>Comment from manager</strong></td>
<td><strong>Status</strong></td>
</tr>
<?php

$result = mysql_query("SELECT * FROM t_employee where emp_code='$emp_code'");
$i=1;

while($row = mysql_fetch_array($result))

  {

    $emp_id=$row['emp_id'];

    $result_1 = mysql_query("SELECT * FROM leave_employee_new where emp_id=$emp_id");
	
	while($row_1 = mysql_fetch_array($result_1))

	  {
	  
	
?>

  



<tr style="text-align: center;">

<td><?php echo $i; ?></td>

<td><?php echo $row_1['emp_id']; ?></td>


<?php
$emp_name=$row['emp_first_name'];
$emp_mid_name=$row['emp_middle_name'];
$emp_last_name=$row['emp_last_name'];

$result_w = mysql_query("SELECT * FROM t_employee where assign_to=".$row_1['assign_to']);
	
$row_w = mysql_fetch_array($result_w);

$result_w = mysql_query("SELECT * FROM t_employee where emp_id=".$row_w['assign_to']);
	
$row_q = mysql_fetch_array($result_w);


?>


<td><?php echo $emp_name." ".$emp_mid_name." ".$emp_last_name;  ?></td>

<td><?php echo  $row_q['emp_first_name']; ?></td>

<td><?php echo $row_1['leave_type']; ?></td>

<td><?php echo $row_1['from_date']; ?></td>

<td><?php echo $row_1['till']; ?></td>


<td><?php echo $row_1['number_of_day']; ?></td>
<td><?php echo $row_1['purpose']; ?></td>

<td><?php echo $row_1['comment']; ?></td>

<?php if($row_1['status']=='Pending') {?>

<td style="color:red;">Pending</td>
<?php }?>

<?php if($row_1['status']=='Approved') {?>

<td style="color:green;">Approved</td>

<?php }?>

<?php if($row_1['status']=='Rejected') {?>

<td style="color:#B09EC8;">Rejected</td>

<?php }?>

<?php if($row_1['status']=='cancled') {?>

<td style="color:#210B61;">Cancelled By <?php echo $emp_name." ".$emp_mid_name." ".$emp_last_name;  ?></td>

<?php }?>



</tr>



<?php   $i++; } ?>




</tbody>


</table>

<?php }
}

?>










</article>





          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
