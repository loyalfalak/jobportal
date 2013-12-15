<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<div class="wrapper">
	
			<!--Start Employe Header-->
			<?php include(TEMPLATE.'employe_header.php');?> 
		      	 
	 		<!-- Start Employe Menubar-->	 
		    <?php include(TEMPLATE.'menubar.php');?>
	
		 <div class="content1">
		    	
			<!--Start Employe Leftbar-->
		     <?php include(TEMPLATE.'employe_leftbar.php');?>
		  		    
	         	<form name="emp" method="post" action="" class="form" enctype="multipart/form-data">
		       		<div class="content_register_left">
		       			<div class="jobseeker_leftbar_title" style=" margin-left: 50px;">
	  	 					<h2>Employer Profile</h2>
	 					</div>
	 					<br>
	 					<div class="msg"> 
	 					<?php
	 					if(isset($_REQUEST['updatemsg']) && $_REQUEST['updatemsg'] != ''){
	 						echo "Your information updated successfully.";
	 					}
	 					?>
	 				</div>
		       		<?php $row= mysql_fetch_array($viewdata); ?>
		       			<table style="margin-top: 0px;" cellspacing="10px;">
							<tr>
								<td>Contact Person</td>
								<td><input type="text" name="contact_person" value="<?php echo $row['contact_person']; ?>" /></td>
							</tr>
							<tr>
								<td>Designation</td>
								<td><input type="text" name="designation" value="<?php echo $row['designation']; ?>" /></td>
							</tr>
							<tr>
								<td>Mobile</td>
								<td><input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" /></td>
							</tr>
							<?php $cty = $row['company_type']; ?>
							<tr>
								<td>Company Type</td>
								<td>
									<select name="company_type">
										 <option value="">Select</option>
											<option value="Placement Consultant" <?php if($cty == 'Placement Consultant'){ echo "selected=selected"; } ?>>Placement Consultant</option>
											<option value="Corporate" <?php if($cty == 'Corporate'){ echo "selected=selected"; }?>>Corporate</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Company Name</td>
								<td>
									<input type="text" name="company_name" value="<?php echo $row['company_name']; ?>"/>
								</td>
							</tr>
							<tr>
								<td>Industry</td>
								<td>
									 <select name="industry">
									 	 <option value="">Select</option>
									 	 <?php
									      	 if(isset($viewdata3)){
												while($row1 = mysql_fetch_array($viewdata3)){
								    				 $_b = "";
		                            				if($row1['industry_id'] == $row['industry']){ 
			                                 				$_b = "SELECTED = SELECTED";
												  	}
									                echo "<option value='".$row1['industry_id']."' ".$_b.">".$row1['industry']."</option>";
											     	}
					            		      }?>
									 </select>
								</td>
							</tr>
							<tr>
								<td>Landline</td>
								<td>
									<input type="text" name="landline" value="<?php echo $row['landline']; ?>" />
								</td>
							</tr>
							<tr>
								<td>Country</td>
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
								      	 if(isset($viewlocation)){
											while($row1 = mysql_fetch_array($viewlocation)){
							    				 $_b = "";
	                            				if($row1['location_id'] == $row['location']){ 
		                                 				$_b = "SELECTED = SELECTED";
											  	}
								                echo "<option value='".$row1['location_id']."' ".$_b.">".$row1['location_name']."</option>";
										     	}
				            		      } ?>
										<option value=""></option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Address</td>
								<td>
									<textarea name="address" cols="20" rows="5"><?php echo $row['address']; ?></textarea>
								</td>
							</tr>
						</table>
		       		</div> 
		        	 <br>
		         <div class="sub">
		               <input type="submit" name="submit" value="Submit" class="btnn" />
	             </div>
		    </form>
	   	</div>
			<div class="clr">
		 	</div>	 
	</div>
	
	<!-- Start Footer--> 
	<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>