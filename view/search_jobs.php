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
	      	 
 		<!-- Start Menubar-->	 
	    <?php include(TEMPLATE.'menubar.php');?>
	   
		 <div class="content1">
				<!-- Start Leftbar-->
				<?php include(TEMPLATE.'job_seeker_leftbar.php');?>
	  		     
	     		<div class="jobseeker_middle" style="margin-left: 0px;">
	     			<div class="jobseeker_leftbar_title" style="margin-left: 50px;">
	  	 				 <h2>Search Jobs</h2>
	  				</div>
					<form name="profile" method="post" action="" class="search_form">
						<table style="margin-top: 50px;" cellspacing="10px;">
							<tr>
								<td>Key Words</td>
								<td><input type="text" name="keywords" value="" placeholder="Enter Search Keyword" /></td>
							
							
								<td>Country</td>
								<td>
									<select name="country">
										<option value="">Select</option>
										<?php while($row=mysql_fetch_array($viewdata5)){?>
										<option value="<?php echo $row['country_id'];?>"><?php echo $row['country_name'];?></option>
									<?php }?>
									</select>
								</td>
							
								<td>Location</td>
								<td>
									<select name="location">
										<option value="">Select</option>
									<?php while($row=mysql_fetch_array($viewdata6)) {?>
										<option value="<?php echo $row['country_id'];?>"><?php echo $row['location_name'];?></option>
									<?php }?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Industry</td>
								<td>
									<select name="industry">
										<option value="">Select</option>
									 <?php while($row = mysql_fetch_array($viewdata3)){?>
										<option value="<?php echo $row['industry_id'];?>"><?php echo $row['industry'];?></option>
									 <?php }?>
									</select>
								</td>
							
							
								<td>Function</td>
								<td>
									<select name="functional_area">
										<option value="">Select</option>
									<?php while($row=mysql_fetch_array($viewdata4)){?>
										<option value="<?php echo $row['function_id'];?>"><?php echo $row['function'];?></option>
									<?php }?>
									</select>
								</td>
							
								<td>Experience</td>
								<td>
									<select name="experience">
										<option value="">Select</option>
										<option value="Fresher">Fresher</option>
										<option value="6_Month">6 Month</option>
										<?php for($lp = 1;$lp <= 30;$lp++){
											echo "<option value=".$lp."_year>".$lp." Year</option>";
										}?> 
										<option value="30+_year">30+ Year</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Salary Expection</td>
								<td>
									<select name="lacs" style="width: 90px;">
										<option value="">Lacs</option>
										<?php for($cal = 1;$cal <= 50;$cal++){
												echo "<option value=".$cal."Million>".$cal."</option>";
											}?>
										<option value="50+">50+</option>
									</select>
									<select name="thosounds" style="width: 90px;">
									   <option value="">Thosounds</option>
										<option value="0">0</option>
										<option value="5Thosounds">5</option>
										<option value="10Thosounds">10</option>
										<option value="15Thosounds">15</option>
										<option value="20Thosounds">20</option>
										<option value="25Thosounds">25</option>
										<option value="30Thosounds">30</option>
										<option value="35Thosounds">35</option>
										<option value="40Thosounds">40</option>
										<option value="45Thosounds">45</option>
										<option value="50Thosounds">50</option>
										<option value="55Thosounds">55</option>
										<option value="60Thosounds">60</option>
										<option value="65Thosounds">65</option>
										<option value="70Thosounds">70</option>
										<option value="75Thosounds">75</option>
					                    <option value="80Thosounds">80</option>
										<option value="85Thosounds">85</option>
										<option value="90Thosounds">90</option>
										<option value="95Thosounds">95</option>
									</select>
								</td>
							     <td align="center" colspan="2"><input type="submit" name="submit" value="Search" class="btn7"/></td>
						    </tr> 
						</table>
					</form>
				</div>	
				 <?php
				 if(isset($_POST['submit']) && $_POST['submit'] == 'Search'){
					if(mysql_num_rows($viewsearch) > 0 ){
				 ?>		
					<table border="1px;" style="margin-top: 10px;" width="740px;" class="tb">
						<tr>
							<th style="height: 30px;width: 500px;"colspan="2">Title</th>
							<th style="height: 30px;width: 100px;">Action</th>
						</tr>
						<?php while($row = mysql_fetch_array($viewsearch)){?>
						<tr>
							<td>
								<ul>
									<li><b>Title:</b> <?php echo $row['title'];?></li>
									<li><b>Industry:</b> <?php echo $objindustry->get_industry($row['industry']);?></li>
									<li><b>Function:</b> <?php echo $objfunction->get_function($row['function']);?></li>
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
						
					<?php }else{
							echo "No Record Found.";
						}
					}
					?>
		  </div>
	     <div class="clr">
	     </div>	 
	</div>
	 <!-- Start Footer--> 
	  <?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>