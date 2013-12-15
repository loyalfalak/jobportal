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
	      	 
		<!-- Start Menubar-->	 
	    <?php include(TEMPLATE.'menubar.php');?>
	   
		   <div class="content1">
				
				<!-- Start leftbar-->
			    <?php include(TEMPLATE.'job_seeker_leftbar.php');?>
	  		     
				<div class="jobseeker_middle">
					<div class="jobseeker_leftbar_title" style=" margin-left: 100px;">
	  	 				<h2>IT Skills Details</h2>
	 				</div>
					<form name="language" method="post" class="form">
						<?php $row=mysql_fetch_array($viewdata); ?>
	        			<table align="center" cellspacing="10px" style="margin-top: 50px;">
		        			<tr>
		        				<th>Skills</th>
		        				<th>Version</th>
		        				<th>Last Used</th>
		        				<th>Experience</th>
		        			</tr>
		        			<tr>
								<td><input type="text" name="skills" value="<?php echo $row['skills']; ?>" /></td>
								<td><input type="text" name="version" style="width: 100px;" value="<?php echo $row['version']; ?>" /></td>
		        				<td>
		        					<select name="last_used" style="height: 25px;width: 100px;">
		        						<option value="">Year</option>
		        						<option value="2013">2013</option>
		        						<option value="2012">2012</option>
		        						<option value="2011">2011</option>
		        					</select>
		        				</td>
		        				<td>
		        					<select name="year" style="height: 25px;width: 100px;">
										<option value="">Select</option>
										<option value="fresher">Fresher</option>
										<option value="6_month">6 Month</option>
										<?php for($lp = 1;$lp <= 30;$lp++){
											echo "<option value=".$lp."_year>".$lp." Year</option>";
										}?> 
										<option value="30+_year">30+ Year</option>
									</select>		        				
		        					<select name="month" style="height: 25px;width: 100px;">
										<option value="">Select</option>
										<?php for($lp = 1;$lp <= 12;$lp++){
											echo "<option value=".$lp."_year>".$lp." Month</option>";
										}?> 
									</select>		        				
								</td>
		        			</tr>
		        			<tr>
								<td><input type="button" name="add more" value="Add More"  onclick="window.open('http://localhost/job_portal/update_cover_letter.php','Add Skills','height=500,width=400,left=100,top=100,resizable=yes,scrollbars=yes,status=yes');" /></td>
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
	 <!-- Start Footer--> 
	  <?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>	