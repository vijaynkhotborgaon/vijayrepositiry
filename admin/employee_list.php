
  
  
  
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


<script>


  $(function() {


    $( "#emp_first_name" ).datepicker({ dateFormat: 'dd-mm-yy' });
	 $( "#emp_middle_name" ).datepicker({ dateFormat: 'dd-mm-yy' });


  });

  
  
  

 function camdelete(str)

{

	if(confirm("Do you want to delete the selected Employee's Record?"))

	{

  location.href='delete_emp.php?camid='+str;


}

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
			  
			  




    



























<?php








	if(isset($_SESSION['delete_emp']) && $_SESSION['delete_emp']==1 ) {








?>








  <div id="system-message">








							<div class="alert alert-success">








<p id="update_success">Employee Record deleted successfully.</p>








       									</div>








					</div>	








<?php








		unset($_SESSION['delete_emp']);








	}








?>
<article>
<form >
	



<h4 style="float:left;"><strong>Employee Lists</strong></h4><span style="float:right;"><a href="create_user.php" title="Create Employee"><img src="img/user_add.png" alt="Add Employee" /></a></span>





<table class="table">








<tbody>








<tr>
















</tr>








<tr style="text-align: center;">








<td style="text-align: center;"><strong>Employee Code</strong></td>








<td><strong>Employee Name</strong></td>

















<td><strong>Mobile</strong></td>



<td><strong>Email ID</strong></td>

<td><strong>Reports To</strong></td>

<td><strong>Designation</strong></td>




<td><strong>Update</strong></td>










</tr>








<?php








$result = mysql_query("SELECT * FROM t_employee");








  $i=1;








while($row = mysql_fetch_array($result))








  { 








?>








<tr style="text-align: center;">

















<td><?php echo $row['emp_code']; ?></td>



<?php
$full_name=$row['emp_first_name']." ".$row['emp_middle_name']." ".$row['emp_last_name'];
?>


<td><?php echo $full_name; ?></td>


<td><?php echo $row['mobile']; ?></td>


<td><?php echo $row['email']; ?></td>
<td>
<?php 


$resultcam = mysql_query("SELECT * FROM t_employee WHERE emp_id=".$row['emp_id']);
$row_1 = mysql_fetch_array($resultcam);

$result_final = mysql_query("SELECT * FROM t_employee WHERE emp_id=".$row_1['assign_to']);
$row_2 = mysql_fetch_array($result_final);
$full_name=$row_2['emp_first_name']." ".$row_2['emp_middle_name']." ".$row_2['emp_last_name'];
echo $full_name;
 ?>
</td>

<td>
<?php 




$result_final = mysql_query("SELECT * FROM t_priority_role WHERE priority_id=".$row_1['priority_id']);
$row_2 = mysql_fetch_array($result_final);

echo $row_2['role_name'];
 ?>
</td>



<td><a href="employee_edit.php?emp_id=<?php echo $row['emp_id']; ?>" title="edit"><img src="img/edit.png" alt="Edit Employee Details" /></a>

<a href="employee_detail.php?emp_id=<?php echo $row['emp_id']; ?>&emp_code=<?php echo $row['emp_code']; ?>" title="View Details"><img src="img/View-detail.png" alt="View Details" /></a>




<?php 


$resultcam = mysql_query("SELECT * FROM t_employee WHERE assign_to=".$row['emp_id']);


$companycam = mysql_num_rows($resultcam);


if($companycam!=0){ ?>





<a href="javascript:void(0);" onClick="alert('You can not delete this User as there are employees reporting him/her.')" title="Delete Employee"><img src="img/Delete.png" style="margin-left:5px;" alt="Delete CAM" /></a>


<?php


} else {


?>





<a href="javascript:void(0);" onClick="camdelete('<?php echo $row['emp_code']; ?>')" title="Delete Employee"><img src="img/Delete.png" style="margin-left:5px;" alt="Delete CAM" /></a> 





<?php } ?>


</td>


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
