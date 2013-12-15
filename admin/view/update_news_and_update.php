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
			<center><h3 class="heading">Update News and Updates</h3></center>
			<center>
			<form method="post">
				<table style="margin-top: 5px;margin-right: 550px;">
				<?php while($row = mysql_fetch_array($viewsdata)) {?>
					<tr>
						<td><b>News Title</b></td>
						<td><input type="text" name="news_title" id="news_title" style="height: 25px;width: 180px;" value="<?php echo $row['title'];?>"/></td>
					</tr>
				</table>
				<table>
					<tr>
						<td><b>Add More Description</b></td>
					</tr>
					<tr>
						<td><textarea name="news" id='news' cols="5" rows="5"><?php echo $row['description'];?></textarea></td>
					</tr>
				</table>
				<?php } ?>
				<table style="margin-right: 750px;">
					<tr>
						<td><input type="submit" name="update" value="update"  class="btn"/></td>
					</tr>
				</table>
			</form>
			</center>
		</div>
		<script type="text/javascript" >
						CKEDITOR.replace('news');
		</script>
		
		<!--Start Admin Footer-->
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>