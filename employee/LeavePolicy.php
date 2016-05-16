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
	<link href="css/DashboardButtonStyles.css" rel="stylesheet">
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
	<link href="css/style.css" rel="stylesheet">
	<link href="css/ExpandableListStyle.css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
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
			  <!--
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<!--<li><i class="fa fa-laptop"></i>Dashboard</li>	-->		
				 <!--
					</ol>
				</div>
			</div>
		-->
			
	
<ul id="menu" align="center">
  <li><a href="index.php">Home</a></li>
  <li><a href="LeavePolicy.php" style="background-color:#58ACFA;">Leave Policy</a></li>
  <li><a href="HolidayCalendar.php" >Holiday Calendar</a></li>
</ul>

 <br>
<div style="background-color:#CED8F6;margin:10px;padding:10px;border-radius:10px;">
<h5 style="font-size:110%;">  <b>* The below mentioned Leave Policy is applicable to all permanent employees of Archon Consulting Systems Pvt Ltd. </b></h5>
<h5 style="font-size:110%;">  <b>* Leaves are calculated for Calendar Year (January to December) </b> </h5>
</div>
<br>

<p class="trigger"><a href="#" style="color:#2E64FE;">+	Annual Leave (AL)</a></p>
<div class="toggle_container" style="background-color:#CECEF6;padding:10px;border: 2px solid #065F34;border-radius:10px;">
   <div class="block">
        <p> a.&nbsp; &nbsp; An employee is eligible for 15 calendar days of Annual Leave every year. </p>
		<br>
		<p>	b. &nbsp; &nbsp; AL is calculated on pro-rated basis for every new employee. If an employee joins on or before 15th of the month, he/she will be eligible for full month’s leave. In case the employee joins on or after 16th of the month, he/she will be eligible for half month’s leave. </p>
		<br>
		<p>	c. &nbsp; &nbsp; At any given point in time, an employee can have only 30 days of AL to their credit, which is 15 days of the current year’s eligibility and 15 days of carry forward. </p>
		<br>

		<p>	d. &nbsp; &nbsp; AL in excess of 30 days will get lapsed. </P>
		<br>

		<p>	e. &nbsp; &nbsp; Encashment of AL to max of 30 days is allowed at the time of exit/termination or retirement whichever is earlier. Encashment will be done on the last drawn Basic salary. </p>
		<br>

		<p>	f. &nbsp; &nbsp; In case of Late arrival to office accumulating to of 4 hours a month will be accounted as half day leave and beyond 4 hours will be accounted as full day of leave. </p>
		<br>
		
		<p>	g. &nbsp; &nbsp; AL should be planned at least three weeks in advance except in unforeseen circumstances and necessary approvals to be sought. </p>
		<br>
		
		<p>	h. &nbsp; &nbsp; AL would be granted as per the exigencies of the business. </p>
		<br>

    </div>
</div>


<p class="trigger"><a href="#" style="color:#2E64FE;">+	Sick Leave (SL)</a></p>
<div class="toggle_container" style="background-color:#CECEF6;padding:10px;border: 2px solid #065F34;border-radius:10px;">
   <div class="block">
        <p> a. &nbsp; &nbsp; Employees are eligible for 6 days of SL in a year. </p>
		<br>
		
		<p> b. &nbsp; &nbsp; SL can be availed for a minimum of half a day. </p>
		<br>
		
		<p> c. &nbsp; &nbsp; SL exceeding 2 days at a stretch need to be supported by medical certificate and the same need to be submitted to the HR Department. </p>
		<br>
		
		<p> d. &nbsp; &nbsp; In case of prolonged sickness, SL can be combined with casual leave balance if any, else can seek permission from the reporting manager for leave without pay. </p>
		<br>
		
		<p> e. &nbsp; &nbsp; For employees joining during the course of the year, SL will be calculated on pro-rata basis at the rate of 0.5 days for the month. </p>
		<br>
		
		<p> f. &nbsp; &nbsp; Weekly holidays and Company declared holidays falling during SL are counted as SL. </p>
		<br>

		<p> g. &nbsp; &nbsp; Employees are not entitled to salary or wages in lieu of un-availed SL. </p>
		<br>
		
		<p> h. &nbsp; &nbsp; An employee may avail sick leave keeping reporting manager and HR representative informed. However, the leave records need to be applied/updated immediately after reporting to work. </p>
		<br>

</p>
    </div>
</div>


