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
					<center><h3 class="heading">Update Medical Service Title</h3></center>
					<center>
				<?php $row = mysql_fetch_array($view); ?>
					<table  border="1px">
						<tr>
							<td>Title</td>
							<td colspan="2"><input style="height: 25px;width: 250px;" type="text" name="title" value="<?php echo $row['title']; ?>" /></td>	 
						</tr>	        
						<tr>
							<td colspan="3" align="center"><input type="submit" name="submit" value="Update" class="btn" /></td>
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