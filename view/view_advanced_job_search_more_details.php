<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<script type="text/javascript" src="library/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="library/jquery.cycle.all.js"></script>
	<script type="text/javascript">
				$('.slider').cycle({
					fx : 'fade',
					delay : -4000
				});
	</script>
</head>
<body>
	<div class="wrapper">
			<!--Start of Header-->
			<?php include(TEMPLATE.'header.php');?> 

			<!--Start of Slider-->
			<?php include(TEMPLATE.'slider.php');?> 
 			
			<!--Start of Top Rightbar-->	
			<?php include(TEMPLATE.'top_rightbar.php');?>
	      	 
			<!--Start of Menubar-->
			<?php include(TEMPLATE.'menubar.php');?>
			<div class="content">
				<form name="preffered_job" method="post" action="" enctype="multipart/form-data">
					<table border="1px;" style="margin-top: 10px;" width="700px;" class="tb">
						<tr>
							<th style="height: 30px;width: 500px;"  colspan="2">Title</th>
							<th style="height: 30px;width: 100px;" colspan="2">Action</th>
						</tr>
						<?php while($row = mysql_fetch_array($viewdata)){?>
						<tr>
							<td width="320px;">
								<ul>
									<li><b>Title:</b> <?php echo $row['title'];?></li>
									<li><b>Industry:</b> <?php echo $objindustry->get_industry($row['industry']);?> </li>
									<li><b>Function:</b> <?php echo $objfunctionn->get_function($row['function']);?> </li>
									<li><b>Experience:</b> <?php echo $row['experience'];?></li>
									<li><b>Employees Required:</b> <?php echo $row['emp_require'];?></li>
									<li><b>Jobs Expiry:</b> <?php echo $row['jobexpiry'];?></li>
								</ul>
							</td>
							<td width="220px;">	
								<ul>
									<li><b>Gender:</b> <?php echo $row['gender'];?></li>
									<li><b>Country:</b> <?php echo $objCountry->get_country_name($row['country']);?></li>
									<li><b>Location:</b> <?php echo $objlocation->get_location_name($row['location']);?></li>
									<li><b>Zipcode:</b> <?php echo $row['zipcode'];?></li>
									<li><b>Job Type:</b> <?php echo $row['jobtype'];?></li>
									<li><b>Salary:</b> <?php echo $row['salary'];?></li>
								</ul>
							</td>
							<td width="100px;" height="100px;">
								<center>
									<?php
									if(isset($_SESSION['uid'])){
										$uid = $_SESSION['uid'];
										$pjid = $row['pjid'];
										$query = "SELECT * FROM applications WHERE `uid` = $uid AND `pjid` = $pjid";
										$result = mysql_query($query);
										if(mysql_num_rows($result)>0){ ?>
											<p>Applied</p>
									<?php }else{ ?>
										<input type="submit" name="submit1" value="Apply Now" />
									<?php }
										}else{
											header('location:job_seeker_login.php');
										}
										?>
								</center>
									<br></br> 
								<center>
									<?php
									if(isset($_SESSION['uid'])){
										$uid = $_SESSION['uid'];
										$pjid = $row['pjid']; 
										$query = "SELECT * FROM `save_jobs` WHERE `uid` = $uid AND `pjid` = $pjid";
										$result = mysql_query($query);
										if(mysql_num_rows($result)>0){ ?>
											<p>Saved</p>
									<?php }else{ ?>
									<input type="submit" name="submit" value="Save Job" />
									<?php }	
									}else{
										header('location:job_seeker_login.php');
									}
									?>
								</center>
							</td>
						</tr>
						<tr>
							<td colspan="3" width="500px;">
								<ul>
									<li><b>Job Description:</b> <?php echo $row['description'];?></li>
								</ul>
							</td>
						</tr>
						<?php } ?>
					</table>
				</form>		
			</div>
	 		<!--Start of Middlerightbar-->
			<?php include(TEMPLATE.'middle_rightbar.php');  ?> 	
	     <div class="clr">
	     </div>	 
	</div>
				<!--Start of Footer-->
				<?php include(TEMPLATE.'footer.php');?>
</body>
</html>