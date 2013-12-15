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
				<form name="preffered_job" method="post" action="" enctype="multipart/form-data">
				    	
					<table border="1px;" style="margin-top: 10px;" width="600px;" class="tb">
						<tr>
							<th style="height: 30px;width: 500px;"colspan="2">Title</th>
							<th style="height: 30px;width: 100px;">Action</th>
						</tr>
						<?php while($row = mysql_fetch_array($viewdata)){?>
						<tr>
							<td>
								<ul>
									<li><b>Title:</b> <?php echo $row['title'];?></li>
									<li><b>Industry:</b> <?php echo $objindustry->get_industry($row['industry']);?></li>
									<li><b>Function:</b> <?php echo $objfunctionn->get_function($row['function']);?></li>
									<li><b>Experience:</b> <?php echo $row['experience'];?></li>
									<li><b>Employees Required:</b> <?php echo $row['emp_require'];?></li>
									<li><b>Jobs Expiry:</b> <?php echo $row['jobexpiry'];?></li>
								</ul>
							</td>
							<td>	
								<ul>
									<li><b>Gender:</b> <?php echo $row['gender'];?></li>
									<li><b>Country:</b> <?php echo $objCountry->get_country_name($row['country']);?></li>
									<li><b>Location:</b> <?php echo $objlocation->get_location_name($row['location']);?></li>
									<li><b>Zipcode:</b> <?php echo $row['zipcode'];?></li>
									<li><b>Job Type:</b> <?php echo $row['jobtype'];?></li>
									<li><b>Salary:</b> <?php echo $row['salary'];?></li>
								</ul>	
							</td>
							<td>
								<center>
									<a href="view_post_jobs_more_details.php?id=<?php echo $row['pjid'];?>" style="text-decoration: none">View Details</a>
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