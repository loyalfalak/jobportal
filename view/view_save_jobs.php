<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<script language = "JavaScript" >
		function deletejob(id){
			if(confirm("Do your really want to delete this record?")){
				window.location.href= 'delete_save_jobs.php?id='+id;
			}	
		}
	</script>
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

			<div class="jobseeker_middle" style="margin-left: 10px">
				<form name="preffered_job" method="post" action="" enctype="multipart/form-data">
					<table border="1px;" style="margin-top: 10px;" width="700px;" class="tb">
						<tr>
							<th style="height: 30px;width: 500px;"colspan="2">Title</th>
							<th style="height: 30px;width: 100px;">Action</th>
						</tr>
						<?php while($row = mysql_fetch_array($viewdata)){?>
						<tr>
							<td width="300px;">
								<ul>
									<li><b>Title:</b> <?php echo $objsave_jobs->get_title_save_jobs($row['pjid']);?></li>
									<li><b>Industry:</b> <?php echo $objindustry->get_industry_name_from_postjobs($row['pjid']);?></li>
									<li><b>Function:</b> <?php echo $objfunctionn->get_function_name_from_postjobs($row['pjid']);?></li>
									<li><b>Experience:</b> <?php echo $objsave_jobs->get_experience_save_jobs($row['pjid']);?></li>
									<li><b>Employees Required:</b> <?php echo $objsave_jobs->get_employees_required_save_jobs($row['pjid']);?></li>
									<li><b>Jobs Expiry:</b> <?php echo $objsave_jobs->get_jobs_expiry_save_jobs($row['pjid']);?></li>
								</ul>
							</td>
							<td width="200px;">	
								<ul>
									<li><b>Gender:</b>	<?php echo $objsave_jobs->get_gender_save_jobs($row['pjid']);?></li>
									<li><b>Country:</b> <?php echo $objCountry->get_country_name_from_postjobs($row['pjid']);?></li>
									<li><b>Location:</b> <?php echo $objlocation->get_location_name_from_postjobs($row['pjid']);?></li>
									<li><b>Zipcode:</b> <?php echo $objsave_jobs->get_zipcode_save_jobs($row['pjid']);?></li>
									<li><b>Job Type:</b> <?php echo $objsave_jobs->get_job_type_save_jobs($row['pjid']);?></li>
									<li><b>Salary:</b> <?php echo $objsave_jobs->get_salary_save_jobs($row['pjid']);?></li>
								</ul>	
							</td>
							<td>
								<center>
									<a href="view_save_jobs_more_details.php?id=<?php echo $row['pjid'];?>" style="text-decoration: none">View Details</a>
								</center>
								<br>
								<center>
									<img src="images/Delete.png" style="cursor: pointer;" onclick="deletejob(<?php echo $row['pjid'];?>);" height="30px;" width="30px;" />
								</center>
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