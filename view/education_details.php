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
		<?php include(TEMPLATE.'header.php');?> 
	
		 <!-- Start Menubar-->	 
	    <?php include(TEMPLATE.'menubar.php');?>
	   
		 <div class="content1">
		   	<form name="userdetail" method="post" action="" class="form" enctype="multipart/form-data">
			       <center><h1>More Details</h1></center>
		      	 <div class="content_register_left">
		       		<div class="content_register_left_title">
	       				<h2>Education Details</h2>
	    	   		</div>
					<table style="margin-top: 50px;" cellspacing="10px;">
						<tr>
							<td>Degree Type</td>
							<td>
								<select name="degree_type">
									<option value="">Select</option>
									<option value="Below_Bachelors">Below Bachelors</option>
									<option value="Bachelors">Bachelors</option>
									<option value="Masters">Masters</option>
									<option value="PHD/Doctorate">PHD/Doctorate</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Course Name</td>
							<td>
								<select name="course_name">
									<option value="">Select</option>
									<?php while($row = mysql_fetch_array($viewcourse)){?>
										<option value="<?php echo $row['course_name_id'];?>"><?php echo $row['course_name_data'];?></option>
								   <?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Study Duration</td>
							<td>
								<select name="study_duration">
									<option value="">Select</option>
									<?php for($sd = 1;$sd <= 10;$sd++){
										echo "<option value=".$sd.">".$sd." Year</option>";
									}?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Specilization</td>
							<td>
								<select name="specilization">
									<option value="">Select</option>
									<?php while($row = mysql_fetch_array($viewspecilization)){?>
									<option value="<?php echo $row['specilization_id'];?>"><?php echo $row['specilization_details'];?></option>
								   <?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td>University / Institute</td>
							<td>
								<select name="university">
									<option value="">Select</option>
									<?php while($row = mysql_fetch_array($viewuniversity)){?>
									<option value="<?php echo $row['university_institude_id'];?>"><?php echo $row['university_institude_details'];?></option>
								   <?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Passing Year</td>
							<td>
								<select name="passing_year">
								  <option value="">Year</option>
									<?php for($sd = 2013;$sd >= 1970;$sd--){
										echo "<option value=".$sd.">".$sd."</option>";
									}?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Study Type</td>
							<td>
								<select name="study_type">
									<option value="">Select</option>
									<option value="part_time">Part Time</option>
									<option value="fulle_time">Fulle Time</option>
									<option value="correspondence">Correspondence</option>
									<option value="distance_learning">Distance Learning</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><input type="hidden" name="uid" value="" /></td>
						</tr>
					
				</table>
	       </div>
	   <div class="content_register_left">
			<div class="content_register_left_title">
	    		<h2>Work Experience</h2>
	       	</div>
				<table style="margin-top: 50px;" cellspacing="10px;">
					<tr>
						<td>Current Company Name</td>
						<td>
							<input type="text" name="current_company" value="" />
						</td>
					</tr>
					<tr>
						<td>Current Designation</td>
						<td>
							<input type="text" name="current_designation" value="" />
						</td>
					</tr>
					<tr>
						<td>Current Annual Salary</td>
						<td>
							<select name="lacs" style="width: 90px;">
								<option value="">Lacs</option>
								<?php for($cal = 1;$cal <= 50;$cal++){
										echo "<option value=".$cal.">".$cal."</option>";
									}?>
								<option value="50+">50+</option>
							</select>
							<select name="thosounds" style="width: 90px;">
							   <option value="">Thosounds</option>
								<option value="0">0</option>
								<option value="5">5</option>
								<option value="10">10</option>
								<option value="15">15</option>
								<option value="20">20</option>
								<option value="25">25</option>
								<option value="30">30</option>
								<option value="35">35</option>
								<option value="40">40</option>
								<option value="45">45</option>
								<option value="50">50</option>
								<option value="55">55</option>
								<option value="60">60</option>
								<option value="65">65</option>
								<option value="70">70</option>
								<option value="75">75</option>
			                    <option value="80">80</option>
								<option value="85">85</option>
								<option value="90">90</option>
								<option value="95">95</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Duration  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;From</td>
						<td>
							<select name="month1" style="width: 90px;">
							   <option value="">Select</option>
								<option value="january">January</option>
								<option value="february">February</option>
								<option value="march">March</option>
								<option value="april">April</option>
								<option value="may">May</option>
								<option value="june">June</option>
								<option value="july">July</option>
								<option value="august">August</option>
								<option value="september">September</option>
								<option value="october">October</option>
								<option value="november">November</option>
								<option value="december">December</option>
							</select>
							<select name="year1" style="width: 90px;">
								<option value="">Select</option>
								<?php for($sd = 2013;$sd >= 1970;$sd--){
									echo "<option value=".$sd.">".$sd."</option>";
								}?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Duration &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To</td>
						<td>
							<select name="month2" style="width: 90px;">
								<option value="">Select</option>
								<option value="january">January</option>
								<option value="february">February</option>
								<option value="march">March</option>
								<option value="april">April</option>
								<option value="may">May</option>
								<option value="june">June</option>
								<option value="july">July</option>
								<option value="august">August</option>
								<option value="september">September</option>
								<option value="october">October</option>
								<option value="november">November</option>
								<option value="december">December</option>
							</select>	
							<select name="year2" style="width: 90px;">
								<option value="">Select</option>
								<option value="present">Present</option>
								<?php for($sd = 2013;$sd >= 1970;$sd--){
									echo "<option value=".$sd.">".$sd."</option>";
								}?>							
							</select>
						</td>
					</tr>
					<tr>
						<td>Job Profile</td>
						<td>
							<input type="text" name="job_profile" value="" />
						</td>
					</tr>
					<tr>
						<td><input type="hidden" name="uid" value="" /></td>
					</tr>
					
				</table>
			</div> 
			 <br>
	        <div class="sub">
	               <input type="submit" name="submit" value="Submit" class="btnn" />
             </div>
	    </form>
	  </div>
		<div class="clr">
		</div>	 
</div>
	 <!-- Start Footer--> 
	<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>