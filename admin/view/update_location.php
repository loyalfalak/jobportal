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
				<center><h3 class="heading">Update Country</h3></center>
					<center>
					<?php $row=mysql_fetch_array($view); ?>
					<table>
						<tr>   
							<td>Country Name</td>
							<td>
								<select name="country_name">
									<option value="">-Select-</option>
									<?php
										if(isset($country)){
										while($_country = mysql_fetch_array($country)){
										$_b = "";
										if($_country['country_id'] == $row['country_id']){
											$_b = "SELECTED = SELECTED";
										}
										echo "<option value='" . $_country['country_id'] . "' " . $_b . ">" . $_country['country_name'] . "</option>";
										     	}
										   }
										?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Location Name</td>
							<td><input type="text" name="location_name" value="<?php echo $row['location_name'];?>" /></td>
						</tr>
						<tr> 	
							<td><input type="hidden" name="uid" value="<?php echo $row['location_id'];?>" /></td>       
							<td><input type="submit" name="submit" value="Update" class="btn" /></td>
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