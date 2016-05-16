
						<div style="margin:5px;background-color:#CEF6F5;padding:5px;border: 3px solid #086A87; ">
						<?php
						

						$result_pri = mysql_query("SELECT * FROM t_manage_activity where priority_id='$sess_id'" );
while($rowindustry_pri = mysql_fetch_array($result_pri)){

						?>
						<ul class="checkbox-inline">
						
						<li>
						<input type="checkbox" name="Previlages[]" class='group<?php echo $rowindustry['act_id']; ?>' value="1<?php echo '('.$rowindustry['act_id'].')'; ?>" <?php if($rowindustry_pri['pri_id']==1 
						AND $rowindustry['act_id']==$rowindustry_pri['act_id']){?>checked<?php }?>> View  </li>
						
					
						<li>
						<input type="checkbox" name="Previlages[]" class='group<?php echo $rowindustry['act_id']; ?>' value="2<?php echo '('.$rowindustry['act_id'].')'; ?>" <?php if($rowindustry_pri['pri_id']==2 AND $rowindustry['act_id']==$rowindustry_pri['act_id']){?>checked<?php }?>> Edit 
						</li>
						
						<li>
						
						<input type="checkbox" name="Previlages[]" class='group<?php echo $rowindustry['act_id']; ?>' value="3<?php echo '('.$rowindustry['act_id'].')'; ?>" <?php if($rowindustry_pri['pri_id']==3 AND $rowindustry['act_id']==$rowindustry_pri['act_id']){?>checked<?php }?> > Delete 
						</li>
						
						</ul>
						<?php
}
?>
						</div>
