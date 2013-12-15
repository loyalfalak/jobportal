<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<div class="wrapper">
		
		<!--Start of Job seeker Header-->
		<?php include(TEMPLATE.'job_seeker_header.php');?> 
	      	 
		<!--Start of Job seeker Menubar-->	 
	    <?php include(TEMPLATE.'menubar.php');?>

		    <div class="content1">
			
				<!--Start of Job seeker Leftbar-->
		    	<?php include(TEMPLATE.'job_seeker_leftbar.php');?>
		
				<div class="jobseeker_middle">
					<div class="jobseeker_leftbar_title" style="margin-left: 50px;">
	  	  				<h2>Education Details</h2>
	  				</div>
	  				<br>
	  				<div class="msg">
	 				<?php
	 					if(isset($_REQUEST['updatemsg']) && $_REQUEST['updatemsg'] != ''){
	 						echo "You information updated successfully.";
	 					}
	 					?>
	 				</div>
					<form name="education" method="post">
					<?php  $row =mysql_fetch_array($viewdata); ?>
						<table style="margin-top: 50px;" cellspacing="10px;">
							
							<?php $dt = $row['degree_type']; ?>
							<tr>
								<td>Degree Type</td>
								<td>
									<select name="degree_type">
										<option value="">Select</option>
										<option value="Below_Bachelors"<?php if($dt == 'Below_Bachelors'){ echo "selected=selected";}?> >Below Bachelors</option>
										<option value="Bachelors"<?php if($dt == 'Bachelors'){ echo "selected=selected";}?> >Bachelors</option>
										<option value="Masters"<?php if($dt == 'Masters'){ echo "selected=selected";}?> >Masters</option>
										<option value="PHD/Doctorate"<?php if($dt == 'PHD/Doctorate'){ echo "selected=selected";}?>>PHD/Doctorate</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Course Name</td>
								<td>
									<select name="course_name">
										<option value="">Select</option>
										<?php
								      	 if(isset($viewcourse)){
											while($row1 = mysql_fetch_array($viewcourse)){
							    				 $_b = "";
	                            				if($row1['course_name_id'] == $row['course_name']){ 
		                                 				$_b = "SELECTED = SELECTED";
											  	}
								                echo "<option value='".$row1['course_name_id']."' ".$_b.">".$row1['course_name_data']."</option>";
										     	}
				            		      } ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Study Duration</td>
								<td>
									<select name="study_duration">
										<option value="">Select</option>
										<?php 
										$lac = explode('|',$row['study_duration']);
										for($sd = 1;$sd <= 10;$sd++){
											if($lac[0] == $sd){
												echo "<option value=".$sd." selected = selected >".$sd." Year</option>";
											}else{
												echo "<option value=".$sd.">".$sd." Year</option>";	
											}
										}?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Specilization</td>
								<td>
									<select name="specilization">
										<option value="">Select</option>
										<?php
								      	 if(isset($viewspecilization)){
											while($row1 = mysql_fetch_array($viewspecilization)){
							    				 $_b = "";
	                            				if($row1['specilization_id'] == $row['specilization']){ 
		                                 				$_b = "SELECTED = SELECTED";
											  	}
								                echo "<option value='".$row1['specilization_id']."' ".$_b.">".$row1['specilization_details']."</option>";
										     	}
				            		      } ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>University / Institute</td>
								<td>
									<select name="university">
										<option value="">Select</option>
										<?php
								      	 if(isset($viewuniversity)){
											while($row1 = mysql_fetch_array($viewuniversity)){
							    				 $_b = "";
	                            				if($row1['university_institude_id'] == $row['university']){ 
		                                 				$_b = "SELECTED = SELECTED";
											  	}
								                echo "<option value='".$row1['university_institude_id']."' ".$_b.">".$row1['university_institude_details']."</option>";
										     	}
				            		      } ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Passing Year</td>
								<td>
									<select name="passing_year">
										<option value="">Year</option>
										<?php 
											$passing_year = explode('|',$row['passing_year']);
											for($sd = 2013;$sd >= 1970;$sd--){
												if($passing_year[0] == $sd){
													echo "<option value=".$sd." selected=selected>".$sd."</option>";
												}else{
													echo "<option value=".$sd.">".$sd."</option>";	
												}	
											}?>
									</select>
								</td>
							</tr>
							<?php $study_type = $row['study_type']; ?>
							<tr>
								<td>Study Type</td>
								<td>
									<select name="study_type">
										<option value="">Select</option>
										<option value="Part Time" <?php if($study_type =='Part Time'){ echo "selected=selected"; } ?> >Part Time</option>
										<option value="Full Time" <?php if($study_type =='Full Time'){ echo "selected=selected"; } ?> >Full Time</option>
										<option value="Correspondence" <?php if($study_type =='Correspondence'){ echo "selected=selected"; } ?> >Correspondence</option>
										<option value="Distance Learning" <?php if($study_type =='Distance Learning'){ echo "selected=selected"; } ?> >Distance Learning</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><input type="button" name="add_more" value="Add More"/></td>
							</tr>
							
							<tr>
								<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btn7"/></td>
							</tr>   
						</table>
					 </form>	       	
		    	   </div>
		    </div>
	     <div class="clr"> </div>	 
	</div>
		
		<!--Start Footer--> 
		<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>