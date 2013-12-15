<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"/>
    <title>Admin Job Portal</title>
    <link rel="stylesheet" type="text/css" href="style/adminstyle.css"/>
	<script language = "JavaScript" >
		function deletejob(id){
			if(confirm("Do your really want to delete this record?")){
				window.location.href= 'delete_employe_post_jobs.php?did='+id;
			}	
		}
	</script>
</head>
    <body>
    	<!--Start of Admin Header-->
    	<?php include(ADDTEMPLATE.'admin_header.php');?>
		
		<!--Start of Admin Menu-->
		<?php include(ADDTEMPLATE.'admin_menu.php');?>
		
			<div class="login_container">
				<center>
				<form name="preffered_job" method="post" action="" enctype="multipart/form-data">
					<center><h2>View Employer Post Jobs</h2></center>
					<table border="1" style="margin-top: 10px;" width="1000px;" class="tb">
						<tr>
							<th style="height: 30px;width: 500px;" colspan="2">Title</th>
							<th style="height: 30px;width: 50px;">Edit</th>
							<th style="height: 30px;width: 50px;">Delete</th>
							<th style="height: 30px;width: 100px;">Applications</th>
							<th style="height: 30px;width: 100px;">Action</th>
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
									<li><b>Company Name:</b> <?php echo $objpost_jobs->get_company_name($row['company_id']);?></li>
									<li><b>Contact Person Name:</b> <?php echo $objpost_jobs->get_contact_person_name($row['company_id']);?></li>
									<li><b>Mobile:</b> <?php echo $objpost_jobs->get_mobile_no($row['company_id']);?></li>
								</ul>
							</td>
							<td width="180px;">	
								<ul>
									<li><b>Landline:</b> <?php echo $objpost_jobs->get_landline($row['company_id']);?></li>
									<li><b>Employe Location:</b> <?php echo $objlocation->get_employe_location($row['company_id']);?></li>
									<li><b>Gender:</b> <?php echo $row['gender'];?></li>
									<li><b>Country:</b> <?php echo $objCountry->get_country_name($row['country']);?></li>
									<li><b>Job Location:</b> <?php echo $objlocation->get_location_name($row['location']);?></li>
									<li><b>Zipcode:</b> <?php echo $row['zipcode'];?></li>
									<li><b>Job Type:</b> <?php echo $row['jobtype'];?></li>
									<li><b>Salary:</b> <?php echo $row['salary'];?></li>
									<li><b>Keywords:</b> <?php echo $row['keywords'];?></li>
								</ul>	
							</td>
							<td><a href="update_emp_post_jobs.php?id=<?php echo $row['pjid'];?>"><center><img src="images/Edit.png" height="30px;" width="30px;"/></center></a></td>
							<td><center><img src="images/Delete.png" style="cursor: pointer;" onclick="deletejob(<?php echo $row['pjid'];?>);" height="30px;" width="30px;" /></center></td>
							<td><center><a style="text-decoration: none;" href="view_emp_apply_jobs.php?id=<?php echo $row['pjid'];?>">View Applications</a></center></td>
							<td><center>
									<?php
                                		  if($row['app_disapprove'] == 0) {
                                       ?>
                               				 <a href="app_disapprove.php?createId=<?php echo $row['pjid']; ?>"><input type="button" value="Approve"/></a>
                                     <?php
										 }else{
                                      ?>
                                    		<a href="app_disapprove.php?removeId=<?php echo $row['pjid']; ?>"><input type="button" value="Disapprove"/></a>	
                                      <?php
                               		     }
                                	  ?>
								</center>
							</td>
						</tr>
						<tr>
							<td colspan="6" width="500px;">
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
				</center> 
			</div>
		
		<!--Start of Admin Footer-->
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>