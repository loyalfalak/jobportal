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
				<form action="" method="post" enctype="multipart/form-data">
       			<center><h3 class="heading">Update Health Care Images</h3></center>
				<center>
				<?php $row = mysql_fetch_array($view);?>
					<table>
						<tr>
							<td>Image</td>
							<td><img src="../images/<?php echo $row['image'];?>" height = "50px" width = "100px"/>
								<input type="file" name="photo"  /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Upload" class="btn" /></td>
						</tr>
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