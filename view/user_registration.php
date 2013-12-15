<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Job Portal</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
	<body>
		<div class="wrapper">
			<!--Header start-->
			<?php include(TEMPLATE.'header.php');?> 
			
			<!--Search and Start Menubar-->
			<?php include(TEMPLATE.'menubar.php');?>
	   
			<div class="content1">
				<form name="userdetail" method="post" action="" class="form" enctype="multipart/form-data">
					<center><h1>Job Seeker Registration</h1></center>
					<div class="content_register_left">
						<div class="content_register_left_title">
							<h2>User Details</h2>
						</div>
						<table style="margin-top: 50px;" cellspacing="10px;">
							<tr>
								<td>Email</td>
								<td><input type="text" name="email" value="" /></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password" value="" /></td>
							</tr>
							<tr>
								<td>Confirm Password</td>
								<td><input type="password" name="cnfpassword" value="" /></td>
							</tr>
						</table>
					</div>

					<div class="content_register_left">
					
						<div class="content_register_left_title">
							<h2>Resume Details</h2>
						</div>
						<table style="margin-top: 50px;" cellspacing="10px;">
							<tr>
								<td>Resume Title</td>
								<td>
									<input type="text" name="resume_title" value="" />
								</td>
							</tr>
							<tr>
								<td>Upload Resume</td>
								<td>
									<input type="file" name="file" value="" />
								</td>
							</tr>
					
						</table>
					</div> 
					
					<div class="content_register_left">
 						<br><br><br>       	 
						<div class="content_register_left_title">
						<h2>Professional Details</h2>
						</div>
						<table style="margin-top: 50px;" cellspacing="10px;">
							<tr>
								<td>JobType</td>
								<td>
									 <select name="jobtype">
										 <option value="">Select</option>
										 <option value="Permanent">Permanent</option>
										 <option value="Temporary">Temporary</option>
										 <option value="Full Time">Full Time</option>
										 <option value="Part Time">Part Time</option>
									 </select>
								</td>
							</tr>
							<tr>
								<td>Experience</td>
								<td>
									<select name="experience">
										<option value="">Select</option>
										<option value="Fresher">Fresher</option>
										<option value="6_Month">6 Month</option>
										<?php for($lp = 1;$lp <= 30;$lp++){
											echo "<option value=".$lp."_year>".$lp." Year</option>";
										}?> 
										<option value="30+_year">30+ Year</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Industry</td>
								<td>
									 <select name="industries">
								 		<option value="">Select</option>
										 <?php while($row = mysql_fetch_array($viewdata3)){?>
										<option value="<?php echo $row['industry_id'];?>"><?php echo $row['industry'];?></option>
										 <?php }?>
									 </select>
								</td>
							</tr>
							<tr>
								<td>Function</td>
								<td>
									 <select name="function">
										 <option value="">Select</option>
										 <?php while($row=mysql_fetch_array($viewdata4)) {?>
										<option value="<?php echo $row['function_id'];?>"><?php echo $row['function'];?></option>
										 <?php }?>
							 	 
									 </select>
								</td>
							</tr>
							<tr>
								<td>Key Skill</td>
								<td><input type="text" name="key_skill" value="" /></td>
							</tr>
							 <tr>
								 <td>Notice Period</td>
								 <td>
									<select name="notice_period">
									   <option value="">Select</option>
									   <option value="1 Week">1 Week</option>
									   <option value="1 Month">1 Month</option>
									   <option value="2 Month">2 Month</option>
									   <option value="3 Month">3 Month</option>
									   <option value="6 Month">6 Month</option>
						  			</select>	
								 </td>
							 </tr>
							 <tr>
							 	<td><input type="hidden" name="uid" value="uid" /></td>
							 </tr>
						</table>
				   	</div> 

	       	 <div class="content_register_left" style="margin-top: -272px;">
	       		<div class="content_register_left_title">
	       			<h2>Contact Details</h2>
	       		</div>
					<table style="margin-top: 50px;" cellspacing="10px;">
						<tr>
							<td>Full Name</td>
							<td><input type="text" name="fullname" value="" /></td>
						</tr>
						<tr>
							<td>Mobile</td>
							<td><input type="text" name="mobile" value="" /></td>
						</tr>
						<tr>
							<td>Landline</td>
							<td><input type="text" name="landline" value="" /></td>
						</tr>
						<tr>
							<td>Country</td>
							<td>
								<select name="country">
									<option value="">Select</option>
									<?php while($row=mysql_fetch_array($viewdata5)){?>
										<option value="<?php echo $row['country_id'];?>"><?php echo $row['country_name'];?></option>
									<?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Location</td>
							<td>
								<select name="location">
									<option value="">Select</option>
									<?php while($row=mysql_fetch_array($viewdata6)) {?>
										<option value="<?php echo $row['country_id'];?>"><?php echo $row['location_name'];?></option>
									<?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Address</td>
							<td><textarea name="address" cols="20" rows="3"></textarea></td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td><input type="text" name="pincode" value="" /></td>
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
	<!--Start Footer-->
	<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>