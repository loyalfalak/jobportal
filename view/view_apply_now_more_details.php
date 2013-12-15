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

			<div class="jobseeker_middle" style="margin-left: 10px;">
				<form name="preffered_job" method="post" action="" enctype="multipart/form-data">
					<table border="1px;" style="margin-top: 10px;" width="700px;" class="tb">
						<tr>
							<th style="height: 30px;width: 500px;"  colspan="2">Title</th>
							<th style="height: 30px;width: 100px;" colspan="2">Status</th>
						</tr>
						<?php while($row = mysql_fetch_array($viewdata)){?>
						<tr>
							<td width="300px;">
								<ul>
									<li><b>Title:</b> <?php echo $objapply_now->get_title_apply_now($row['pjid']);?></li>
									<li><b>Industry:</b> <?php echo $objindustry->get_industry_name_from_postjobs($row['pjid']);?></li>
									<li><b>Function:</b> <?php echo $objfunctionn->get_function_name_from_postjobs($row['pjid']);?></li>
									<li><b>Experience:</b> <?php echo $objapply_now->get_experience_apply_now($row['pjid']);?></li>
									<li><b>Employees Required:</b> <?php echo $objapply_now->get_employees_required_apply_now($row['pjid']);?></li>
									<li><b>Jobs Expiry:</b> <?php echo $objapply_now->get_jobs_expiry_apply_now($row['pjid']);?></li>
								</ul>
							</td>
							<td width="200px;">	
								<ul>
									<li><b>Gender:</b> <?php echo $objapply_now->get_gender_apply_now($row['pjid']);?></li>
									<li><b>Country:</b> <?php echo $objCountry->get_country_name_from_postjobs($row['pjid']);?></li>
									<li><b>Location:</b> <?php echo $objlocation->get_location_name_from_postjobs($row['pjid']);?></li>
									<li><b>Zipcode:</b> <?php echo $objapply_now->get_zipcode_apply_now($row['pjid']);?></li>
									<li><b>Job Type:</b> <?php echo $objapply_now->get_job_type_apply_now($row['pjid']);?></li>
									<li><b>Salary:</b> <?php echo $objapply_now->get_salary_apply_now($row['pjid']);?></li>
								</ul>	
							</td>
							<td width="100px;" height="100px;">
								<center>
										<?php 	if($row['status']==0){ echo "Under Process"; }
												if($row['status']==1){ echo "Call For Interview"; }
												if($row['status']==2){ echo "Interviewed & Under Review"; }
												if($row['status']==3){ echo "Interviewed & Rejected"; }
												if($row['status']==4){ echo "Reject"; }
										 ?>
								</center>
							</td>
						</tr>
						<tr>
							<td colspan="3" width="500px;">
								<ul>
									<li><b>Job Description:</b> <?php echo $objapply_now->get_description_apply_now($row['pjid']);?></li>
								</ul>
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