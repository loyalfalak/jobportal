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
				<form name="category" method="post" style="height: auto; width: 900px;">
				<center><h3><b>View Industry</b></h3></center>
				<a href="add_industry.php">Add Industry</a>
					<table align="center" border="1" style="margin-top: 10px;">
						<tr>
							<th>Industry</th>
							<th>Action</th>
						</tr>
					 <?php while($row = mysql_fetch_array($viewdata)){?>		
					<tr>
						<td><?php echo $row['industry'];?></td>
						<td><a href="update_industry.php?uid=<?php echo $row['industry_id'];?>">Update</a>
							<a href="delete_industry.php?did=<?php echo $row['industry_id'];?>">Delete</a>
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