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
					  
	    		<!-- Start Menubar-->
			    <?php include(TEMPLATE.'job_seeker_leftbar.php');?>
	  		     
				<div class="jobseeker_middle">
					<div class="jobseeker_leftbar_title" style=" margin-left: 50px;">
	  	 				 <h2>Experience Details</h2>
	 				 </div>
	 				 <br>
	 				<div class="msg"> 
	 				<?php
	 					if(isset($_REQUEST['updatemsg']) && $_REQUEST['updatemsg'] != ''){
	 						echo "You information updated successfully.";
	 					}
	 					?>
	 				</div>
                	 <form name="experince" method="post" class="form">
	                    <?php $row = mysql_fetch_array($viewdata); ?>
                    					
							<table style="margin-top: 50px;" cellspacing="10px;">
								<tr>
									<td>Current Company Name</td>
									<td>
										<input type="text" name="current_company" value="<?php echo $row['current_company']; ?>" />
									</td>
								</tr>
								<tr>
									<td>Current Designation</td>
									<td>
										<input type="text" name="current_designation" value="<?php echo $row['current_designation'];?>" />
									</td>
								</tr>
								<?php  $lacs = $row['current_annual_salary'];?>
								<tr>
									<td>Current Annual Salary</td>
									<td>
										<select name="lacs" style="width: 90px;">
											<option value="">Lacs</option>
											<?php 
												$lac = explode('|',$row['current_annual_salary']);
												$cnt = 1;
												while($cnt <= 50){
													if($lac[0] == $cnt){
														echo "<option value=".$cnt." selected=selected>".$cnt."</option>";
													}else{
														echo "<option value=".$cnt.">".$cnt."</option>";	
													}
													$cnt += 1;
												}
												 
												if($lac[0] ==  '50+'){
													 echo '<option value="50+" selected="selected">50+</option>';
												}else{
													echo '<option value="50+">50+</option>';	
											}?>
										</select>
										<select name="thosounds" style="width: 90px;">
										   <option value="">Thosounds</option>
											<?php
											$thousand = explode('|',$row['current_annual_salary']);
											$cnt = 0;
											while($cnt < 100){
												if($thousand[1] == $cnt) {
													echo "<option value=".$cnt." selected = selected>".$cnt."</option>";
												}else{
													echo "<option value=".$cnt.">".$cnt."</option>";
												}	
												$cnt += 5; 
											}
										?> 
										</select>
									</td>
								</tr>
								<tr>
									<td>Duration  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;From</td>
									<td>
										<select name="month1" style="width: 90px;">
										   	<option value="">Select</option>
										   	<?php 
										   		$month1 = explode('|',$row['duration_in_current']);
										   	?>
											<option value="January"<?php if($month1[0] =='January'){echo 'selected=selected';} ?> >January</option>
											<option value="February"<?php if($month1[0] =='February'){echo 'selected=selected';} ?>>February</option>
											<option value="March"<?php if($month1[0] =='March'){echo 'selected=selected';} ?>>March</option>
											<option value="April"<?php if($month1[0] =='April'){echo 'selected=selected';} ?>>April</option>
											<option value="May"<?php if($month1[0] =='May'){echo 'selected=selected';} ?>>May</option>
											<option value="June"<?php if($month1[0] =='June'){echo 'selected=selected';} ?>>June</option>
											<option value="July"<?php if($month1[0] =='July'){echo 'selected=selected';} ?>>July</option>
											<option value="August"<?php if($month1[0] =='August'){echo 'selected=selected';} ?>>August</option>
											<option value="September"<?php if($month1[0] =='September'){echo 'selected=selected';} ?>>September</option>
											<option value="October"<?php if($month1[0] =='October'){echo 'selected=selected';} ?>>October</option>
											<option value="November"<?php if($month1[0] =='November'){echo 'selected=selected';} ?>>November</option>
											<option value="December"<?php if($month1[0] =='December'){echo 'selected=selected';} ?>>December</option>
										</select>
										<select name="year1" style="width: 90px;">
										   <option value="">Select</option>
											<?php
												$year1 = explode('|',$row['duration_in_current']);											
											 	
											 for($sd = 2013;$sd >= 1970;$sd--){
											 	if($year1[1] == $sd){
											 		echo "<option value=".$sd." selected=selected>".$sd."</option>";
											 	}else{
													echo "<option value=".$sd.">".$sd."</option>";
												}		
										     }?>
										</select>
									</td>
								</tr>
								<tr>
									<td>Duration &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To</td>
									<td>
										<select name="month2" style="width: 90px;">
											<?php 
										   		$month2 = explode('|',$row['duration_in_current_company_to']);
										   	?>
											<option value="January"<?php if($month2[0] =='January'){echo 'selected=selected';} ?> >January</option>
											<option value="February"<?php if($month2[0] =='February'){echo 'selected=selected';} ?>>February</option>
											<option value="March"<?php if($month2[0] =='March'){echo 'selected=selected';} ?>>March</option>
											<option value="April"<?php if($month2[0] =='April'){echo 'selected=selected';} ?>>April</option>
											<option value="May"<?php if($month2[0] =='May'){echo 'selected=selected';} ?>>May</option>
											<option value="June"<?php if($month2[0] =='June'){echo 'selected=selected';} ?>>June</option>
											<option value="July"<?php if($month2[0] =='July'){echo 'selected=selected';} ?>>July</option>
											<option value="August"<?php if($month2[0] =='August'){echo 'selected=selected';} ?>>August</option>
											<option value="September"<?php if($month2[0] =='September'){echo 'selected=selected';} ?>>September</option>
											<option value="October"<?php if($month2[0] =='October'){echo 'selected=selected';} ?>>October</option>
											<option value="November"<?php if($month2[0] =='November'){echo 'selected=selected';} ?>>November</option>
											<option value="December"<?php if($month2[0] =='December'){echo 'selected=selected';} ?>>December</option>
										</select>	
										<select name="year2" style="width: 90px;">
											<option value="">Select</option>
											
											<?php
											$year2 = explode('|',$row['duration_in_current_company_to']);
												if($year2[1] == 'Present'){
													echo '<option value="Present" selected="selected">Present</option>';	
												}else{
													echo '<option value="Present">Present</option>';
												}
											for($sd = 2013;$sd >= 1970;$sd--){
											 	if($year2[1] == $sd){
											 		echo "<option value=".$sd." selected=selected>".$sd."</option>";
											 	}else{
													echo "<option value=".$sd.">".$sd."</option>";
												}		
										     }?>
										</select>
									</td>
									</tr>
									<tr>
										<td>Job Profile</td>
										<td>
											<input type="text" name="job_profile" value="<?php echo $row['job_profile']; ?>" />
										</td>
									</tr>
									<tr>
										<td><input type="button" name="add_employer" value="Add Employer"/></td>
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