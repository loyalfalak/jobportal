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
					<form name="change_password" action="" method="post" class="form">
						<br>
						<center><h3><b>Admin Change Password</b></h3></center>
							<table align="center" style="margin-top: 10px;" cellspacing="3px;">
								<tr>
									<td><b>New Password</b></td>
									<td><input type="password" name="new_password" value="" /></td>
								</tr>
								<tr>
									<td><b>Confirm Password</b></td>
									<td><input type="password" name="confirm_password" value="" /></td>
								</tr>
								<tr>
									<td><input type="hidden" name="id" value="" /></td>
								</tr>
								<tr>
									<td colspan="2" align="right"><input type="submit" name="update" value="Change" class="btn" /></td>
								</tr>	
							</table>
					</form>
				</center>			
			</div>
		<!--Start of Admin Footer-->
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>