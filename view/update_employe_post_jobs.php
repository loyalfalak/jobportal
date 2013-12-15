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
		<?php include(TEMPLATE.'employe_header.php');?> 
	      	 
		<!--Start Menubar-->	 
	    <?php include(TEMPLATE.'menubar.php');?>
	   
		<div class="content1">
		    	
		<!--Start leftbar-->
    	<?php include(TEMPLATE.'employe_leftbar.php');?>

			<div class="content_register_left">
				<div class="jobseeker_leftbar_title" style=" margin-left: 50px;">
	  	 			<h2>Update Post Jobs</h2>
	 			</div>
				<form name="post_jobs" method="post" action="" style="form">	
					<?php $row = mysql_fetch_array($viewdata1); ?>
					<table border="0px;" style="margin-top: 30px;" cellspacing="5px;">
						<tr>
							<td>Title</td>
							<td><input type="text" name="title" value="<?php echo $row['title'];?>" /></td>
						</tr>
						<tr>
							<td>Industry</td>
							<td>
								<select name="industry">
									<option value="">Select</option>
									 <?php
									       if(isset($viewdata3)){
												while($row1 = mysql_fetch_array($viewdata3)){
												 $_b = "";
		                                		if($row1['industry_id'] == $row['industry']){ 
		                                     		$_b = "SELECTED = SELECTED";
												 }
								            		echo "<option value='".$row1['industry_id']."' ".$_b.">".$row1['industry']."</option>";
												}
								            }
										?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Functional Area</td>
							<td>
								<select name="functional_area">
										<option value="">Select</option>
										<?php
									       if(isset($viewdata4)){
												while($row2 = mysql_fetch_array($viewdata4)){
												 $_b = "";
		                                		if($row2['function_id'] == $row['function']){ 
		                                     		$_b = "SELECTED = SELECTED";
												 }
								            		echo "<option value='".$row2['function_id']."' ".$_b.">".$row2['function']."</option>";
												}
								            }
										?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Experience</td>
							<td>
								<select name="experience1" style="width: 90px;">
									<option value="">Select</option>
										<?php $exp = explode('|',$row['experience']);
										if($exp[0] == 'Fresher'){
											echo '<option value="Fresher" selected="selected">Fresher</option>';
										}else{
											echo '<option value="Fresher">Fresher</option>';
										}
									 	for($lp = 1;$lp <= 30;$lp++){
									 		if($exp[0] == $lp){
									 			echo "<option value=".$lp."Years selected=selected>".$lp." Years</option>";
											}else{
												echo "<option value=".$lp."Years>".$lp." Years</option>";	
											}	
										}
									?> 
								</select>
								<select name="experience2" style="width: 90px;">
									<option value="">Select</option>
										<?php $exp1 = explode('|',$row['experience']);
									 	for($lp = 1;$lp <= 30;$lp++){
									 		if($exp1[1] == $lp){
									 			echo "<option value=".$lp."Years selected=selected>".$lp." Years</option>";
											}else{
												echo "<option value=".$lp."Years>".$lp." Years</option>";	
											}	
										}
										if($exp1[1] == '30+ Years'){
											echo '<option value="30+ Years" selected="selected">30+ Years</option>';
										}else{
											echo '<option value="30+ Years">30+ Years</option>';
										}
										?> 
							  	</select>
							 </td>
						</tr>
						<tr>
							<td>Employees Required</td>
							<td><input type="text" name="emp_require" value="<?php echo $row['emp_require'];?>" /></td>
						</tr>
						<?php $js = $row['jobexpiry'];?>
						<tr>
							<td>Jobs Expiry</td>
							<td>
								<select name="jobs_expiry">
									<option value="">Select</option>
									<option value="1 week"<?php if($js=='1 week'){echo "selected=selected";} ?> >1 week</option>
									<option value="2 weeks"<?php if($js=='2 weeks'){echo "selected=selected";} ?> >2 weeks</option>
									<option value="1 month"<?php if($js=='1 month'){echo "selected=selected";} ?> >1 month</option>
									<option value="2 months"<?php if($js=='2 months'){echo "selected=selected";} ?> >2 months</option>
									<option value="3 months"<?php if($js=='3 months'){echo "selected=selected";} ?> >3 months</option>
								</select>
							</td>
						</tr>
						<?php $gender = $row['gender'];?>
						<tr>
							<td>Gender</td>
							<td>
								<select name="gender">
									<option value="">Select</option>
									<option value="Male"<?php if($gender=='Male'){echo "selected=selected";} ?> >Male</option>
									<option value="Female"<?php if($gender=='Female'){echo "selected=selected";} ?> >Female</option>
									<option value="Both"<?php if($gender=='Both'){echo "selected=selected";} ?> >Both</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Country</td>
							<td>
								<select name="country">
									<option value="">Select</option>
									<?php
									      if(isset($viewdata5)){
												while($row3 = mysql_fetch_array($viewdata5)){
												 $_b = "";
		                                		if($row3['country_id'] == $row['country']){ 
		                                     		$_b = "SELECTED = SELECTED";
												 }
								            		echo "<option value='".$row3['country_id']."' ".$_b.">".$row3['country_name']."</option>";
												}
								            }
										?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Location</td>
							<td>
								<select name="location">
									<option value="">Select</option>
									<?php
									       if(isset($viewdata6)){
												while($row4 = mysql_fetch_array($viewdata6)){
												 $_b = "";
		                                		if($row4['location_id'] == $row['location']){ 
		                                     		$_b = "SELECTED = SELECTED";
												 }
								            		echo "<option value='".$row4['location_id']."' ".$_b.">".$row4['location_name']."</option>";
												}
								            }
										?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Zipcode</td>
							<td><input type="text" name="zipcode" value="<?php echo $row['zipcode'];?>" /></td>
						</tr>
						<?php $jt = $row['jobtype'];?>
						<tr>  
							<td>Job Type</td>
							<td>
								<select name="job_type">
									<option value="">Select</option>
									<option value="Permanent"<?php if($jt=='Permanent'){echo "selected=selected";} ?> >Permanent</option>
									<option value="Temporary"<?php if($jt=='Temporary'){echo "selected=selected";} ?> >Temporary</option>
									<option value="Full Time"<?php if($jt=='Full Time'){echo "selected=selected";} ?> >Full Time</option>
									<option value="Part Time"<?php if($jt=='Part Time'){echo "selected=selected";} ?> >Part Time</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Salary</td>
							<td>
								<select name="lacs" style="width: 90px;">
									<option value="">Lacs</option>
									<?php 
										$lac = explode('|',$row['salary']);
										$cnt = 1;
										while($cnt <= 50){
											if($lac[0] == $cnt){
												echo "<option value=".$cnt."Million selected=selected>".$cnt."</option>";
											}else{
												echo "<option value=".$cnt."Million>".$cnt."</option>";	
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
									$thousand = explode('|',$row['salary']);
									$cnt = 0;
									while($cnt < 100){
										if($thousand[1] == $cnt) {
											echo "<option value=".$cnt."Thosounds selected = selected>".$cnt."</option>";
										}else{
											echo "<option value=".$cnt."Thosounds>".$cnt."</option>";
										}	
										$cnt += 5; 
										}
									?> 
								</select>
							</td>
						</tr>
						<tr>
							<td>Keywords</td>
							<td><input type="text" name="keywords" value="<?php echo $row['keywords'];?>" /></td>
						</tr>
						<tr>
							<td>Job Description</td>
							<td><textarea name="job_description" cols="20" rows="5"><?php echo $row['description'];?></textarea></td>
						</tr>
						
					</table>
					<br>
					<div class="sub">
	               		<input type="submit" name="submit" value="Submit" class="btnn" style="margin-left: 100px;" />
             		</div>
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