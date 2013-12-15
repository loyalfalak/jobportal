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
			<form action="" method="post" enctype="multipart/form-data">
				<center><h3 class="heading">View Country</h3></center>
				<center>
					<tr><a href="add_country.php">Add Country</a></tr>
					<table border="1px">
						<tr>   
							<th>Country Name</th>
							<th>Action</th>
						</tr>
							<?php while($row=mysql_fetch_array($view)){?>
						<tr> 	
							<td><?php echo $row['country_name']; ?></td>       
							<td>
								<a href="update_country.php?uid=<?php echo $row['country_id']; ?>">Update</a>
								<a href="delete_country.php?did=<?php echo $row['country_id']; ?>">Delete</a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</center>
			</form>
			</center> 
		</div>

		<!--Start of Admin Footer-->
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>