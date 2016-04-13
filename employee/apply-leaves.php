

  
  
  
  
  
  <?php


	require_once('../config.php');
	
	require_once('auth.php');


	


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

    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <!--<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />-->
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
  
  
  
  
  
  $(document).ready(function() {


	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		
		
		var calendar=$('#calendar').fullCalendar({
			editable: true,
			
			
		
		
			events: "http://localhost/NiceAdmin/admin/events.php",
			
			
			
			/*eventMouseover: function(calEvent, jsEvent, view) {

            id= calEvent.id;

            $( "#dialog" ).dialog({
                  resizable: false,
                  height:100,
                  width:500,
                  modal: true,
                  title: 'Are you sure want to delete it?',
                  buttons: {
                             CLOSE: function() {
                                 $("#dialog").dialog( "close" );
                             },
                             DELETE: function() {
                                //do the ajax request?
								div="<div id='dialog'>Are you sure you want to delete this?</div>";
								 $.ajax({
										url: 'http://localhost/NiceAdmin/admin/delete_events.php',
										 data: '&id='+ id ,
										 type: "POST",
										 success: function(json) {
										 $("#dialog").dialog("close");
										}
								
								});
								
                             }
                           }
             });
       },*/
	   
			
			
			
			
				 
			
			
			
			
			
			
		
		
		/* DELETING EVENT
		
		eventRender: function(event, element) {
            element.append( "<span class='closeon' style='padding:10px;background-Color:red;'>X</span>" );
            element.find(".closeon").click(function() {
										
				$('#calendar').fullCalendar('removeEvents',event.id);
			
								
            });
        },
		
		*/
			
			// edit event
			



//removing event



			
		});
		
		$.ajax({
			url: 'fetch_to_calendar.php',
	        type: 'POST', // Send post data
	        data: 'type=fetch',
	        async: false,
	        success: function(s){
	        	//alert(freshevents = s);
				freshevents = s;
	        }
		});
		$('#calendar').fullCalendar('addEventSource', JSON.parse(freshevents));
		
	});
	
	
	$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="3"){
                
                $(".box").slideDown("slow");
            }
            
           
            else{
                $(".box").slideUp("slow");
            }
        });
    }).change();
});




function calculate() {
		var myBox1 = document.getElementById('emp_first_name').value;	
		var myBox2 = document.getElementById('emp_middle_name').value;
		var myBox3 = document.getElementById('half_day').value;
		
		
		$.ajax({
        type: "GET",
        url: "check_days.php",
        data: {'data_1':myBox1, 'data_2':myBox2, 'data_3':myBox3},
        success: function(result) {
           
			$('#result').val(result);
        }
    });
      
		
	}
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
						<!--<li><i class="fa fa-laptop"></i>Dashboard</li>	-->		
						
					</ol>
				</div>
			</div>
			
	

<div id="content"><!-- TemplateBeginEditable name="edit1" -->
  
<article>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) { ?>

<div class="alert alert-danger">

<?php foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>
<?php
echo '<p id="error_msg">',$msg,'</p>'; 
}

unset($_SESSION['ERRMSG_ARR']);
}

?>
</div>


<?php
if(isset($_SESSION['CAMREGMESG']) && $_SESSION['CAMREGMESG']==1 ) {
?>
<div class="alert alert-success">
<p id="update_success">Leave Applied successfully</p>
<?php
unset($_SESSION['CAMREGMESG']);
}
?>

<?php
if(isset($_SESSION['Pending']) && $_SESSION['Pending']=='Pending' ) {
?>
<div class="alert alert-success">
<p id="update_success">Last Leave Applied is Pending, <a href="leave-status.php">Click here</a> to delete it.</p>
<?php
unset($_SESSION['Pending']);
}
?>

</div>


