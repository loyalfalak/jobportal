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
		    	
		<!--Start leftbar-->
    	<?php include(TEMPLATE.'job_seeker_leftbar.php');?>

			<div class="jobseeker_middle">
	  	 		<a href="add_default_applications.php" style="text-decoration: none;"><input type="button" name="add_jobs" value="Add Applications" style="margin-left: 250px;margin-top: 10px;cursor: pointer;" /></a>
				<form name="default_applications" method="post" action="" enctype="multipart/form-data">
					<table border="1px;" style="margin-top: 10px;" width="600px;" class="tb">
						<tr>
							<th style="height: 30px;width: 100px;">Title</th>
							<th style="height: 30px;width: 400px;">Description:</th>
							<th style="height: 30px;width: 50px;">Edit</th>
							<th style="height: 30px;width: 50px;">Delete</th>
						</tr>
						<?php while($row = mysql_fetch_array($viewdata)){?>
						<tr>
							<td><?php echo $row['title'];?></td>
							<td><?php echo $row['description'];?></td>
							<td><a href="update_default_applications.php?id=<?php echo $row['dapp_id'];?>"><center><img src="images/Edit.png" height="30px;" width="30px;"/></center></a></td>
							<td><a href="delete_default_applications.php?did=<?php echo $row['dapp_id'];?>"><center><img src="images/Delete.png" height="30px;" width="30px;" /></center></a></td>
						</tr>
						<?php } ?>
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