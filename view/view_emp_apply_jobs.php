<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<script language = "JavaScript" >
		function deletejob(id){
			if(confirm("Do your really want to delete this record?")){
				window.location.href= 'delete_employe_post_jobs.php?did='+id;
			}	
		}
	</script>
</head>
<body>
	<div class="wrapper">
 	
 		<!--Start of Header-->
		<?php include(TEMPLATE.'employe_header.php');?> 
	      	 
		<!--Start Menubar-->	 
	    <?php include(TEMPLATE.'menubar.php');?>
	   
		<div class="content1">
		    	
		<!--Start leftbar-->
    	<?php include(TEMPLATE.'employe_leftbar.php');?>

			<div class="jobseeker_middle" style="margin-left: 10px;">
				<form name="preffered_job" method="post" action="" enctype="multipart/form-data">
					<table border="1px;" style="margin-top: 10px;" width="700px;" class="tb">
						<tr>
							<th style="height: 30px;width: 30px;">Id</th>
							<th style="height: 30px;width: 500px;" colspan="2">Title</th>
							<th style="height: 30px;width: 170px;">Applications</th>
						</tr>
						<?php while($row = mysql_fetch_array($viewdata)){?>
						<tr>
							<td width="30px;">
								<center>
									<a href="<?php //echo $row['uid'];?>"><input type="checkbox" name="ckbox" value="" /></a>
								</center>
							</td>
							<td width="250px;">	
								<ul>
									<li><b>Name:</b><?php echo $objapply_now->get_name($row['uid']);?></li>
									<li><b>Experience:</b><?php echo $objapply_now->get_experience($row['uid']);?></li>
									<li><b>Course Name:</b><?php echo $objcourse_name->get_course_name($row['uid']);?></li>
									<li><b>Study Duration:</b><?php echo $objapply_now->get_study_duration($row['uid']);?>&nbsp;Year</li>
									<li><b>Specialization:</b><?php echo $objspecilization->get_specialization_name($row['uid']);?></li>
									<li><b>University:</b><?php echo $objuniversity_institute->get_university_name($row['uid']);?></li>
								</ul>
							</td>
							<td width="250px;">	
								<ul>
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
							<td width="170px;">
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
	  	 	</div>
	    </div>
		<div class="clr">
		</div>	 
	</div>
	
	<!-- Start Footer--> 
	<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>	