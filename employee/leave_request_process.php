
  
  
  
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








	if(isset($_SESSION['CAMREGMESG']) && $_SESSION['CAMREGMESG']==1 ) {








?>








 








							






<div class="alert alert-success">

<p id="update_success" style="margin:10px auto;"><?php echo "request approved";?></p>
<?php








		unset($_SESSION['CAMREGMESG']);








	}?>

</div>






       								








					









	
	
	<?php








	if(isset($_SESSION['Rejected']) && $_SESSION['Rejected']==1 ) {








?>








 








							






<div class="alert alert-danger">

<p id="error_msg"><?php echo "Request Rejected";?></p>

</div>






       								








					








<?php








		unset($_SESSION['Rejected']);








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



$request=$_GET['request'];




$result = mysql_query("SELECT * FROM leave_employee_new where leave_id=$request ");








$row = mysql_fetch_assoc($result);
















?>








    <form action="leave_request_process_update.php" method="post">
	
	<input type="hidden" name="emp_id" value="<?php echo $row['emp_id'];?>">
	<input type="hidden" name="leave_id" value="<?php echo $row['leave_id'];?>">
	<input type="hidden" name="days" value="<?php echo $row['number_of_day'];?>">
	<input type="hidden" name="plcl" value="<?php echo $row['leave_type'];?>">
	<input type="hidden" name="pl" value="<?php echo $row['p_l'];?>">
	<input type="hidden" name="cl" value="<?php echo $row['c_l'];?>">
	<input type="hidden" name="el" value="<?php echo $row['e_l'];?>">











<h4><strong>Leave Request</strong></h4>


<table class="table">








<tbody>








<tr>

















</tr>








<tr >








<td ><strong>Employee ID</strong></td>








<td><?php echo $row['emp_id']; ?></td>








</tr>

<tr>








<td><strong>Employee Name</strong></td>

<?php
$emp_id_1=$row['emp_id'];
$result_1 = mysql_query("SELECT * FROM t_employee where emp_id='$emp_id_1'");
while($row_1 = mysql_fetch_array($result_1))
{
$emp_name=$row_1['emp_first_name'];
$emp_mid_name=$row_1['emp_middle_name'];
$emp_last_name=$row_1['emp_last_name'];
}

?>






<td><?php echo $emp_name." ".$emp_mid_name." ".$emp_last_name; ?></td>








</tr>









<tr>








<td><strong>Leave Type</strong></td>








<td><?php echo $row['leave_type']; ?></td>








</tr>


<tr>








<td><strong>From</strong></td>








<td><?php echo $row['from_date']; ?></td>








</tr>



<tr>








<td><strong>Till</strong></td>








<td><?php echo $row['till']; ?></td>








</tr>
<tr>
<td><strong>Number of Days</strong></td>








<td><?php echo $row['number_of_day']; ?></td>








</tr>

<tr>


<td><strong>Reason</strong></td>








<td><?php echo $row['purpose']; ?></td>








</tr>



<tr>


<td><strong>Comment</strong></td>








<td><textarea class="form-control" rows="5" id="caddress" name="caddress"></textarea></td>







</tr>







<tr>











<td>&nbsp;</td>





 



<td><p><input type="submit" class="btn btn-info" name="approve" value="Approve"><input name="reject" type="submit" value="Reject" class="btn btn-danger"></p></td>



 


</tr>








</tbody>








</table>








</form>






	
	

          </section>
      </section>
      <!--main content end-->
  </section>
 
  </body>
</html>
