
			
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				 <!--<li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Tasks</span>-->
                          <!--<span class="menu-arrow arrow_carrot-right"></span>-->
                     <!-- </a>
                      <ul class="sub" >-->
					  
					  
					  
					  
					  
			<?php
			
			//coding for Tasks
			
			$id_priority=activity($user_id);
			$result_act = mysql_query("SELECT * FROM t_manage_activity where priority_id='$id_priority'");	
			 if(mysql_num_rows($result_act) != 0)
			{
         
				while($row = mysql_fetch_array($result_act))
				{             
					 
					 $priority_id=$row['act_id'];
					 $result_act_1 = mysql_query("SELECT * FROM t_activity where act_id='$priority_id'");
					 if(mysql_num_rows($result_act_1) != 0)
					{
         
						while($row_1 = mysql_fetch_array($result_act_1))
						{   
							if($row_1['act_name']=='View')
							{
						?>    

						 <li style="background-color:gray;"><a class="" href="view_desc.php?user=<?php echo $user_id;?>"><?php echo 'View Employees';?></a></li> 
							
						<?php 
						}
						if($row_1['act_name']=='Edit')
							{
						?>         
							
							<li style="background-color:gray;"><a class="" href="view_desc.php?user=<?php echo $user_id;?>"><?php echo 'Edit Employees';?></a></li>
						<?php 
						}
						if($row_1['act_name']=='Delete')
							{
						?>         
							
							 <li style="background-color:gray;"><a class="" href="view_desc.php?user=<?php echo $user_id;?>"><?php echo 'Delete Employee';?></a></li>
						<?php 
						}
						
							
					}
					 
					}
			   
			}
			}?>
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
                                                  
                          
						  
                      <!--</ul>
                  </li>  -->

					  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>Leave System</span>
                          <!--<span class="menu-arrow arrow_carrot-right"></span>-->
                      </a>
                      <ul class="sub">
					  
					  <?php
			$result_act_new = mysql_query("SELECT * FROM t_employee where emp_id='$uid'");	
			$row_new = mysql_fetch_array($result_act_new);
			$for_ceo=$row_new['assign_to'];
			
			
			$result_act = mysql_query("SELECT * FROM t_employee where assign_to='$uid'");	
			$row = mysql_fetch_array($result_act);
			
			 if(mysql_num_rows($result_act) != 0)
			 {
			 
			?>
	
 <li style="background-color:gray;"><a class="" href="leave_request.php">Team Leave Requests</a></li>
	<?php }
	if($for_ceo!='')
	{
	?>
    
	 <li style="background-color:gray;"><a class="" href="apply-leaves.php">Apply Leaves</a></li>
	 
	
	  <li style="background-color:gray;"><a class="" href="leave-status.php">Leave Status</a></li>
	 	<!-- <li><a href="cancel-leaves.php" title="canceled leaves">Cancel Leaves</a></li>-->
	 
	 <?php }?>
					  
					  
					  
					  
					  
					  
					  
					  
					 
                                                   
                         
						  
                      </ul>
                  </li> 
<!--
 <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Asset System</span>-->
                          <!--<span class="menu-arrow arrow_carrot-right"></span>-->
                     <!-- </a>
                      <ul class="sub">
					   <li style="background-color:gray;"><a class="" href="create_weekends.php">Assign Assets</a></li>
					   <li style="background-color:gray;"><a class="" href="delete_weekends.php">Edit Assets Details</a></li>
                         
                         
						  
                      </ul>
                  </li> -->      				  
                  <!--<li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Components</a></li>
                          <li><a class="" href="buttons.html">Buttons</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>
                          
                      </a>
                                         
                  </li>
                             
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Basic Table</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu ">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profile.html">Profile</a></li>
                          <li><a class="" href="login.html"><span>Login Page</span></a></li>
                          <li><a class="active" href="blank.html">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                      </ul>
                  </li>-->
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->