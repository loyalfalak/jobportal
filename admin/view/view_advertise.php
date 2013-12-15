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
			<form name="advertise" method="post" enctype="multipart/form-data">
				<center>
				<h3 class="heading">Advertise Images</h3></center>
				<center>
				<table border="1">
					<tr>
						<td><a href="add_advertise.php">Insert Images</a></td>
					</tr>
					<tr>
						<th>Advertise Image</th>
						<th></th>
						<th>Action</th>
					</tr>
					<?php while($row=mysql_fetch_array($viewimage)){?>
					<tr>
						<td><img src="../images/<?php echo $row['advertise_img_name'];?>" height = "100px" width = "200px"/></td>
						<td><input type="file" name="photo" /></td>
						<td>
							<input type="submit" name="update" value="Update"  class="btn"/>
							<a href="delete_advertise.php?id=<?php echo $row['advertise_image_id'];?>">Delete</a>
						</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $row['advertise_image_id']; ?>" />
						</td>
					</tr>
					<?php }?>
					</table>
					</center>
				</form> 
			</div>
		<!--Start Admin Menu-->
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>