<p class="trigger"><a href="#" style="color:#2E64FE; ">+	Casual Leave (CL)</a></p>
<div class="toggle_container" style="background-color:#CECEF6;padding:10px;border: 2px solid #065F34;border-radius:10px;">
   <div class="block">
        <p> a.&nbsp; &nbsp; An employee is entitled for 6 days of CL per year on a pro-rata basis. </p>
		<br>
		<p>	b. &nbsp; &nbsp; CL can be availed for minimum of half a day and maximum of 3 days at a stretch. </p>
		<br>
		<p>	c. &nbsp; &nbsp; Weekly holidays and Company declared holidays falling during the period of CL is counted as CL. </p>
		<br>

		<p>	d. &nbsp; &nbsp; CL cannot be combined with any other leave categories. </P>
		<br>

		<p>	e. &nbsp; &nbsp; CL cannot be accumulated. Unused CL will get lapsed at the end of the calendar year. </p>
		<br>

		<p>	f. &nbsp; &nbsp; Employees are not entitled to salary or wages in lieu of un-availed CL. </p>
		<br>
		
		<p>	g. &nbsp; &nbsp; As far as possible, employees must obtain prior approval before going on leave. In sudden and unforeseen circumstances, when prior approval is not possible, employee shall seek the approval at the earliest possible opportunity stating the reason in writing. </p>
		<br>

		<p>	h. &nbsp; &nbsp; CL should be planned at least a day in advance. </p>
		<br>
		
    </div>
</div>


<p class="trigger"><a href="#" style="color:#2E64FE;">+	Maternity Leave (ML)</a></p>
<div class="toggle_container" style="background-color:#CECEF6;padding:10px;border: 2px solid #065F34;border-radius:10px;">
   <div class="block">
        <p> a.&nbsp; &nbsp; All female employees are entitled to 84 calendar days of Maternity Leave. Of this 42 days of leave should be availed after the delivery. </p>
		<br>
		<p>	b. &nbsp; &nbsp; In case of miscarriage, a female employee shall, on production of such proof as may be prescribed, be entitled to ML for a period of six weeks immediately following the day of her miscarriage. </p>
		<br>
		<p>	c. &nbsp; &nbsp; ML can be availed for two deliveries within the entire tenure of the employee in the Company. </p>
		<br>

		<p>	d. &nbsp; &nbsp; For illness arising out of pregnancy, delivery, premature birth of the child or miscarriage shall, on production of such proof as may be prescribed, be entitled to additional leave for a maximum period of one month. </P>
		<br>
		
		<p>	e. &nbsp; &nbsp; An applicant for maternity leave must give at least 8 weeks advance notice to the company. </P>
		<br>
		
		<p>	f. &nbsp; &nbsp; Details of the new born should be sent to the HR Team for updating the HR records and Medical insurance coverage. </P>
		<br>
		
		<p>	g. &nbsp; &nbsp; In case of any sickness arising due to pregnancy and requiring leave should be supported by a medical certificate from a registered medical practitioner. </P>
		<br>

    </div>
</div>

<p class="trigger"><a href="#" style="color:#2E64FE;">+	Paternity Leave (PL)</a></p>
<div class="toggle_container" style="background-color:#CECEF6;padding:10px;border: 2px solid #065F34;border-radius:10px;">
   <div class="block">
        <p> a.&nbsp; &nbsp; All confirmed male employees are eligible for 3 working days of Paternity Leave for every child birth and is limited to two births. </p>
		<br>
		<p>	b. &nbsp; &nbsp; Paternity Leave need to be taken at a stretch. </p>
		<br>
		<p>	c. &nbsp; &nbsp; Employees are not entitled to salary or wages in lieu of unavailed PL. </p>
		<br>

		<p>	d. &nbsp; &nbsp; Paternity Leave cannot be accumulated. </P>
		<br>

    </div>
</div>


<p class="trigger"><a href="#" style="color:#2E64FE;">+	Loss of Pay (LOP)</a></p>
<div class="toggle_container" style="background-color:#CECEF6;padding:10px;border: 2px solid #065F34;border-radius:10px;">
   <div class="block">
        <p> a.&nbsp; &nbsp; Loss of Pay (LOP) is not an entitlement and is solely at the discretion of the Department Head and HR. </p>
		<br>
		<p>	b. &nbsp; &nbsp; LOP may be granted in case of prolonged sickness/medical emergency which prevents the employee from attending work or to support an ailing immediate family member on production of proof. </p>
		<br>
		<p>	c. &nbsp; &nbsp; LOP can be requested after exhausting AL, CL and SL available to the employee’s credit. </p>
		<br>

		<p>	d. &nbsp; &nbsp; If LOP is availed for a month or more, AL for those days will not get accrued. </P>
		<br>
		
		<p>	e. &nbsp; &nbsp; The number of LOP will get deducted from the calculation during the incentive/variable/commission payout. </P>
		<br>		

    </div>
