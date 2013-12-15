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
		       <center><h1>More Details</h1></center>
	      	 <div class="content_register_left">
	       		<div class="content_register_left_title">
	       			<h2>Preffered Job</h2>
	       		</div>
				<form name="preffered_job" method="post" action="" enctype="multipart/form-data">
					<table style="margin-top: 50px;" cellspacing="10px;">
						<tr>
							<td>Expected Annual Salary</td>
							<td>
								<select name="lacs" style="width: 90px;">
									<option value="">Lacs</option>
									<?php for($exsl = 1;$exsl <= 50;$exsl++){
										echo "<option value=".$exsl.">".$exsl."</option>";
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
							<td>Preffered Location</td>
							<td>
								<select name="preffered_location">
									<option value="">Select</option>
									<?php while($row = mysql_fetch_array($viewlocation)){?>
										<option value="<?php echo $row['location_id'];?>"><?php echo $row['location_name'];?></option>
								    <?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Preffered Industry</td>
							<td>
								<select name="preffered_industry">
									<option value="">Select</option>
									<?php while($row = mysql_fetch_array($viewdata3)) {?>
										<option value="<?php echo $row['industry_id'];?>"><?php echo $row['industry'];?></option>
									<?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Preferred Function</td>
							<td>
								<select name="preferred_function">
									<option value="">Select</option>
									<?php while($row=mysql_fetch_array($viewdata4)) {?>
										<option value="<?php echo $row['function_id'];?>"><?php echo $row['function'];?></option>
									<?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Preffered Job Type</td>
							<td>
								<select name="preffered_jobtype">
									<option value="">Select</option>
									<option value="Permanent">Permanent</option>
									<option value="Temporary">Temporary</option>
									<option value="Full Time">Full Time</option>
									<option value="Part Time">Part Time</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Any other Preference</td>
							<td>
								<textarea name="preference" cols="20" rows="5"></textarea>
							</td>
						</tr>
						<tr>
							<td><input type="hidden" name="uid" value="" /></td>
						</tr>
					</table>
		       </div>
		    <div class="content_register_left">
	       		<div class="content_register_left_title">
	       			<h2>Personal Details</h2>
	       		</div>
					<table style="margin-top: 50px;" cellspacing="10px;">
						<tr>
							<td>Date of Birth</td>
							<td>
								<select name="day" style="width: 60px;">
									<option value="">Day</option>
									<?php for($day = 1;$day <= 31;$day++){
										echo "<option value=".$day.">".$day."</option>";
									}?>
								</select>
								<select name="month" style="width: 60px;">
									<option value="">Month</option>
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
								<select name="year" style="width: 60px;">
									<option value="">Year</option>
								    <?php for($year = 1995;$year >= 1950;$year--){
										echo "<option value=".$year.">".$year."</option>";
									}?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>
								<select name="gender">
									<option value="">Select</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Marital Status</td>
							<td>
								<select name="marital_status">
									<option value="">Select</option>
									<option value="Single">Single/unmarried</option>
									<option value="Married">Married</option>
									<option value="Wedowed">Wedowed</option>
									<option value="Divorced">Divorced</option>
									<option value="Separated">Separated</option>
									<option value="Other">Other</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Work Permit in Country</td>
							<td>
								<select name="work_permit">
									<option value="">Select</option>
									<?php while($row = mysql_fetch_array($viewcountry)) {?>
										<option value="<?php echo $row['country_id'];?>"><?php echo $row['country_name'];?></option>
									<?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Category</td>
							<td>
								<select name="category">
									<option value="">Select</option>
									<option value="SC">SC</option>
									<option value="ST">ST</option>
									<option value="OBC">OBC</option>
								    <option value="Other">Other</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Physically Challenged</td>
							<td>
								<select name="physically_challenged">
									<option value="">Select</option>
									<option value="Yes">Yes</option>
									<option value="No">No</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Description</td>
							<td><textarea name="description" cols="20" rows="5"></textarea></td>
						</tr>
						<tr>
							<td><input type="hidden" name="uid" value="" /></td>
						</tr>
					</table>
		       </div> 
	        <br>
	        	<center><h1>Languages Known</h1></center>
	        <div class="content_register_left" style="width: 600px;margin-left: 250px">
	        		<table align="center" cellspacing="10px">
	        			<tr>
	        				<th>Language</th>
	        				<th>Proficiency</th>
	        				<th>Read</th>
	        				<th>Write</th>
	        				<th>Speak</th>
	        			</tr>
	        			<tr>
							<td><input type="text" name="language" value="" style="height: 23px;" /></td>
							<td>
								<select name="proficiency">
									 <option value="">Select</option>
									 <option value="Expert">Expert</option>
									 <option value="Beginner">Beginner</option>
									 <option value="Proficient">Proficient</option>
								</select>
							</td>
							<td>
								<center><input type="checkbox" name="read" value="read" /></center>
							</td>
							<td>
								<center><input type="checkbox" name="write" value="write" /></center>
							</td>
							<td>
								<center><input type="checkbox" name="speak" value="speak" /></center>
							</td>
	        			</tr>
	        			<tr>
							<td><input type="text" name="language1" value="" style="height: 23px;" /></td>
							<td>
								<select name="proficiency1">
									 <option value="">Select</option>
									 <option value="Expert">Expert</option>
									 <option value="Beginner">Beginner</option>
									 <option value="Proficient">Proficient</option>
								</select>
							</td>
							<td>
								<center><input type="checkbox" name="read1" value="read" /></center>
							</td>
							<td>
								<center><input type="checkbox" name="write1" value="write" /></center>
							</td>
							<td>
								<center><input type="checkbox" name="speak1" value="speak" /></center>
							</td>
	        			</tr>
	        			<tr>
							<td><input type="text" name="language2" value="" style="height: 23px;" /></td>
							<td>
								<select name="proficiency2">
									 <option value="">Select</option>
									 <option value="Expert">Expert</option>
									 <option value="Beginner">Beginner</option>
									 <option value="Proficient">Proficient</option>
								</select>
							</td>
							<td>
								<center><input type="checkbox" name="read2" value="read" /></center>
							</td>
							<td>
								<center><input type="checkbox" name="write2" value="write" /></center>
							</td>
							<td>
								<center><input type="checkbox" name="speak2" value="speak" /></center>
							</td>
	        			</tr>
	        			<tr>
							<td><input type="text" name="language3" value="" style="height: 23px;" /></td>
							<td>
								<select name="proficiency3">
									 <option value="">Select</option>
									 <option value="Expert">Expert</option>
									 <option value="Beginner">Beginner</option>
									 <option value="Proficient">Proficient</option>
								</select>
							</td>
							<td>
								<center><input type="checkbox" name="read3" value="read" /></center>
							</td>
							<td>
								<center><input type="checkbox" name="write3" value="write" /></center>
							</td>
							<td>
								<center><input type="checkbox" name="speak3" value="speak" /></center>
							</td>
	        			</tr>
	        			<tr>
							<td><input type="hidden" name="uid" value="" /></td>
						</tr>
	        		</table>
	 				 <table style="margin-left: 200px;">
	 				 	
	 				 	
	 				 </table>
	        	<?php /*	<table style="margin-left: 100px; margin-top: 10px;">
	        			<tr>
	        			 	<td>Upload Photo</td>
	        			 	<td><input type="file" name="photo" value="" /></td>
	        			</tr>
	        		</table> */ ?>
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