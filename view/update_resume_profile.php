<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<div class="wrapper">
		<!--Start of Job Seeker Header-->
		<?php include(TEMPLATE.'job_seeker_header.php');?> 
	      	 
	   <!--Start of Job Seeker Menu-->
	   <?php include(TEMPLATE.'menubar.php');?>
	   
	    <div class="content1">
		
			<!--Start of Job Seeker Leftbar-->
			<?php include(TEMPLATE.'job_seeker_leftbar.php');?>
		  		     
			<div class="jobseeker_middle">
				<div class="jobseeker_leftbar_title" style=" margin-left: 30px;">
	  	 			<h2>Resume Details</h2>
	 			</div>
	 			<br>
	 			<div class="msg">
	 				<?php
	 					if(isset($_REQUEST['updatemsg']) && $_REQUEST['updatemsg'] != ''){
	 						echo "You information updated successfully.";
	 					}
	 					?>
	 			</div>
				<form name="resume" method="post" class="form" enctype="multipart/form-data">
					<?php $row = mysql_fetch_array($viewdata); ?>

					<table style="margin-top: 50px;" cellspacing="10px;">
						<tr>
							<td>Resume Title</td>
							<td>
								<input type="text" name="resume_title" value="<?php echo $row['resume_title']?>" />
							</td>
						</tr>
						<tr>
							<td>Upload Resume</td>
							<td>
								<input type="file" name="file" value="" />
							</td>
						</tr>
						<?php $job_type = $row['job_type']?>
						<tr>
							<td>JobType</td>
							<td>
								<select name="jobtype">
									<option value="">Select</option>
									<option value="Permanent"<?php if($job_type =='Permanent'){ echo "selected=selected"; } ?>>Permanent</option>
									<option value="Temporary"<?php if($job_type =='Temporary'){ echo "selected=selected"; } ?>>Temporary</option>
									<option value="Full Time"<?php if($job_type =='Full Time'){ echo "selected=selected"; } ?>>Full Time</option>
									<option value="Part Time"<?php if($job_type =='Part Time'){ echo "selected=selected"; } ?>>Part Time</option>
							 	</select>
							</td>
						</tr>
						<tr>
							<td>Experience</td>
							<td>
								<select name="experience">
									<option value="">Select</option>
									<?php $exp = explode('|',$row['experience']);
										if($exp[0] == 'Fresher'){
											echo '<option value="Fresher" selected="selected">Fresher</option>';
										}else{
											echo '<option value="Fresher">Fresher</option>';
										}
										
										if($exp[0] == '6_Month'){
											echo '<option value="6_Month" selected="selected">6 Month</option>';
										}else{
											echo '<option value="6_Month">6 Month</option>';
										}
										
									 	for($lp = 1;$lp <= 30;$lp++){
									 		if($exp[0] == $lp){
									 			echo "<option value=".$lp."_year selected=selected>".$lp." Year</option>";
											}else{
												echo "<option value=".$lp."_year>".$lp." Year</option>";	
											}	
										}
										
										if($exp[0] == '30+_year'){
											echo '<option value="30+_year" selected="selected">30+ Year</option>';
										}else{
											echo '<option value="30+_year">30+ Year</option>';
										}
										?> 
								</select>
							</td>
						</tr>
						<tr>
							<td>Industry</td>
							<td>
								 <select name="industries">
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
			            		      } ?>
								 </select>
							</td>
						</tr>
						<tr>
							<td>Function</td>
							<td>
								 <select name="function">
									 <option value="">Select</option>
									<?php
							      	 if(isset($viewdata4)){
										while($row1 = mysql_fetch_array($viewdata4)){
						    				 $_b = "";
                            				if($row1['function_id'] == $row['function']){ 
	                                 				$_b = "SELECTED = SELECTED";
										  	}
							                echo "<option value='".$row1['function_id']."' ".$_b.">".$row1['function']."</option>";
									     	}
			            		      } ?>
								 </select>
								</td>
							</tr>
							<tr>
								<td>Key Skill</td>
								<td><input type="text" name="key_skill" value="<?php echo $row['key_skills']?>" /></td>
							</tr>
							<?php $np = $row['notice_period']?>
							<tr>
								<td>Notice Period</td>
								<td>
									<select name="notice_period">
										<option value="">Select</option>
										<option value="1 Week" <?php if($np=='1 Week'){ echo 'selected=selected';} ?>>1 Week</option>
									   	<option value="1 Month"<?php if($np=='1 Month'){ echo 'selected=selected';} ?>>1 Month</option>
									  	<option value="2 Month"<?php if($np=='2 Month'){ echo 'selected=selected';} ?>>2 Month</option>
									  	<option value="3 Month"<?php if($np=='3 Month'){ echo 'selected=selected';} ?>>3 Month</option>
									   	<option value="6 Month"<?php if($np=='6 Month'){ echo 'selected=selected';} ?>>6 Month</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btn7"/></td>
							</tr>			
						</table>
					</form>
	     		</div>
		    </div>
	     <div class="clr">
	     </div>	 
	</div>
	
	 	<!--Start of Footer-->
		<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>