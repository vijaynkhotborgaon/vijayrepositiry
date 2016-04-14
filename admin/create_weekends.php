

<!--new code-->




<?php


	require_once('../config.php');
	
	require_once('auth.php');


	


?>







<html>
  <head>
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  
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
    

	
    <!-- Load jQuery from Google's CDN -->
    <!-- Load jQuery UI CSS  -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    
    <!-- Load jQuery JS -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Load jQuery UI Main JS  -->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
    <!-- Load SCRIPT.JS which will create datepicker for input field  -->
    <script src="script.js"></script>
	
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.js"></script>
		<!-->
		<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.1.js"></script>
		<!-- -->
		
		<!-- loads mdp -->
		<script type="text/javascript" src="jquery-ui.multidatespicker.js"></script>
		
    
    <link rel="stylesheet" href="runnable.css" />
  </head>
 <style> 
  h1 {
  font-family: Helvetica;
  font-weight: 100;
}


</style>

<script>
$(document).ready(
  
  /* This is the function that will get executed after the DOM is fully loaded */
  function () {
   $("#datepicker").multiDatesPicker(
            {
            beforeShowDay: function (date) {

            if (date.getDay() == 6) {
                return [true, ''];
            }
            return [false, ''];
           }
        });
	
  }

);



</script>
  <body>
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
  <strong>Weekend's</strong> created, You can add more.
</div>











       									








					








<?php








		unset($_SESSION['CAMREGMESG']);








	}








?>






		

<form class="form-horizontal" action="create_weekends_process.php" method="post" enctype="multipart/form-data" role="form">
  <div class="form-group">
      <label class="control-label col-sm-2" for="email"><strong>Select Dates to create Weekends</strong></label>
      <div class="col-sm-10">
  <input class="form-control" type="text" id="datepicker" name="datepicker" />
  <input type="hidden" name="zone" value="05:30">
   </div>
    </div>
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        
		 <input type="submit" class="btn btn-info" value="Submit">
      </div>
    </div>
  
   </form>
  </body>
  
    <!-- javascripts -->
   

   
   
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
   
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
  
   
   
    <!-- custom select -->
  
	
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
   
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
</html>






























