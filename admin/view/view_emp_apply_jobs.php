<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"/>
    <title>Admin Job Portal</title>
    <link rel="stylesheet" type="text/css" href="style/adminstyle.css"/>
</head>
    <body>
    	<!--Start of Admin Header-->
    	<?php include(ADDTEMPLATE.'admin_header.php');?>
		
		<!--Start of Admin Menu-->
		<?php include(ADDTEMPLATE.'admin_menu.php');?>
		
			<div class="login_container">
				<center>
				<form name="preffered_job" method="post" action="" enctype="multipart/form-data">
					<table border="1px;" style="margin-top: 10px;" width="900px;" class="tb">
						<tr>
							<th style="height: 30px;width: 50px;">Id</th>
							<th style="height: 30px;width: 600px;" colspan="2">Title</th>
							<th style="height: 30px;width: 200px;">Applications</th>
						</tr>
						<?php while($row = mysql_fetch_array($viewdata)){?>
						<tr>
							<td width="30px;">
								<center>
									<a href="<?php //echo $row['uid'];?>"><input type="checkbox" name="ckbox" value="" /></a>
								</center>
							</td>
							<td width="300px;">	
								<ul>
									<li><b>Name:</b><?php echo $objapply_now->get_name($row['uid']);?></li>
									<li><b>Experience:</b><?php echo $objapply_now->get_experience($row['uid']);?></li>
									<li><b>Course Name:</b><?php echo $objcourse_name->get_course_name($row['uid']);?></li>
									<li><b>Study Duration:</b><?php echo $objapply_now->get_study_duration($row['uid']);?>&nbsp;Year</li>
									<li><b>Specialization:</b><?php echo $objspecilization->get_specialization_name($row['uid']);?></li>
									<li><b>University:</b><?php echo $objuniversity_institute->get_university_name($row['uid']);?></li>
									<li><b>Email:</b><?php echo $objapply_now->get_email($row['uid']);?></li>
									<li><b>Password:</b><?php echo $objapply_now->get_password($row['uid']);?></li>
									<li><b>Phone:</b><?php echo $objapply_now->get_phone($row['uid']);?></li>
									<li><b>Mobile:</b><?php echo $objapply_now->get_mobile($row['uid']);?></li>
								</ul>
							</td>
							<td width="300px;">	
								<ul>
									<li><b>Country:</b><?php echo $objCountry->get_country_name_from_user($row['uid']);?></li>
									<li><b>Location:</b><?php echo $objlocation->get_location_name_from_user($row['uid']);?></li>
									<li><b>Address:</b><?php echo $objapply_now->get_address($row['uid']);?></li>
									<li><b>Pincode:</b><?php echo $objapply_now->get_pincode($row['uid']);?></li>
									<li><b>Gender:</b><?php echo $objapply_now->get_gender($row['uid']);?></li>
									<li><b>Date of Birth:</b><?php echo $objapply_now->get_date_of_birth($row['uid']);?></li>
									<li><b>Current Company Name:</b><?php echo $objapply_now->get_current_company_name($row['uid']);?></li>
									<li><b>Current Designation:</b><?php echo $objapply_now->get_current_designation($row['uid']);?></li>
									<li><b>Current Annual Salary:</b><?php echo $objapply_now->get_current_annual_salary($row['uid']);?>&nbsp;Lacs</li>
									<li><b>Job Profile:</b><?php echo $objapply_now->get_job_profile($row['uid']);?></li>
									<li><b>Status:</b><?php if($row['status']==0){ echo "Under Process"; }
															if($row['status']==1){ echo "Call For Interview"; }
															if($row['status']==2){ echo "Interviewed & Under Review"; }
															if($row['status']==3){ echo "Interviewed & Rejected"; }
															if($row['status']==4){ echo "Reject"; }
														?></li>
								</ul>	
							</td>
							<td width="200px;">
								<center><a style="text-decoration: none;" href="under_process.php?id=<?php echo $row['aid'];?>">Under Process</a></center>
								<center><a style="text-decoration: none;" href="update_status.php?id=<?php echo $row['aid'];?>">Call For Interview</a></center>
								<center><a style="text-decoration: none;" href="interviewed_and_under_review.php?id=<?php echo $row['aid'];?>">Interviewed & Under Review</a></center>
								<center><a style="text-decoration: none;" href="interviewed_and_under_rejected.php?id=<?php echo $row['aid'];?>">Interviewed & Rejected</a></center>
								<center><a style="text-decoration: none;" href="reject.php?id=<?php echo $row['aid'];?>">Reject</a></center>
							</td>
						</tr>
						<?php } ?>
					</table>
				</form>
				<div class="pagination" align="center">
	  				<?php
	   	 	        	$per_page = 10;
				    	$pages_query = mysql_query("SELECT count(`uid`) FROM `applications`");
		       			$pages = ceil(mysql_result($pages_query, 0) / $per_page);
							echo"Pages:";
	   	 		    	if($pages>=1){
	   	 			  		 for ($x=1; $x<=$pages; $x++){ 
	   	 			      		 echo  '<a href="?page=' .$x. '">'  .$x. '</a>';
	   	 			 		 }
	   	 				}
	   	 			?>
	   			</div>
			</center> 
		</div>
		
		<!--Start of Admin Footer-->
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>