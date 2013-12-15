<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"/>
    <title>Admin Job Portal</title>
    <link rel="stylesheet" type="text/css" href="style/adminstyle.css"/>
</head>
    <body>
    	<!--Start Admin Header-->
    	<?php include(ADDTEMPLATE.'admin_header.php');?>
		
		<!--Start Admin Menu-->
		<?php include(ADDTEMPLATE.'admin_menu.php');?>
		
			<div class="login_container">
				<center>
					<form name="category" method="post">
						<center><h3><b>View Employer Registration Profile</b></h3></center>
						<table align="center" border="1" style="margin-top: 10px; width: 800px;">
							<tr>
								<th colspan="2">Title</th>
								<th>Action</th>
							</tr>
							<?php while($row = mysql_fetch_array($viewdata)){?>		
							<tr>
								<td width="350px;">
									<ul>
										<li><b>Email:</b><?php echo $row['email'];?></li>
										<li><b>Password:</b><?php echo $row['password'];?></li>
										<li><b>Full Name:</b><?php echo $row['full_name'];?></li>
										<li><b>Mobile:</b><?php echo $row['mobile'];?></li>
										<li><b>Landline:</b><?php echo $row['landline'];?></li>
										<li><b>Location:</b><?php echo $row['location'];?></li>
										<li><b>Address:</b><?php echo $row['address'];?></li>
									</ul>
								</td>
								<td width="350px;">
									<ul>
										<li><b>Pincode:</b><?php echo $row['pincode'];?></li>
										<li><b>Date of Birth:</b><?php echo $row['date_of_birth'];?></li>
										<li><b>Gender:</b><?php echo $row['gender'];?></li>
										<li><b>Marital Status:</b><?php echo $row['marital_status'];?></li>
										<li><b>Work Permit in Country:</b><?php echo $objcountry->get_country_name($row['country']);?></li>
										<li><b>Category:</b><?php echo $row['category'];?></li>
										<li><b>Physically Challenged:</b><?php echo $row['physically_challenged'];?></li>
										<li><b>Description:</b><?php echo $row['description'];?></li>
									</ul>
								</td>
								<td width="100px;">
									<center>
										<a href="<?php echo $row['uid'];?>">Delete</a>
									</center>	
								</td>
							</tr>
								<?php }?>
						</table>  
					</form>
				</center> 
			</div>
			
		<!--Start Admin Footer-->
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>