<?php
if(isset($_SESSION['from_date']) && $_SESSION['from_date']==1 ) {
?>
<div class="alert alert-danger">
<p id="error_msg">Entered Number of days Exceeds Your Balance....  1 </p>
<?php
unset($_SESSION['from_date']);
}
?>
</div>


<?php
if(isset($_SESSION['till_date']) && $_SESSION['till_date']==1 ) {
?>
<div class="alert alert-danger">
<p id="error_msg">Entered Number of days Exceeds Your Balance.... 2</p>
<?php
unset($_SESSION['till_date']);
}
?>
</div >






<!-- //Article -->
</div>





<div class="col-sm-6">
<form class="form-horizontal" action="apply-leaves-process-test-latest.php" method="post" enctype="multipart/form-data" role="form">


	<div class="form-group">
      <label class="control-label col-sm-4" for="email"><strong>Select Leave Type</strong></label>
      <div class="col-sm-8">
        <select name="Industry" id="title" class="form-control">

<option value="">Select Any One</option>
<?php
$resultid = mysql_query("SELECT * FROM leave_type");
while($rowindustry = mysql_fetch_array($resultid)){

?>
<?php if($rowindustry['type_name']=='S. L.') 
{
?>
<option value="<?php echo $rowindustry['leave_type_id']; ?>">Sick Leave (SL)</option>  
<?php } 
else if($rowindustry['type_name']=='C. L.') 
{?>

<option value="<?php echo $rowindustry['leave_type_id']; ?>">Casual Leave (CL)</option> 
<?php } 
else 
{?>
<option value="<?php echo $rowindustry['leave_type_id']; ?>">Earned Leave (EL)</option>



<?php
} 
}?>

</select>



      </div>
    </div>
    
	 <div class="form-group">
      <label class="control-label col-sm-4" for="email" ><strong>From Date</strong></label>
      <div class="col-sm-8">
        <input type="text" class="form-control" placeholder="From" name="activefrom" id="emp_first_name" />
		
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="email"><strong>To Date</strong></label>
      <div class="col-sm-8">
        <input type="text" class="form-control" placeholder="To date" name="activetill" id="emp_middle_name" onchange="calculate()"/>
		
      </div>
    </div>
	
	
        
     
	
	<div class="form-group box">
      <label class="control-label col-sm-4" for="email"><strong>Number of half day's (Optional)</strong></label>
      <div class="col-sm-8">
        <input type="text" class="form-control" placeholder="Number of half day's" name="half_day" id="half_day" oninput="calculate()">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="email"><strong>Total Duration</strong></label>
      <div class="col-sm-8">
        <input id="result" type="text" class="form-control" placeholder="Total Duration" disabled />
		
      </div>
    </div>
	
	<div class="form-group">
	<label class="control-label col-sm-4" for="email"><strong>Purpose</strong></label>
 <div class="col-sm-8">
  <textarea class="form-control" rows="5" id="comment" name="caddress"></textarea>
   </div>
</div>
	
	

   
    <div class="form-group">        
      <div class="col-sm-offset-6 col-sm-6">
        
		 <input type="submit" class="btn btn-info" value="Submit" >
      </div>
    </div>
  </form>
  </br>
  
 
  
</div>





<div class="col-sm-6">


			

<?php
$resultid = mysql_query("SELECT * FROM leave_assign");
$rowindustry = mysql_fetch_array($resultid);
$pl_assign=$rowindustry['p_l'];
$cl_assign=$rowindustry['c_l'];
$el_assign=$rowindustry['e_l'];
?>

<article>
<div id="formWrapper">
<!--<fieldset class="fBlock" id="Corporate_Details">
<legend>Leave Description</legend>
<p>
<label> Assigned</label>
<strong><?php echo $pl_assign;?></strong>
</p>
<p>
<label>C. L. Assigned</label>
<strong><?php echo $cl_assign;?></strong>
</p>
<p>
<label>E. L. Assigned</label>
<strong><?php echo $el_assign;?></strong>
</p>
<p>
<?php 
$result_tot = mysql_query("SELECT * FROM total_carry_forward_with_assigned where id='$uid' ORDER BY no DESC LIMIT 1");
$row_tot = mysql_fetch_assoc($result_tot);

