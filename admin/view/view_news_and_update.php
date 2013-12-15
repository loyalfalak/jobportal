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
			<center><h3 class="heading">Views News & Update Details</h3></center>
				<a href="add_news_and_update.php">Insert News Update</a>
			<table border="1" width="100%">
				<tr>
					<th>News Title</th>
					<th>Action</th>
				</tr>
				<?php while($row = mysql_fetch_array($viewsdata)){?>
				<tr>
					<td><?php echo $row['title'];?></td>
					<td>
						<center>
						<a href="update_news_and_update.php?id=<?php echo $row['nw_id'];?>">Update</a>&nbsp;||&nbsp;
						<a href="delete_news_and_update.php?id=<?php echo $row['nw_id'];?>">Delete</a>&nbsp;||&nbsp;
						<?php if($row['featured'] == 0){ ?>
						<a href="makeFectured.php?createId=<?php echo $row['nw_id']; ?>"><input type="button" value="Make Featured"/> </a>
						<?php }else{ ?>
						<a href="makeFectured.php?removeId=<?php echo $row['nw_id']; ?>"><input type="button" value="Make Unfeatured"/></a>	
						<?php }?> 
						</center>		
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
		
		<!--Start Admin Footer-->
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>