</div>



<p class="trigger"><a href="#" style="color:#2E64FE;">+	Sabbatical Leave</a></p>
<div class="toggle_container" style="background-color:#CECEF6;padding:10px;border: 2px solid #065F34;border-radius:10px;">
   <div class="block">
   
		<p> Archon Consulting System understands that its employees may need to take time off from their regular work to pursue higher studies which can equip them to perform their role better and also enable them to take higher responsibilities in the organization. In support, an employee after completing 3 continuous years of service with the Company will be eligible for Sabbatical Leave of maximum one year. </p>
		<br>
		
        <p> a.&nbsp; &nbsp; During Sabbatical leave the employee will be paid half of his/her salary. </p>
		<br>
		<p>	b. &nbsp; &nbsp; Can be combined with Annual Leave balance if any. </p>
		<br>
		<p>	c. &nbsp; &nbsp; Employee will not be eligible for any other kind of leaves during this period. </p>
		<br>

		<p>	d. &nbsp; &nbsp; Company contribution towards PF and Gratuity will be calculated based on the revised salary. </P>
		<br>
		
		<p>	e. &nbsp; &nbsp; Medical Insurance coverage will continue during this period provided the employee pays the premium amount before heading on Sabbatical Leave. </P>
		<br>
		
		<p>	f. &nbsp; &nbsp; Request for Sabbatical leave must be made minimum 3 months in advance. </P>
		<br>
		
		<p>	g. &nbsp; &nbsp; Approval of Sabbatical leave is solely at Managements discretion and subject to Business needs. </P>
		<br>
		
    </div>
</div>


<p class="trigger"><a href="#" style="color:#2E64FE;">+	Leave during Notice Period</a></p>
<div class="toggle_container" style="background-color:#CECEF6;padding:10px;border: 2px solid #065F34;border-radius:10px;">
   <div class="block">
   
		<p> Employees who are serving their notice period will not be eligible for leaves. Management reserves the right to grant leaves for personal and medical emergencies. </p>
		<br>
		
    </div>
</div>

<p class="trigger"><a href="#" style="color:#2E64FE;">+	Leave during Probationary Period</a></p>
<div class="toggle_container" style="background-color:#CECEF6;padding:10px;border: 2px solid #065F34;border-radius:10px;">
   <div class="block">
   
		<p> -> &nbsp; &nbsp; The probationary period for all employees in Archon Consulting Systems is 6 months from the date of joining. </p>
		<br>
		
		<p> -> &nbsp; &nbsp; Employees who are in the Probationary period will be eligible for only Annual Leave. Management reserves the right to grant leaves for personal and medical emergencies. </p>
		<br>
    </div>
</div>


<p class="trigger"><a href="#" style="color:#2E64FE;">+	Paid Holidays </a></p>
<div class="toggle_container" style="background-color:#CECEF6;padding:10px;border: 2px solid #065F34;border-radius:10px;">
   <div class="block">
   
		<p> Every year Company declares ten paid holidays which includes five National Holidays the details of which will be published by the HR Team at the beginning of the year. </p>
		<br>
		
    </div>
</div>


<p class="trigger"><a href="#" style="color:#2E64FE;">+	Guidelines to avail Leaves </a></p>
<div class="toggle_container" style="background-color:#CECEF6;padding:10px;border: 2px solid #065F34;border-radius:10px;">
   <div class="block">
   
		<p> a.&nbsp; &nbsp; All leaves should be applied in the portal for the approval. </p>
		<br>
		<p>	b. &nbsp; &nbsp; An employee may go for the leaves only if it is Approved by reporting manager in the portal. </p>
		<br>
		<p>	c. &nbsp; &nbsp; Employees working at customer/client location, should seek prior approval from their respective managers from the customer/client side along with their reporting manager from Archon Consulting Systems Pvt Ltd. approval in portal. </p>
		<br>

		<p>	d. &nbsp; &nbsp; An employee may avail sick leave keeping reporting manager and HR representative informed. However, the leave records need to be applied/updated in the portal after reporting to work. </P>
		<br>
		
		<p>	e. &nbsp; &nbsp; Annual Leave should be applied at least 3 weeks in advance. </P>
		<br>

    </div>
</div>




<!-- javascripts -->
<script>

$(".toggle_container").hide();
    
    $("p.trigger").click(function(){
        $(this).toggleClass("active").next().slideToggle("normal");
    });

</script>


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















