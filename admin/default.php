

<!--new code-->




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
	
	<link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='js/jquery-1.9.1.min.js'></script>
<script src='js/jquery-ui-1.10.2.custom.min.js'></script>
<script src='js/fullcalendar.min.js'></script>

	
	<script>
$(document).ready(function() {


	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		var url="<?php echo $mainurl;?>"
		
		
		var calendar=$('#calendar').fullCalendar({
			editable: true,
			
			
		
			
			events: url+'admin/events.php',
			
			
			
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
	   
			
			
			
			selectable: true,
			selectHelper: true,
			select: function(start, end, allDay) {
			
							start = new Date(start);
							end = new Date(end);

				  var day_diff = (end - start) / (1000 * 60 * 60 * 24);
				  var end_day = start.getDay() + day_diff; 
				  if (start.getDay() == 0) 
				  {
				  alert("You can not include Sunday as holiday");
				  }
				     
				  else if (end_day > 6) 
				  {
				  alert("You can not include Sunday as holiday");
				  }
				  else
				  {

				 
			
			 var title = prompt('holiday Title:');
			 if (title) {
			 start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
			 end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
			 $.ajax({
			 url: url+'admin/add_events.php',
			 dataType:'json',
			 data: 'title='+ title+'&start='+ start +'&end='+ end ,
			 type: "POST",
			 async: false,
			 success: function(data) {
			
			$.each(data, function(index, value){
					s=value.id;
					if(s=='exist')
					{
					location.reload();
					alert("For this date the holiday has been assigned alredy....");
					}
			});
			 }
			 });
			 calendar.fullCalendar('renderEvent',
			 {
			 title: title,
			 start: start,
			 end: end,
			 allDay: allDay
			 },
			 
			 true // make the event "stick"
			 );
			 }
			 }
			 calendar.fullCalendar('unselect');
			},
			
			editable: true,
			eventDrop: function(event, delta) {
			 start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
			 end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
			 $.ajax({
			 url: url+'admin/update_events.php',
			 data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
			 type: "POST",
			 success: function(json) {
			 alert("OK fine");
			 }
			 });
			},
			eventResize: function(event) {
			 start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
			 end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
			 $.ajax({
			 url: url+'admin/update_events.php',
			 data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
			 type: "POST",
			 success: function(json) {
			 alert("OK fine");
			 }
			 });
			 
			},  
			
			 eventDestroy: function(event, element, view)
        {
            alert("removing stuff");
        },
		
		
		
		
		/* DELETING EVENT
		
		eventRender: function(event, element) {
            element.append( "<span class='closeon' style='padding:10px;background-Color:red;'>X</span>" );
            element.find(".closeon").click(function() {
										
				$('#calendar').fullCalendar('removeEvents',event.id);
			
								
            });
        },
		
		*/
			
			// edit event
			eventClick: function(event, jsEvent, view) {
			
							
			
			
			
			
			
			
							var title = prompt('holiday Title:', event.title, { buttons: { Ok: true, Cancel: false} });
						   if (title){
						   event.title = title;
						   $.ajax({
							 url: url+'admin/event_update_1.php',
							 data: 'title='+title+'&eventid='+event.id,
							 type: 'POST',
							 dataType: 'json',
							 success: function(response){
							  if(response.status == 'success')
							   $('#calendar').fullCalendar('updateEvent',event);
							 },
							 error: function(e){
							   alert('Error processing your request: '+e.responseText);
							 }
						   });
						   }
}



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
    <!--<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />-->
	<!--<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />-->
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
					<!--<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<!--<li><i class="fa fa-laptop"></i>Dashboard</li>	-->							  	
					</ol>
					
				</div>
				
			</div>
			
	
<!--			
		
<div id='external-events'>
   <h4>Draggable Events</h4>
 
     <img src="trashcan.png" id="trash" alt="">
   </p>
</div>-->
<div id='calendar'></div>
<div id="dialog" style="display:none;"></div>










  









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
			      			        


			      			  		</div></div></div></body></html>