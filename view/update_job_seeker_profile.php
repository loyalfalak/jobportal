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
	  		     
	     		<div class="jobseeker_middle">
	     			<div class="jobseeker_leftbar_title" style="margin-left: 50px;">
	  	 				 <h2>JobSeeker Profile</h2>
	  				</div>
	  				<br>
	  				<div class="msg">
	 				<?php
	 					if(isset($_REQUEST['updatemsg']) && $_REQUEST['updatemsg'] != ''){
	 						echo "You information updated successfully.";
	 					}
	 					?>
	 				</div>
					<form name="profile" method="post" action="" class="form">
				 	<?php $row = mysql_fetch_array($viewdata); ?>
						<table style="margin-top: 50px;" cellspacing="10px;">
							<tr>
								<td>Full Name</td>
								<td><input type="text" name="fullname" value="<?php echo $row['full_name'];?>" /></td>
							</tr>
							<tr>
								<td>Mobile</td>
								<td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>" /></td>
							</tr>
							<tr>
								<td>Landline</td>
								<td><input type="text" name="landline" value="<?php echo $row['landline'];?>" /></td>
							</tr>
							<tr>
								<td>Work Permit in Country</td>
								<td>
									<select name="country">
										<option value="">Select</option>
										<?php
										      if(isset($viewdata5)){
													while($row3 = mysql_fetch_array($viewdata5)){
													 $_b = "";
			                                		if($row3['country_id'] == $row['country']){ 
			                                     		$_b = "SELECTED = SELECTED";
													 }
									            		echo "<option value='".$row3['country_id']."' ".$_b.">".$row3['country_name']."</option>";
													}
									            }
											?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Location</td>
								<td>
									<select name="location">
										<option value="">Select</option>
										<?php
										       if(isset($viewdata6)){
													while($row4 = mysql_fetch_array($viewdata6)){
													 $_b = "";
			                                		if($row4['location_id'] == $row['location']){ 
			                                     		$_b = "SELECTED = SELECTED";
													 }
									            		echo "<option value='".$row4['location_id']."' ".$_b.">".$row4['location_name']."</option>";
													}
									            }
											?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Address</td>
								<td><textarea name="address" cols="20" rows="3"><?php echo $row['address'];?></textarea></td>
							</tr>
							<tr>
								<td>Pincode</td>
								<td><input type="text" name="pincode" value="<?php echo $row['pincode'];?>" /></td>
							</tr>
							<tr>
							<td>Date of Birth</td>
							<td>
								<select name="day" style="width: 60px;">
									<option value="">Day</option>
									<?php for($day = 1;$day <= 31;$day++){
										echo "<option value=".$day.">".$day."</option>";
									}?>
								</select>
								<select name="month" style="width: 60px;">
									<option value="">Month</option>
								    <option value="january">January</option>
									<option value="february">February</option>
									<option value="march">March</option>
									<option value="april">April</option>
									<option value="may">May</option>
									<option value="june">June</option>
									<option value="july">July</option>
									<option value="august">August</option>
									<option value="september">September</option>
									<option value="october">October</option>
									<option value="november">November</option>
									<option value="december">December</option>
								</select>
								<select name="year" style="width: 60px;">
									<option value="">Year</option>
								    <?php for($year = 1995;$year >= 1950;$year--){
										echo "<option value=".$year.">".$year."</option>";
									}?>
								</select>
							</td>
						</tr>
							<?php  $gender = $row['gender'];?>
							<tr>
								<td>Gender</td>
								<td>
									<select name="gender">
										<option value="">Select</option>
										<option value="Male" <?php if($gender=='Male'){ echo "selected=selected"; } ?> >Male</option>
										<option value="Female" <?php if($gender=='Female'){ echo "selected=selected"; } ?>>Female</option>
									</select>
								</td>
							</tr>
							<?php  $marital_status = $row['marital_status'];?>
							<tr>
								<td>Marital Status</td>
								<td>
									<select name="marital_status">
										<option value="">Select</option>
										<option value="Single" <?php if($marital_status=='Single'){ echo "selected=selected"; } ?> >Single/unmarried</option>
										<option value="Married" <?php if($marital_status=='Married'){ echo "selected=selected"; } ?> >Married</option>
										<option value="Wedowed" <?php if($marital_status=='Wedowed'){ echo "selected=selected"; } ?> >Wedowed</option>
										<option value="Divorced" <?php if($marital_status=='Divorced'){ echo "selected=selected"; } ?> >Divorced</option>
										<option value="Separated" <?php if($marital_status=='Separated'){ echo "selected=selected"; } ?> >Separated</option>
										<option value="Other" <?php if($marital_status=='Other'){ echo "selected=selected"; } ?> >Other</option>
									</select>
								</td>
							</tr>
							
							<?php  $category = $row['category'];?>
							<tr>
								<td>Category</td>
								<td>
									<select name="category">
										<option value="">Select</option>
										<option value="SC" <?php if($category=='SC'){ echo "selected=selected"; } ?> > SC </option>
										<option value="ST" <?php if($category=='ST'){ echo "selected=selected"; } ?> >ST</option>
										<option value="OBC" <?php if($category=='OBC'){ echo "selected=selected"; } ?> >OBC</option>
									    <option value="Other" <?php if($category=='Other'){ echo "selected=selected"; } ?> >Other</option>
									</select>
								</td>
							</tr>
							<?php  $pc = $row['physically_challenged'];?>
							<tr>
								<td>Physically Challenged</td>
								<td>
									<select name="physically_challenged">
										<option value="">Select</option>
										<option value="Yes"<?php if($pc=='Yes'){ echo "selected=selected"; } ?>>Yes</option>
										<option value="No"<?php if($pc=='No'){ echo "selected=selected"; } ?>>No</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Description</td>
								<td><textarea name="description" cols="20" rows="5"><?php echo $row['description'];?></textarea></td>
							</tr>
							<tr>
							     <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btn7"/></td>
						    </tr> 
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