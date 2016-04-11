
  
  
  
  
  
  
  
  
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
	
	
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">

/*	
//for delating row and slide down(hide) a row
$(document).ready(function()
	{
		$('table#delTable td a.delete').click(function()
		{
			if (confirm("Are you sure you want to delete this row?"))
			{
				var id = $(this).parent().parent().attr('id');
				var data = 'id=' + id ;
				var parent = $(this).parent().parent();

				$.ajax(
				{
					   type: "POST",
					   url: "delete_pending_process.php",
					   data: data,
					   cache: false,
					
					   success: function(json)
					   {
					   
					
							parent.fadeOut('slow', function() {$(this).remove();});
							
					   }
				 });				
			}
		});
		
		
		
	});*/
	
	$(document).ready(function()
	
	{
	
		$('table#delTable td a.delete').click(function()
		{
	 var reason = prompt("Reason");
    if (reason === null) {
        return; //break out of the function early
    }
    
    var id = $(this).parent().parent().attr('id');
				var data = 'id=' + id + '&reason=' +reason;
				var parent = $(this).parent().parent();

				$.ajax(
				{
					   type: "POST",
					   url: "delete_pending_process.php",
					   data: data,
					   cache: false,
					
					   success: function(json)
					   {
					   
					location.reload();
							
							
					   }
				 });				
});
});
	
</script>
	
	
	
	
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
						<!--<li><i class="fa fa-laptop"></i>Dashboard</li>	-->		
						
					</ol>
				</div>
			</div>
			

<div id="content"><!-- TemplateBeginEditable name="edit1" -->
			  
			  




    



























<?php








	//if(isset($_SESSION['CAMDELMESG']) && $_SESSION['CAMDELMESG']==1 ) {








?>








 <!-- <div id="system-message">








							<div class="alert alert-message">








<p>Delete CAM successfully</p>








       									</div>








					</div>	-->








<?php








		//unset($_SESSION['CAMDELMESG']);








	//}








?>
<article>
<form >
	



<h4 ><strong>Leave Status</strong></h4>




<table class="table" id="delTable">








<tbody>








<tr>

















</tr>








<tr style="text-align: center;">








<td style="text-align: center;"><strong>No.</strong></td>








<td><strong>Leave Type</strong></td>








<td><strong>From</strong></td>








<td><strong>Till</strong></td>








<td><strong>Number of Days</strong></td>








<td><strong>Purpose</strong></td>

<td><strong>Status</strong></td>

<td><strong>Comments</strong></td>


<td><strong>Action</strong></td>








</tr>








<?php








$result = mysql_query("SELECT * FROM leave_employee_new where emp_id= '$uid' ORDER BY leave_id DESC");








  $i=1;








while($row = mysql_fetch_array($result))








  { 








?>








<tr id="<?php echo $row['leave_id']; ?>" style="text-align: center;">















<td><?php echo $i; ?></td>

<td><?php echo $row['leave_type']; ?></td>








<td><?php echo $row['from_date']; ?></td>








<td><?php echo $row['till']; ?></td>








<td><?php echo $row['number_of_day']; ?></td>

<td><?php echo $row['purpose']; ?></td>

<?php if($row['status']=='Pending') {?>
<td  style="color:red;"><?php echo $row['status']; ?></td>
<?php } ?>

<?php if($row['status']=='Approved') {?>
<td  style="color:green;"><?php echo $row['status']; ?></td>
<?php } ?>

<?php if($row['status']=='Rejected') {?>
<td  style="color:#B09EC8;"><?php echo $row['status']; ?></td>
<?php } ?>




<?php if($row['status']=='cancled') {?>
<td  style="color:#086A87"><?php echo 'cancelled'; ?></td>
<?php 
}
?>

<td><?php echo $row['comment']; ?></td>

<?php if($row['status']=='Pending') {?>
<td><a href="#" class="delete">  <button type="button" class="btn btn-danger">Cancel Leave</button></a> </td>
<?php 
}
?>




</tr>








<?php   $i++; } ?>








</tbody>








</table>


























</article>
</form>








	<!-- //Article -->








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
