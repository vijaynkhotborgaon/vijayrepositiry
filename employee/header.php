<?php

require_once('../config.php');
	
	require_once('auth.php');


include('config_files/manage_act.php');
$user_id=$_SESSION['SESS_USER_ID'];
$result = mysql_query("SELECT * FROM t_employee where emp_id='$user_id'");	
$row = mysql_fetch_assoc($result);

?>

			
			


			
			
			
			
			
		

	<?php
		$priority_id=$row['priority_id'];
$result = mysql_query("SELECT * FROM t_priority_role where priority_id='$priority_id'");	
$row_id = mysql_fetch_assoc($result);
?>
			



			
			
			 
			  
			
      <header class="header dark-bg" >
            <div class="toggle-nav" >
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
          	<a href="#" class="pull-left"><img src="img/imageedit_6_7284757439.png" class="img-rounded" alt="Cinque Terre" style="margin-top:15px;"></a>
           

            <div class="nav search-row" id="top_menu" >
                <!--  search form start -->
              
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row" >                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
           
                   <!-- <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 6 pending letter</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info" >
                                        <div class="desc">
                                            Project 1
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info" >
                                        <div class="desc">Digital Marketing</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Logo Designing</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>-->
                   
                    <!--<li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                   
                                    <span class="subject">
                                    <span class="from">Some one</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
					 
					 
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
							
							<?php	
									$result = mysql_query("SELECT * FROM leave_employee_new where assign_to='$uid' AND status='Pending' ORDER BY leave_id DESC");
									
									$num_of_pending=mysql_num_rows($result);

                                ?>

                            <span class="badge bg-important"><?php echo $num_of_pending;?></span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">Notifications</p>
                            </li>
                            <li>
                                <a href="leave_request.php">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Pending Leaves
									
								<?php	
									$result = mysql_query("SELECT * FROM leave_employee_new where assign_to='$uid' AND status='Pending' ORDER BY leave_id DESC");
									
									$num_of_pending=mysql_num_rows($result);

                                ?>

                                    <span class="small italic pull-right" style="color:red;"><?php echo $num_of_pending;?></span>
                                </a>
                            </li>
                            <!--<li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>-->
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <!--<img alt="" src="img/avatar1_small.jpg">-->
                            </span>
                            <span class="username">Hello,  <?php echo $row['emp_first_name'];?></span> <span style="color:#81BEF7;">/</span> 
							<!--<span class="username">Employee ID : <?php //echo $_SESSION['SESS_USER_ID'];?></span> /-->
							<span class="username">Joining Date : <?php echo $row['JoiningDate'];?></span> <span style="color:#81BEF7;">/</span>
							<span class="username">Employee Code : <?php echo $row['emp_code'];?></span>
							 
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <!--<li class="eborder-top">
                                <a href="my_profile.php"><i class="icon_mail_alt"></i> My Profile</a>
                            </li>-->
							
							<li>
                                <a href="my_profile.php"><i  class="icon_profile"></i>My Profile</a>
                            </li>
							
                          <li>
                                <a href="self-details.php"><i  class="icon_profile"></i>Change Password</a>
                            </li>
                           
                           
                           
                          
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->