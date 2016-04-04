

<!--new code-->




<?php


	require_once('../config.php');
	
	require_once('auth.php');


	


?>


<!DOCTYPE html>





  


  



 

 












			  
	


  








							








											

									
									
									
									
									
									
									
									
									
									
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
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
			
			 
			$.each(data, function (i, jsondata) {
				
                 options += "<option value='" + jsondata.emp_id + "'>" + jsondata.emp_id + "</option>";  				
    
			});
		$('#Industry_1').append(options);
       
                   
	        }
		
		});
	});
	
	});*/
	</script>

    <link rel="shortcut icon" href="img/favicon.png">

    <title>Create User</title>

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
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<!--<link rel="stylesheet" href="css/fullcalendar.css">-->
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
		





											<?php








	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {

$i=1;

?>
<div class="alert alert-danger">

<?php

		foreach($_SESSION['ERRMSG_ARR'] as $msg) { ?>








  








							

















			



  <strong><?php echo $i++ .".  ". $msg." "; ?></strong> </br>



<?php







		}








		?>


</div>





       									








				








 








        <?php








		unset($_SESSION['ERRMSG_ARR']);








	}








?>




		  


<?php








	if(isset($_SESSION['CAMREGMESG']) && $_SESSION['CAMREGMESG']==1 ) {








?>








  











<div class="alert alert-success">
  <strong>New Employee added successfully</strong>
</div>










       									








					








<?php








		unset($_SESSION['CAMREGMESG']);








	}








?>





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








  








<p id="update_success">New Employee added successfully</p>








       									








					








<?php








		unset($_SESSION['CAMREGMESG']);








	}








?>











			
			


<form class="form-horizontal" action="create_user_process.php" method="post" enctype="multipart/form-data" role="form">

 <div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Employee Code</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Employee Code" name="emp_code" id="emp_code" required>
      </div>
    </div>
	

	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Title</strong></label>
      <div class="col-sm-10">
        <select name="title" id="title" class="form-control" required>
<option value="">Select One</option>

<option value="mr">Mr.</option>
<option value="ms">Ms.</option>

</select>
      </div>
    </div>
    
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Employee First Name</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="First Name" name="emp_first_name" id="emp_first_name" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Employee Middle Name</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Middle Name" name="emp_middle_name" id="emp_middle_name" >
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Employee Last Name</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Last Name" name="emp_last_name" id="emp_last_name" required>
      </div>
    </div>
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Mobile</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Mobile" name="mobile" id="mobile" maxlength="10"  pattern="[0-9]{10}"  title="Mobile number should be 10 digits" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Address</strong></label>
      <div class="col-sm-10">
        
		<textarea class="form-control" rows="5" id="address" name="address" placeholder="Address" required></textarea>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Email</strong></label>
      <div class="col-sm-10">
        
		 <input type="text" class="form-control" placeholder="Email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="pattern should be : ABC@example.com" required>
      </div>
    </div>
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Select Department</strong></label>
      <div class="col-sm-10">
        <select name="dept" id="dept" class="form-control" required>
<option value="">Select Any One</option>
<?php
$resultid = mysql_query("SELECT * FROM t_dept");
while($rowindustry = mysql_fetch_array($resultid)){
?>
<option value="<?php echo $rowindustry['no']; ?>"><?php echo $rowindustry['dept_name']; ?></option>
<?php
} ?>
</select>


	
      </div>
    </div>
	
	
	
	
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Select Role</strong></label>
      <div class="col-sm-10">
        <select name="Industry" id="Industry" class="form-control" required>
<option value="">Select Any One</option>
<?php
$resultid = mysql_query("SELECT * FROM t_priority_role");
while($rowindustry = mysql_fetch_array($resultid)){
?>
<option value="<?php echo $rowindustry['priority_id']; ?>"><?php echo $rowindustry['role_name']; ?></option>
<?php
} ?>
</select>
      </div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Report To</strong></label>
      <div class="col-sm-10">
        <select name="Industry_1" id="Industry_1" class="form-control">
		<?php
		$rows = mysql_result(mysql_query('SELECT COUNT(*) FROM t_employee'), 0);
		if (!$rows) {
		?>
<option value="my">Himself/Herself</option>
<?php
}
$resultid = mysql_query("SELECT * FROM t_employee");
while($rowindustry = mysql_fetch_array($resultid)){
$pr_id=$rowindustry['priority_id'];
$resultid_1 = mysql_query("SELECT * FROM t_priority_role where priority_id='$pr_id'");
$rowindustry_1 = mysql_fetch_array($resultid_1);
?>
<option value="<?php echo $rowindustry['emp_id']; ?>"><?php echo $rowindustry['emp_first_name']."  [ ".$rowindustry_1 ['role_name']." ]"; ?></option>
<?php
} ?>
</select>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        
		 <input type="submit" class="btn btn-info" value="Submit">
      </div>
    </div>
  </form>


 
           
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
    <!--<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
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
			      			        


			      			  		</div></div></div></body></html>






        


			      			  		</div></div></div></body></html>