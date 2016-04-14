<?php


	require_once('../config.php');
	
	require_once('auth.php');

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

 echo $el_days=$row['e_l'];
 
 $result_t = mysql_query("SELECT * FROM leave_employee_new");
$num_rows = mysql_num_rows($result_t);
 
 
 if(($last_year != $current_year) AND ($num_rows != 0))
 {
 
 
		
		 if($el_days>5)
		 {
		 $qry_five = "INSERT INTO t_carry_forward(no, id, carry_forward_days) VALUES('','$uid',5)";
			$result_five = mysql_query($qry_five);
			
			
			$qry_total = "INSERT INTO total_carry_forward_with_assigned(no, id, total_days, forward) VALUES('','$uid','$original_el', 5)";
			$result_total = mysql_query($qry_total);
			
		}
		 else
		 {
		 
		 $qry_less = "INSERT INTO t_carry_forward(no, id, carry_forward_days) VALUES('','$uid','$el_days')";
					mysql_query($qry_less);
				
		 
		$qry_total = "INSERT INTO total_carry_forward_with_assigned(no, id, total_days, forward) VALUES('','$uid','$original_el','$el_days')";
			$result_total = mysql_query($qry_total);
		 
		 }
				 
		
 }





	

	


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
					<!--<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<!--<li><i class="fa fa-laptop"></i>Dashboard</li>	-->		
						
					</ol>
				</div>
			</div>
			
			
			









	<article>








											<?php








	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {








		foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>








 








<?php








			echo '<p id="error_msg" style="color:red;">',$msg,'</p>'; 








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








 








<p id="update_success" style="color:green;">Password Changed successfully</p>








       									








<?php








		unset($_SESSION['PASSCNG']);








	}








?>



<h3 style="float:left;"><strong>Admin Details</strong></h3><span style="float:right;"><a href="edit_admin.php" title="Edit Details"><img src="img/edit.png" alt="edit admin" style="width:40px;height:40px;"/></a></span>
<table class="table" id="delTable">
 



<?php 


$resultid = mysql_query("SELECT * FROM users where user_id=1");
$i=1;


$rowindustry = mysql_fetch_array($resultid);
?>

<tr>
    <td><b>User Name</b></td>
    <td><?php echo $rowindustry['user_name']; ?></td>
</tr>
<tr>
    <td><b>Email ID</b></td>
    <td><?php echo $rowindustry['email_admin']; ?></td>
</tr>

	
     
   
  






</table>







    








</br>
			
		

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
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
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