$forward=$row_tot['forward'];


?>
<label>Carry forward</label>
<strong><?php //echo $forward;?></strong>
</p>
</fieldset>-->
</div>
</article>


<?php
$result_plcl = mysql_query("SELECT * FROM leave_employee_new WHERE emp_id='$uid' ORDER BY timestamp DESC LIMIT 1");
			if(mysql_num_rows($result_plcl)==0)
			{
			
						$la = mysql_query("SELECT * FROM leave_assign");
						$rowla = mysql_fetch_array($la);
						$pl=$rowla['p_l'];
						$cl=$rowla['c_l'];
						$el=$rowla['e_l'];
						$total_bal=$pl+$cl+$el;

			
			?>
			
			
			

<article>
			<div id="formWrapper">
			<!--<fieldset class="fBlock" id="Corporate_Details">
			<legend>Your Leave Balance</legend>
			<p>
			<label>P. L. Balance</label>
			<strong><?php //echo $pl;?></strong>
			</p>
			<p>
			<label>C. L. Balance</label>
			<strong><?php //echo $cl;?></strong>
			</p>
			<p>
			<label>E. L. Balance + carry forward</label>
			<strong><?php //echo $el;?></strong>
			</p>


<p>
<label>Total Balance</label>
<strong><?php //echo $total_bal;?></strong>
</p>
</fieldset>-->

<legend>Leave Description</legend>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Leave Type</th>
        <th>Carry forward from previous year</th>
		<th>Assigned Leaves for current Year</th>
		<th>Total Leaves Available for current Year</th>
		<th>Leave Balance for current Year</th>
		
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Sick Leave (SL)</td>
        <td>0</td>
		<td><?php echo $pl;?></td>
        <td><?php echo $pl+0;?></td>
        <td><?php echo $pl;?></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Casual Leave (CL)</td>
        <td>0</td>
		<td><?php echo $cl;?></td>
        <td><?php echo $cl+0;?></td>
        <td><?php echo $cl;?></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Earned Leave (EL)</td>
        <td><?php echo $forward;?></td>
		<td><?php echo $el;?></td>
        <td><?php echo $el+$forward;?></td>
        <td><?php echo $el+$forward;?></td>
      </tr>
    </tbody>
  </table>



</div>
<article>
<?php }?>










<?php

