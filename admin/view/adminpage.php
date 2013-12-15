<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"/>
    <title>Admin Job Portal</title>
    <link rel="stylesheet" type="text/css" href="style/adminstyle.css"/>
    <script type="text/javascript" src="../script/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head>
	<body>
		<!--Start Admin Header-->    	
		<?php include(ADDTEMPLATE.'admin_header.php');?>
		
		<!--Start Admin Menu-->
		<?php include(ADDTEMPLATE.'admin_menu.php');?>
		
		<div class="login_container">
			<br>
				<center><h3 class="heading">Adminpage</h3></center>
			<br>
			<form method="post" action="" style="height: 555px; width: 900px">
				<table width="800px" height="200px" style="margin-left:400px;">
					<?php while ($row = mysql_fetch_array($viewdata)) { ?>
					<tr>	
						<td>
				   			<input type="text" name="pagename" style="height: 30px;width: 200px;" value="<?php echo $row['pagename'];?>" />
				  			<textarea name="pagecontent" id='pagecontent'> <?php echo $row['pagecontent'];?></textarea>
						</td>
						<td>
							<input type="hidden" name="upid" value="<?php echo $row['pageid'];?>" />
						</td>
					</tr>
					<?php }?>
					<tr>
						<td><input type="submit" name="submit" value="Update" class="btn"/></td>
					</tr>
				</table>
			</form>
					<script type="text/javascript" >
						CKEDITOR.replace('pagecontent');
					</script>
					<?php while($row1 = mysql_fetch_array($viewimage)){?>
			<form method="post" enctype="multipart/form-data" action="">	
				<table width="400px" height="100px" style="margin-left: 400px">
				    <tr>
					   <td>
					   		<img src="images/<?php echo $row1['pageimage'];?>" height = "100px" width = "100px"/>
					   	</td>
					   <td>
					   		<input type="file" name="photo" />
					   	</td>
						<td>
				   			<input type="submit" name="update" value="Update"/>
						</td>
				   		<td>
							<input type="hidden" name="upid" value="<?php echo $row['pageid'];?>" />
						</td>
					</tr>
				</table>
			</form>	
		   			<?php }?>	
		</div>
			<!--Start Admin Footer-->
			<?php include(ADDTEMPLATE.'admin_footer.php');?>
			<div class="clr"></div>
    </body>
</html>