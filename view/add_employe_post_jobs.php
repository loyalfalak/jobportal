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
	  	 			<h2>Add Post Jobs</h2>
	 			</div>
				<form name="post_jobs" method="post" action="" style="form">	
					<table border="0px;" style="margin-top: 30px;" cellspacing="5px;">
						<tr>
							<td>Title</td>
							<td><input type="text" name="title" value="" /></td>
						</tr>
						<tr>
							<td>Industry</td>
							<td>
								<select name="industry">
										<option value="">Select</option>
									 <?php while($row = mysql_fetch_array($viewdata3)){?>
										<option value="<?php echo $row['industry_id'];?>"><?php echo $row['industry'];?></option>
									 <?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Functional Area</td>
							<td>
								<select name="functional_area">
										<option value="">Select</option>
									<?php while($row=mysql_fetch_array($viewdata4)){?>
										<option value="<?php echo $row['function_id'];?>"><?php echo $row['function'];?></option>
									<?php }?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Experience</td>
							<td>
								<select name="experience1" style="width: 90px;">
									<option value="">Select</option>
									<option value="Fresher">Fresher</option>
										<?php for($lp = 1;$lp <= 30;$lp++){
											echo "<option value=".$lp."Years>".$lp." Years</option>";
										}?> 
								</select>
								<select name="experience2" style="width: 90px;">
									<option value="">Select</option>
										<?php for($lp = 1;$lp <= 30;$lp++){
											echo "<option value=".$lp."Years>".$lp." Years</option>";
										}?>
									<option value="30+Years">30+ Years</option>
							  	</select>
							 </td>
						</tr>
						<tr>
							<td>Employees Required</td>
							<td><input type="text" name="emp_require" value="" /></td>
						</tr>
						<tr>
							<td>Jobs Expiry</td>
							<td>
								<select name="jobs_expiry">
									<option value="">Select</option>
									<option value="1 week">1 week</option>
									<option value="2 weeks">2 weeks</option>
									<option value="1 month">1 month</option>
									<option value="2 months">2 months</option>
									<option value="3 months">3 months</option>
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
									<option value="Both">Both</option>
								</select>
							</td>
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
							<td>Zipcode</td>
							<td><input type="text" name="zipcode" value="" /></td>
						</tr>
						<tr>  
							<td>Job Type</td>
							<td>
								<select name="job_type">
									<option value="">Select</option>
									<option value="Permanent">Permanent</option>
									<option value="Temporary">Temporary</option>
									<option value="Full Time">Full Time</option>
									<option value="Part Time">Part Time</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Salary</td>
							<td>
								<select name="lacs" style="width: 90px;">
									<option value="">Lacs</option>
									<?php for($cal = 1;$cal <= 50;$cal++){
											echo "<option value=".$cal."Million>".$cal."</option>";
										}?>
									<option value="50+">50+</option>
								</select>
								<select name="thosounds" style="width: 90px;">
								   <option value="">Thosounds</option>
									<option value="0">0</option>
									<option value="5Thosounds">5</option>
									<option value="10Thosounds">10</option>
									<option value="15Thosounds">15</option>
									<option value="20Thosounds">20</option>
									<option value="25Thosounds">25</option>
									<option value="30Thosounds">30</option>
									<option value="35Thosounds">35</option>
									<option value="40Thosounds">40</option>
									<option value="45Thosounds">45</option>
									<option value="50Thosounds">50</option>
									<option value="55Thosounds">55</option>
									<option value="60Thosounds">60</option>
									<option value="65Thosounds">65</option>
									<option value="70Thosounds">70</option>
									<option value="75Thosounds">75</option>
				                    <option value="80Thosounds">80</option>
									<option value="85Thosounds">85</option>
									<option value="90Thosounds">90</option>
									<option value="95Thosounds">95</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Keywords</td>
							<td><input type="text" name="keywords" value="" /></td>
						</tr>
						<tr>
							<td>Job Description</td>
							<td><textarea name="job_description" cols="20" rows="5"></textarea></td>
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