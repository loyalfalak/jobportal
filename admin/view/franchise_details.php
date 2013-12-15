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
				<center><h3 class="heading">Franchise Image</h3></center>
			<br>
				<form method="post" style="height: 555px; width: 900">
					<table width="500px" height="300px;" style="margin-left: 660px;">
						<tr>
							<?php while ($row = mysql_fetch_array($viewdata)) { ?>
							<td><textarea name="franchise" id='franchise'> <?php echo $row['franchise_data'];?></textarea></td>
							<td>
							<input type="hidden" name="id" value="<?php echo $row['franchise_details_id'];?>" />
							</td>
							<?php }?>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Update"  class="btn"/></td>
						</tr>
					</table>
				</form>
				<script type="text/javascript" >
								CKEDITOR.replace('franchise');
				</script>
			<?php while($row1 = mysql_fetch_array($viewimage)){?>
	           <form method="post" enctype="multipart/form-data" action="">	
	           	   <table width="400px" height="400px" style="margin-top: -450px;margin-left: 250px;">
		                <tr>
			               <td><img src="../images/<?php echo $row1['franchise_image'];?>" height = "100px" width = "100px"/></td>
			               <td><input type="file" name="photo" /></td>
			               <td>
				           <input type="submit" name="update" value="Update"/>
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