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
	  	 		<a href="add_employe_post_jobs.php" style="text-decoration: none;"><input type="button" name="add_jobs" value="Add Jobs" style="margin-left: 250px;margin-top: 10px;cursor: pointer;" /></a>
				<form name="preffered_job" method="post" action="" enctype="multipart/form-data">
				    	
					<table style="margin-top: 10px;" width="700px;" class="tb">
						<tr>
							<th style="height: 30px;width: 500px;" colspan="2">Title</th>
							<th style="height: 30px;width: 50px;">Edit</th>
							<th style="height: 30px;width: 50px;">Delete</th>
							<th style="height: 30px;width: 100px;">Applications</th>
						</tr>
						<?php while($row = mysql_fetch_array($viewdata)){?>
						<tr>
							<td width="320px;">
								<ul>
									<li><b>Title:</b><?php echo $row['title'];?></li>
									<li><b>Industry:</b> <?php echo $objindustry->get_industry($row['industry']);?></li>
									<li><b>Function:</b> <?php echo $objfunctionn->get_function($row['function']);?></li>
									<li><b>Experience:</b> <?php echo $row['experience'];?></li>
									<li><b>Employees Required:</b> <?php echo $row['emp_require'];?></li>
									<li><b>Jobs Expiry:</b> <?php echo $row['jobexpiry'];?></li>
									<li><b>Gender:</b> <?php echo $row['gender'];?></li>
								</ul>
							</td>
							<td width="180px;">	
								<ul>
									<li><b>Country:</b> <?php echo $objCountry->get_country_name($row['country']);?></li>
									<li><b>Location:</b> <?php echo $objlocation->get_location_name($row['location']);?></li>
									<li><b>Zipcode:</b> <?php echo $row['zipcode'];?></li>
									<li><b>Job Type:</b> <?php echo $row['jobtype'];?></li>
									<li><b>Salary:</b> <?php echo $row['salary'];?></li>
									<li><b>Keywords:</b> <?php echo $row['keywords'];?></li>
									<li><b>Status:</b> <?php if($row['app_disapprove']=='1'){ echo "Approve";}?>
													   <?php if($row['app_disapprove']=='0'){ echo "Disapprove";}?>
									</li>
								</ul>	
							</td>
							<td><a href="update_employe_post_jobs.php?id=<?php echo $row['pjid'];?>"><center><img src="images/Edit.png" height="30px;" width="30px;"/></center></a></td>
							<td><center><img src="images/Delete.png" style="cursor: pointer;" onclick="deletejob(<?php echo $row['pjid'];?>);" height="30px;" width="30px;" /></center></td>
							<td><center><a style="text-decoration: none;" href="view_emp_apply_jobs.php?id=<?php echo $row['pjid'];?>">View Applications</a></center></td>
						</tr>
						<tr>
							<td colspan="5" width="500px;">
								<ul>
									<li><b>Job Description:</b> <?php echo $row['description'];?></li>
								</ul>
							</td>
						</tr>
						<?php } ?>
					</table>
				</form>
				<div class="pagination" align="center">
	  				<?php
	   	 	        	$per_page = 10;
				    	$pages_query = mysql_query("SELECT count(`pjid`) FROM `post_jobs`");
		       			$pages = ceil(mysql_result($pages_query, 0) / $per_page);
							echo"Pages:";
	   	 		    	if($pages>=1){
	   	 			  		 for ($x=1; $x<=$pages; $x++){ 
	   	 			      		 echo  '<a href="?page=' .$x. '">'  .$x. '</a>';
	   	 			 		 }
	   	 				}
	   	 			?>
	   			</div>
	  	 	</div>
	    </div>
		<div class="clr">
		</div>	 
	</div>
	
	<!-- Start Footer--> 
	<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>	