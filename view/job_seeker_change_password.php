<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<div class="wrapper">
	
			<!--Start Job_seeker Header-->
			<?php include(TEMPLATE.'job_seeker_header.php');?> 
		      	 
	 		<!-- Start Menubar-->	 
		    <?php include(TEMPLATE.'menubar.php');?>
	
		 <div class="content1">
		    	
			<!--Start Job_seeker Leftbar-->
		     <?php include(TEMPLATE.'job_seeker_leftbar.php');?>
		  		    
	         	<form name="emp" method="post" action="" class="form" enctype="multipart/form-data">
		       		<div class="content_register_left">
		       			<div class="jobseeker_leftbar_title" style=" margin-left: 50px;width: 320px;">
	  	 					<h2>Job Seeker Change Password</h2>
	 					</div>
	 					<br>
	 					<div class="msg"> 
	 					<?php
	 						if(isset($_REQUEST['updatemsg']) && $_REQUEST['updatemsg'] != ''){
	 							echo "Your Password is Successfully Changed.";
	 						}
	 					?>
	 					</div>
		       			<table style="margin-top: 0px;" cellspacing="10px;">
							<tr>
								<td>New Password</td>
								<td><input type="password" name="new_password" value=""></td>
							</tr>
							<tr>
								<td>Confirm Password</td>
								<td><input type="password" name="cnf_password" value="" /></td>
							</tr>
						</table>
						<div class="sub" style="margin-left: -320px;">
		               		<input type="submit" name="submit" value="Submit" class="btnn" />
	             		</div>
					</div>		       		 
		    </form>
	   	</div>
			<div class="clr">
		 	</div>	 
	</div>
	
	<!-- Start Footer--> 
	<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>