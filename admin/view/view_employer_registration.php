<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"/>
    <title>Admin Job Portal</title>
    <link rel="stylesheet" type="text/css" href="style/adminstyle.css"/>
</head>
    <body>
    	<!--Start of Admin Header-->
    	<?php include(ADDTEMPLATE.'admin_header.php');?>
		
		<!--Start of Admin Menu-->
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
										<li><b>Contact Person:</b><?php echo $row['contact_person'];?></li>
										<li><b>Degination:</b><?php echo $row['designation'];?></li>
										<li><b>Mobile:</b><?php echo $row['mobile'];?></li>
									</ul>
								</td>
								<td width="350px;">
									<ul>
										<li><b>Company Type:</b><?php echo $row['company_type'];?></li>
										<li><b>Company Name:</b><?php echo $row['company_name'];?></li>
										<li><b>Industry:</b><?php echo $objindustry->get_industry($row['industry']);?></li>
										<li><b>Landline:</b><?php echo $row['landline'];?></li>
										<li><b>Location:</b><?php echo $objlocation->get_location_name($row['location']);?></li>
										<li><b>Address:</b><?php echo $row['address'];?></li>
									</ul>
								</td>
								<td width="100px;">
									<center>
										<a href="<?php echo $row['company_id'];?>">Delete</a>
									</center>	
								</td>
							</tr>
								<?php }?>
						</table>  
					</form>
				</center> 
			</div>
		
		<!--Start of Admin Footer-->
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>