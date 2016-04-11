

<!--new code-->




<?php


	require_once('../config.php');
	
	require_once('auth.php');

	$emp_id=$_GET['emp_id'];
	


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


    $( "#DOJ" ).datepicker({ dateFormat: 'dd-mm-yy' });
	


  });
  
function changecontent1() {
   window.location="emp-details.php";
}

function changecontent2(){
   window.location="asset-man.php";
}

function changecontent3() {
   window.location="leave-man.php";
}

function change1() {
   window.location="main.php";
}

function change2() {
   window.location="main.php";
}

function change3() {
   window.location="main.php";
}


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
						<!--<li><i class="fa fa-laptop"></i>Dashboard</li>	-->		
					</ol>
				</div>
			</div>
		
 <div class="col-sm-8">




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








	if(isset($_SESSION['USERUPDATE']) && $_SESSION['USERUPDATE']==1 ) {








?>








  







<div class="alert alert-success">
<p id="update_success">Employee Record updated successfully!</p>
</div>






<?php








		unset($_SESSION['USERUPDATE']);








	}








?>


<?php








$result = mysql_query("SELECT * FROM t_employee WHERE emp_id='$emp_id'");


$row = mysql_fetch_assoc($result);


?>	


<form class="form-horizontal" action="employee-update-process.php" method="post" enctype="multipart/form-data" role="form">


	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Title</strong></label>
      <div class="col-sm-10">
        <select name="title" id="title" class="form-control" required>
<option value="">Select Title</option>

<option value="mr" <?php if($row['title']=='mr'){ ?> selected<?php } ?>>Mr.</option>
<option value="ms" <?php if($row['title']=='ms'){ ?> selected<?php } ?>>Ms.</option>

</select>
      </div>
    </div>
    
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Employee First Name</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="First Name" name="emp_first_name" id="emp_first_name" value="<?php echo $row['emp_first_name']; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Employee Middle Name</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Middle Name" name="emp_middle_name" id="emp_middle_name" value="<?php echo $row['emp_middle_name']; ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Employee Last Name</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Last Name" name="emp_last_name" id="emp_last_name" value="<?php echo $row['emp_last_name']; ?>" required>
      </div>
    </div>
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Mobile</strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Mobile" name="mobile" id="mobile" maxlength="10"  pattern="[0-9]{10}"  title="Mobile number should be 10 digits" value="<?php echo $row['mobile']; ?>" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Address</strong></label>
      <div class="col-sm-10">
        
		<textarea class="form-control" rows="5" id="address" name="address" placeholder="Address" required><?php echo $row['address']; ?></textarea>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Email</strong></label>
      <div class="col-sm-10">
        
		 <input type="text" class="form-control" placeholder="Email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="pattern should be : ABC@example.com" value="<?php echo $row['email']; ?>" required>
      </div>
    </div>
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email" ><strong>Date of Joining </strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Date of Joining" required name="DOJ" id="DOJ" value="<?php echo $row['JoiningDate']; ?>"/>
		
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
<option value="<?php echo $rowindustry['no']; ?>"<?php if($rowindustry['no']==$row['dept_id']){ ?> selected<?php } ?>><?php echo $rowindustry['dept_name']; ?></option>
<?php
} ?>
</select>


	
      </div>
    </div>
	
	
	
	<?php 
$result_1 = mysql_query('SELECT * FROM  t_priority_role WHERE priority_id='.$row['priority_id']);
$row_1 = mysql_fetch_assoc($result_1);


	?>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Select Role</strong></label>
      <div class="col-sm-10">
        <select name="Industry" id="Industry" class="form-control" required>
<option value="">Select Role</option>
<?php
$resultid = mysql_query("SELECT * FROM t_priority_role");
while($rowindustry = mysql_fetch_array($resultid)){
?>
<option value="<?php echo $rowindustry['priority_id']; ?>"<?php if($rowindustry['priority_id']==$row['priority_id']){ ?> selected<?php } ?>><?php echo $rowindustry['role_name']; ?></option>
<?php
} ?>
</select>
      </div>
    </div>
	

	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Report To</strong></label>
      <div class="col-sm-10">
        <select name="Industry_1" id="Industry_1" class="form-control" >
		
		<option value="my">Himself/Herself</option>
		<?php
$resultid = mysql_query("SELECT * FROM t_employee");
while($rowindustry = mysql_fetch_array($resultid)){
$pr_id=$rowindustry['priority_id'];
$resultid_1 = mysql_query("SELECT * FROM t_priority_role where priority_id='$pr_id'");
$rowindustry_1 = mysql_fetch_array($resultid_1);
?>


<option value="<?php echo $rowindustry['emp_id']; ?>"<?php if($rowindustry['emp_id']==$row['assign_to']){ ?> selected<?php } ?>><?php echo $rowindustry['emp_first_name'] ." [ ".$rowindustry_1['role_name']." ] "; ?></option>


<?php
} ?>
</select>

      </div>
    </div>
	
	
	<input type="hidden" name="country" value="<?php echo $emp_id;?>">
   
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        
		 <input type="submit" class="btn btn-info" value="Update">
      </div>
    </div>
  </form>


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
			      			        


			      			  		</div></div></div></body></html>






        


			      			  		</div></div></div></body></html>