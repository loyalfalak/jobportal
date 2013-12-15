<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<div class="wrapper">
 	
 		<!--Start of Header-->
		<?php include(TEMPLATE.'job_seeker_header.php');?> 
	      	 
		<!--Start Menubar-->	 
	    <?php include(TEMPLATE.'menubar.php');?>
	   
		<div class="content1">
		    	
		<!--Start Menubar-->
    	<?php include(TEMPLATE.'job_seeker_leftbar.php');?>

			<div class="jobseeker_middle">
				<div class="jobseeker_leftbar_title" style=" margin-left: 50px;">
	  	 				<h2>Add Applications</h2>
	 			</div>
				<form name="default_applications" method="post" action="" enctype="multipart/form-data">
					<table style="margin-top: 50px;" cellspacing="10px;">
						<tr>
							<td>Title</td>
							<td>
								<input type="text" name="title" value="" />
							</td>
						</tr>
						<tr>
							<td valign="top">Description</td>
							<td><textarea name="description" cols="25" rows="6"></textarea></td>
						</tr>
						<tr>
							<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btn7" /></td>
						</tr>
					</table>
				</form>
	  	 	</div>
	    </div>
		<div class="clr">
		</div>	 
	</div>
	
	<!-- Start Footer--> 
	<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>	