if(mysql_num_rows($result_plcl)>0)
{

			$row_plcl = mysql_fetch_array($result_plcl);
			$pl=$row_plcl['p_l'];
			$cl=$row_plcl['c_l'];
			$el=$row_plcl['e_l'];
			$total_bal=$pl+$cl+$el;

			
			$result_total = mysql_query("SELECT * FROM leave_assign");
			$row_total = mysql_fetch_assoc($result_total);
			$original_el=$row_total['e_l'];	
				
			$result = mysql_query("SELECT * FROM leave_employee_new where emp_id='$uid' ORDER BY leave_id DESC LIMIT 1");
			$row = mysql_fetch_assoc($result);


			$timestamp = $row['timestamp'];
			$datetime = explode(" ",$timestamp);
			$date = $datetime[0];
			$last_year = date('Y', strtotime($date));

			$current_year=date("Y");

			$el_days=$row['e_l'];
 
 $result_t = mysql_query("SELECT * FROM leave_employee_new");
$num_rows = mysql_num_rows($result_t);
 
			if(($last_year != $current_year) AND ($num_rows != 0))
			 {
			 
			 
			 
					$result_tot = mysql_query("SELECT * FROM total_carry_forward_with_assigned where id='$uid' ORDER BY no DESC LIMIT 1");
					$row_tot = mysql_fetch_assoc($result_tot);
					$total_days=$row_tot['total_days'];
					$forward=$row_tot['forward'];
					$sum=$total_days+$forward;
						
					$result_total = mysql_query("SELECT * FROM leave_assign");
					$row_total = mysql_fetch_assoc($result_total);
					$original_el=$row_total['e_l'];	
			
		?>
		<div id="formWrapper">
<!--<fieldset class="fBlock" id="Corporate_Details" >
<legend>Your Leave Balance</legend>
<p>
<label>P. L. Balance</label>
<strong><?php //echo $row_total['p_l'];?></strong>
</p>
<p>
<label>C. L. Balance</label>
<strong><?php //echo $row_total['c_l'];?></strong>
</p>
<p>
<label>E. L. Balance + carry forward</label>
<strong><?php //echo $sum;?></strong>
</p>

<p>
<label>Total Balance</label>
<strong><?php //echo $row_total['p_l']+$row_total['c_l']+$sum;?></strong>
</p>
</fieldset>-->

<legend>Leave Description</legend>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Leave Type</th>
        <th>Carry forward from previous year</th>
		<th>Assigned Leaves</th>
		<th>Total Leaves Balance</th>
		<th>Remaining Leaves Balance</th>
		
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Sick Leave (SL)</td>
        <td>0</td>
		<td><?php echo $pl_assign;?></td>
        <td><?php echo $pl_assign+0;?></td>
        <td><?php echo $pl;?></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Casual Leave (CL)</td>
        <td>0</td>
		<td><?php echo $cl_assign;?></td>
        <td><?php echo $cl_assign+0;?></td>
        <td><?php echo $cl;?></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Earned Leave (EL)</td>
        <td><?php echo $forward;?></td>
		<td><?php echo $el_assign;?></td>
        <td><?php echo $el_assign+$forward;?></td>
        <td><?php echo $el_assign+$forward;?></td>
      </tr>
    </tbody>
  </table>










</div>


		
<?php 
}else{?>
<div id="formWrapper">
<!--<fieldset class="fBlock" id="Corporate_Details" >
<legend>Your Leave Balance</legend>
<p>
<label>P. L. Balance</label>
<strong><?php //echo $pl;?></strong>
</p>
<p>
<label>C. L. Balance</label>
<strong><?php //echo $cl;?></strong>
</p>
<p>
<label>E. L. Balance + carry forward</label>
<strong><?php //echo $el;?></strong>
</p>

<p>
<label>Total Balance</label>
<strong><?php //echo $total_bal;?></strong>
</p>
</fieldset>-->
<legend>Leave Description</legend>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Leave Type</th>
        <th>Carry forward from previous year</th>
		<th>Assigned Leaves</th>
		<th>Total Leaves Balance</th>
		<th>Remaining Leaves Balance</th>
		
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Sick Leave (SL)</td>
        <td>0</td>
		<td><?php echo $pl_assign;?></td>
        <td><?php echo $pl_assign+0;?></td>
        <td><?php echo $pl;?></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Casual Leave (CL)</td>
        <td>0</td>
		<td><?php echo $cl_assign;?></td>
        <td><?php echo $cl_assign+0;?></td>
        <td><?php echo $cl;?></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Earned Leave (EL)</td>
        <td><?php echo $forward;?></td>
		<td><?php echo $el_assign;?></td>
        <td><?php echo $el_assign+$forward;?></td>
        <td><?php echo $el;?></td>
      </tr>
    </tbody>
  </table>




</div>


<?php }
}
?>




<div id="formWrapper">
<fieldset class="fBlock" id="Corporate_Details" >
<legend>Holiday's Calendar</legend>

<div id='calendar'></div>
<div id="dialog" style="display:none;"></div>


</fieldset>
</div>

</article>



<!-- //Article -->
</div>

</div>


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
    <!--<script src="js/fullcalendar.min.js"></script>--> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <!--<script src="js/calendar-custom.js"></script>-->
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
