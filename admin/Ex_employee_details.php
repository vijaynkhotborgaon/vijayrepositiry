

<!--new code-->




<?php


	require_once('../config.php');
	
	require_once('auth.php');


	
			$emp_id=$_GET['emp_id'];
		$name=$_GET['name'];
		
		$role=$_GET['role'];


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
					   url: "delete_holidays_process.php",
					   data: data,
					   cache: false,
					
					   success: function(json)
					   {
					   
					
							parent.fadeOut('slow', function() {$(this).remove();});
							
					   }
				 });				
			}
		});
		
		// style the table with alternate colors
		// sets specified color for every odd row
		
	});
	
</script>

    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

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
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>
			
			  <div class="col-sm-6">
			



											<?php








	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {








		foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>








  








							














<div class="alert alert-danger">
  <strong><?php echo $msg; ?></strong> 
</div>


			




<?php



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
  <strong>Activity</strong> Assign to Role
</div>











       									








					








<?php








		unset($_SESSION['CAMREGMESG']);








	}








?>
<h3><b>Employee Details</b></h3>
<table class="table" id="delTable">
 



<?php 


$resultid = mysql_query("SELECT * FROM t_ex_employee where emp_id='$emp_id'");
$i=1;


while($rowindustry = mysql_fetch_array($resultid)){
?>

<tr>
    <td><b>Employee Code</b></td>
    <td><?php echo $rowindustry['emp_code']; ?></td>
</tr>
<tr>
    <td><b>Employee Title</b></td>
    <td><?php echo $rowindustry['title']; ?></td>
</tr>
<tr>
    <td><b>Employee First Name</b></td>
    <td><?php echo $rowindustry['emp_first_name']; ?></td>
</tr>
<tr>
    <td><b>Employee Middle Name</b></td>
    <td><?php echo $rowindustry['emp_middle_name']; ?></td>
</tr>
<tr>
    <td><b>Employee Last Name</b></td>
    <td><?php echo $rowindustry['emp_last_name']; ?></td>
</tr>
<tr>
    <td><b>Mobile Number</b></td>
    <td><?php echo $rowindustry['mobile']; ?></td>
</tr>
<tr>
    <td><b>Address</b></td>
    <td><?php echo $rowindustry['address']; ?></td>
</tr>
<tr>
    <td><b>Email ID</b></td>
    <td><?php echo $rowindustry['email']; ?></td>
</tr>
<tr>
    <td><b>Report To</b></td>
    <td>
	 
<?php 


echo $name;
 ?>
 
	</td>
</tr>
<tr>
    <td><b>Designation</b></td>
    <td>
	<?php 





echo $role;
 ?>
	
	</td>
</tr>

<tr>
    <td><b>Username</b></td>
    <td><?php echo $rowindustry['username']; ?></td>
</tr>
	
     
   
  



<?php
} ?>


</table>







    





			
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
			      			        


			      			  		</div></div></div></body></html>