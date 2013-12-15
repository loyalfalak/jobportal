<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"/>
        <title>Admin Dental Instruments Online,Dental Clinic Setup - 3T Dental Solutions</title>
        <link rel="stylesheet" type="text/css" href="style/adminstyle.css"/>
        
    </head>
    <body>
    	
    	<?php include(ADDTEMPLATE.'admin_header.php');?>
		<?php include(ADDTEMPLATE.'admin_menu.php');?>
		
		<div class="login_container">
					
			<center>
	<form name="userdetail" method="post" action="" class="form" enctype="multipart/form-data" style="margin-left: 120px;">
	       
	       <center><h1>Member Registration</h1></center>
	       <?php $row1=mysql_fetch_array($viewdata); ?>
	       <div class="content_register_left">
	       	
	       		<div class="content_register_left_title">
	       			<h2>User Details</h2>
	       		</div>
				
				
					<table style="margin-top: 50px;" cellspacing="10px;">
						<tr>
							<td>Email</td>
							<td><input type="text" name="email" value="<?php echo $row1['email']; ?>" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" value="<?php echo $row1['password']; ?>" /></td>
						</tr>
						<tr>
							<td>Confirm Password</td>
							<td><input type="password" name="cnfpassword" value="" /></td>
						</tr>
					</table>
				
				 	       	
	       </div>
	       
	       <div class="content_register_left">
	       	
	       		<div class="content_register_left_title">
	       			<h2>Resume Details</h2>
	       		</div>
				
				
					<table style="margin-top: 50px;" cellspacing="10px;">
						
						<tr>
							<td>Resume Title</td>
							<td><input type="text" name="resume_title" value="<?php echo $row1['resume_title']; ?>" /></td>
						</tr>
						<tr>
							<td>Upload Resume</td>
							<td><input type="file" name="file" value="<?php //echo $row['email']; ?>" /></td>
						</tr>
								
					</table>
				
				 	       	
	       </div> 
	      
	      
	      
	             	
        
	    
	    <div class="content_register_left">
	       	
	       		<div class="content_register_left_title">
	       			<h2>Professional Details</h2>
	       		</div>
				
				
					<table style="margin-top: 50px;" cellspacing="10px;">
						<tr>
							<td>JobType</td>
							<td>
								 <select name="jobtype">
								 	 <option value="">Select</option>
								 	 
								 	  <?php
							           if(isset($viewdata1)){
														
													while($_jobtype = mysql_fetch_array($viewdata1)){
												 	 	
												    		 $_b = "";
                                                    		if ($_jobtype['jobtype_id'] == $row1['jobtype']) 
                                                  			  {
                                                         		$_b = "SELECTED = SELECTED";
															  }
														 	
											                echo "<option value='" . $_jobtype['jobtype_id'] . "' " . $_b . ">" . $_jobtype['jobtype'] . "</option>";
											
												     	}
									               }
									    ?>

								 </select>
							</td>
						</tr>
						
						<tr>
							<td>Experience</td>
							<td>
								 <select name="experience">
								 	 <option value="">Select</option>
								 	 
								 	 <?php
							           if(isset($viewdata2)){
														
													while($_experience = mysql_fetch_array($viewdata2)){
												 	 	
												    		 $_b = "";
                                                    		if ($_experience['experience_id'] == $row1['experience']) 
                                                  			  {
                                                         		$_b = "SELECTED = SELECTED";
															  }
														 	
											                echo "<option value='" . $_experience['experience_id'] . "' " . $_b . ">" . $_experience['experience'] . "</option>";
											
												     	}
									               }
									    ?>
								 </select>
							</td>
						</tr>
						
						<tr>
							<td>Industry</td>
							<td>
								 <select name="industries">
								 	 <option value="">Select</option>
								 	 
								 	 <?php
							           if(isset($viewdata3)){
														
													while($_industries = mysql_fetch_array($viewdata3)){
												 	 	
												    		 $_b = "";
                                                    		if ($_industries['industry_id'] == $row1['industries']) 
                                                  			  {
                                                         		$_b = "SELECTED = SELECTED";
															  }
														 	
											                echo "<option value='" . $_industries['industry_id'] . "' " . $_b . ">" . $_industries['industry'] . "</option>";
											
												     	}
									               }
									    ?>
								 </select>
							</td>
						</tr>
						
						<tr>
							<td>Function</td>
							<td>
								 <select name="function">
								 	 <option value="">Select</option>
								 	 
								 	 
								 	 <?php
							           if(isset($viewdata4)){
														
													while($_function = mysql_fetch_array($viewdata4)){
												 	 	
												    		 $_b = "";
                                                    		if ($_function['function_id'] == $row1['function']) 
                                                  			  {
                                                         		$_b = "SELECTED = SELECTED";
															  }
														 	
											                echo "<option value='" . $_function['function_id'] . "' " . $_b . ">" . $_function['function'] . "</option>";
											
												     	}
									               }
									    ?>
								 </select>
							</td>
						</tr>
						
						<tr>
							<td>Key Skill</td>
							<td><input type="text" name="key_skill" value="<?php echo $row1['key_skill']; ?>" /></td>
						</tr>			
					</table>
				
	       </div> 
	       
	       <div class="content_register_left" style="margin-top: -180px;">
	       	
	       		<div class="content_register_left_title">
	       			<h2>Personal Details</h2>
	       		</div>
				
				
					<table style="margin-top: 50px;" cellspacing="10px;">
						<tr>
							<td>Full Name</td>
							<td><input type="text" name="fullname" value="<?php echo $row1['fullname']; ?>" /></td>
						</tr>
						<tr>
							<td>Mobile</td>
							<td><input type="text" name="mobile" value="<?php echo $row1['mobile']; ?>" /></td>
						</tr>
						<tr>
							<td>Landline</td>
							<td><input type="text" name="landline" value="<?php echo $row1['landline']; ?>" /></td>
						</tr>
						<tr>
							<td>Location</td>
							<td><input type="text" name="location" value="<?php echo $row1['location']; ?>" /></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><textarea name="address" cols="20" rows="3"><?php echo $row1['address']; ?></textarea></td>
						</tr>
						
					</table>
				
				 	       	
	       </div> 
	        
	         <br>
	         
	         <div class="sub">
	               <input type="submit" name="submit" value="Submit" class="btnn" />
             </div>
             	       
	          </form>
	    
			</center> 
		</div>
		
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>





