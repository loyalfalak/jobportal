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
				 <center><h3 class="heading">View File </h3></center>
					<p>UPLOAD FILE WITH .doc , .docx , .pdf  FORMAT WITH LESS THAN 1MB SIZE AND FILE NAME SHOULD NOT HAVE ANY SPACE</p> 
					<center>
						<table border="1px">
							<tr>
								<th>File</th>
								<th>Action</th>
							</tr>
						  <?php while($row=mysql_fetch_array($result)){?> 
							<tr>		
								<td><?php echo $row['filename']; ?></td>
								<td>
									<a href="update_file.php?uid=<?php echo $row['file_id']; ?>">Update</a>
								</td>					 	 
							</tr>
						 <?php } ?>
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