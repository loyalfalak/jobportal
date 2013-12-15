<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<div class="wrapper">
 	
 		<!--Start of Header-->
		<?php include(TEMPLATE.'job_seeker_header.php');?> 
	      	 
		<!--Start Menubar-->	 
	    <?php include(TEMPLATE.'menubar.php');?>
	   
		<div class="content1">
		    	
	    		<!--Start Menubar-->
		    	<?php include(TEMPLATE.'job_seeker_leftbar.php');?>
	    
				<div class="jobseeker_middle">
					<div class="jobseeker_leftbar_title" style=" margin-left: 50px;">
	  	 				<h2>Preferred Job Details</h2>
	 				</div>
	 				<br>
	 				<div class="msg">
	 				<?php
	 					if(isset($_REQUEST['updatemsg']) && $_REQUEST['updatemsg'] != ''){
	 						echo "You information updated successfully.";
	 					}
	 					?>
	 				</div>
					<form name="preffered_job" method="post" action="" enctype="multipart/form-data">
					    <?php $row = mysql_fetch_array($viewdata); ?>	
						<table style="margin-top: 50px;" cellspacing="10px;">
							<tr>
								<td>Expected Annual Salary</td>
								<td>
									<select name="lacs" style="width: 90px;">
										<option value="">Lacs</option>
										<?php 
										$lac = explode('|',$row['expected_annual_salary']);
										$cnt = 1;
										while($cnt <= 50){
											if($lac[0] == $cnt) {
												echo "<option value=".$cnt." selected=selected>".$cnt."</option>";
											}else{
												echo "<option value=".$cnt.">".$cnt."</option>";	
											}
											$cnt += 1;
										}
										 
										if($lac[0] ==  '50+'){
											 echo '<option value="50+" selected="selected">50+</option>';
										}else{
											echo '<option value="50+">50+</option>';	
										}?>
									</select>

									<select name="thosounds" style="width: 90px;">
										<option value="">Thosounds</option>
										<?php
											$thousand = explode('|',$row['expected_annual_salary']);
											$cnt = 0;
											while($cnt < 100){
												if($thousand[1] == $cnt) {
													echo "<option value=".$cnt." selected = selected>".$cnt."</option>";
												}else{
													echo "<option value=".$cnt.">".$cnt."</option>";
												}	
												$cnt += 5; 
											}
										?> 
									</select>
								</td>
							</tr>
							<tr>
								<td>Preffered Location</td>
								<td>
									<select name="preffered_location">
										<option value="">Select</option>
										<?php
								      	 if(isset($viewlocation)){
											while($row1 = mysql_fetch_array($viewlocation)){
							    				 $_b = "";
	                            				if($row1['location_id'] == $row['preffered_location']){ 
		                                 				$_b = "SELECTED = SELECTED";
											  	}
								                echo "<option value='".$row1['location_id']."' ".$_b.">".$row1['location_name']."</option>";
										     	}
				            		      } ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Preffered Industry</td>
								<td>
									<select name="preffered_industry">
										<option value="">Select</option>
										<?php
								      	 if(isset($viewdata3)){
											while($row1 = mysql_fetch_array($viewdata3)){
							    				 $_b = "";
	                            				if($row1['industry_id'] == $row['preffered_industry']){ 
		                                 				$_b = "SELECTED = SELECTED";
											  	}
								                echo "<option value='".$row1['industry_id']."' ".$_b.">".$row1['industry']."</option>";
										     	}
				            		      } ?>
			            		      </select>
								</td>
							</tr>
							<tr>
								<td>Preferred Function</td>
								<td>
									<select name="preferred_function">
										<option value="">Select</option>
										<?php
								      	 if(isset($viewdata4)){
											while($row1 = mysql_fetch_array($viewdata4)){
							    				 $_b = "";
	                            				if($row1['function_id'] == $row['preferred_function']){ 
		                                 				$_b = "SELECTED = SELECTED";
											  	}
								                echo "<option value='".$row1['function_id']."' ".$_b.">".$row1['function']."</option>";
										     	}
				            		      } ?>
									</select>
								</td>
							</tr>
							<?php $pjt = $row['preffered_job_type'];?>
							<tr>
								<td>Preffered Job Type</td>
								<td>
									<select name="preffered_jobtype">
										<option value="">Select</option>
										<option value="Permanent"<?php if($pjt == 'Permanent'){ echo 'selected=selected';} ?> >Permanent</option>
										<option value="Temporary"<?php if($pjt == 'Temporary'){ echo 'selected=selected';} ?> >Temporary</option>
										<option value="Full Time"<?php if($pjt == 'Full Time'){ echo 'selected=selected';} ?> >Full Time</option>
										<option value="Part Time"<?php if($pjt == 'Part Time'){ echo 'selected=selected';} ?> >Part Time</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Any other Preference</td>
								<td>
									<textarea name="preference" cols="20" rows="5"><?php echo $row['any_other_preference']; ?></textarea>
								</td>
							</tr>
							<tr>
								<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btn7" /></td>
							</tr>
					</table>
				</form>
		  	 </div>
	    </div>
		<div class="clr">
		</div>	 
	</div>
	
	<!-- Start Footer--> 
	<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>	