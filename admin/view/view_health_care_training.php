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
				<h3 class="heading">View Medical Service</h3>
			</center>
			<center>
				<form name="advertise" method="post" enctype="multipart/form-data">
					<center>
					<table border="1">
						<tr>
							<th>Title</th>
							<th>Sub Title</th>
							<th>Image</th>
							<th>Image Action</th>
							<th>Title Action</th>
						</tr>
					<?php while($row=mysql_fetch_array($viewimage)){?>
						<tr>
							<td><?php echo $row['title'];?></td>
							<td><?php echo $row['sub_title'];?></td>
							<td><img src="../images/<?php echo $row['image'];?>" height = "100px" width = "200px"/></td>
							<td><center><a href="update_health_care_training_images.php?uid=<?php echo $row['health_id']; ?>">Update</a></center></td>
							<td>
								<center><a href="update_health_care_training.php?uid=<?php echo $row['health_id']; ?>">Update</a></center>
							</td>
						</tr>
					<?php }?>
					</table>
				</center>
			</form>
			</center> 
		</div>
		<!--Start Admin Footer-->
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>