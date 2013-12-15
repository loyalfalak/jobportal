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
					 	<center><h3 class="heading">Add Specilization</h3></center>
						<center>
							<table>
								<tr>
									<td>Specilization</td>		   	    	
									<td><input type="text" name="specilization" value="" /></td>
								</tr>
								<tr>       
									<td><input type="submit" name="submit" value="submit" class="btn" /></td>
								</tr>
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