<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"/>
    <title>Admin Job Portal </title>
    <link rel="stylesheet" type="text/css" href="style/adminstyle.css"/>
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head>
	<body>
    	<!--Start of Admin Header-->
    	<?php include(ADDTEMPLATE.'admin_header.php');?>
	
		<!--Start of Admin Menu-->
		<?php include(ADDTEMPLATE.'admin_menu.php');?>
		
			<div class="login_container">
				<center><h3 class="heading">Add News and Updates</h3></center>
					<form method="post" style="margin-left: 300px;">
						<table>
							<tr>
								<td><b>News Title</b></td>
								<td><input type="text" name="news_title" id="news_title" value="" style="height: 25px;width: 180px;"/></td>
							</tr>
						</table>
						<table>
							<tr>
								<td><b>Add More Description</b></td>
							</tr>
							<tr>
								<td><textarea name="news" id='news' cols="5" rows="5"></textarea></td>
							</tr>
							<tr>
								<td><input type="submit" name="submit" value="submit"  class="btn"/></td>
							</tr>
						</table>
					</form>
					<script type="text/javascript" >
						CKEDITOR.replace('news');
					</script>
			</div>
	        <div class="clr">
	        </div>
		<!--Start of Admin Footer-->
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>