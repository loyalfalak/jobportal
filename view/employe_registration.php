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
		  	 
		<!--Start Menubar-->	 
	    <?php include(TEMPLATE.'menubar.php');?>
		
	    <div class="content1">
		  	<form name="userdetail" method="post" action="" class="form" enctype="multipart/form-data">
		       <center><h1>Employer Registration</h1></center>
		       <div class="content_register_left">
		       		<div class="content_register_left_title">
		       			<h1>General Details</h1>
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
						<tr>
							<td>Contact Person</td>
							<td><input type="text" name="contact_person" value="" /></td>
						</tr>
						<tr>
							<td>Designation</td>
							<td><input type="text" name="designation" value="" /></td>
						</tr>
						<tr>
							<td>Mobile</td>
							<td><input type="text" name="mobile" value="" /></td>
						</tr>
					</table>
		       </div>
		    <div class="content_register_left">
		     	<div class="content_register_left_title">
		   			<h1>Company Details</h1>
		       	</div>
				<table style="margin-top: 50px;" cellspacing="10px;">
					<tr>
						<td>Company Type</td>
						<td>
							<select name="company_type">
								<option value="">Select</option>
								<option value="Placement Consultant">Placement Consultant</option>
								<option value="Corporate">Corporate</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Company Name</td>
						<td>
							<input type="text" name="company_name" value="" />
						</td>
					</tr>
					<tr>
						<td>Industry</td>
						<td>
							 <select name="industry">
							 	 <option value="">Select</option>
							 	 <?php while($row=mysql_fetch_array($viewdata3)) {?>
							 	 		<option value="<?php echo $row['industry_id'];?>"><?php echo $row['industry'];?></option>
							 	 <?php }?>
							 </select>
						</td>
					</tr>
					<tr>
						<td>Landline</td>
						<td>
							<input type="text" name="landline" value="" />
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
								<?php while($row = mysql_fetch_array($viewlocation)){?>
								<option value="<?php echo $row['location_id'];?>"><?php echo $row['location_name'];?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>
							<textarea name="address" cols="20" rows="5"></textarea>
						</td>
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