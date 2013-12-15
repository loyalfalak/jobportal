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
				
				<!-- Start leftbar-->
			    <?php include(TEMPLATE.'job_seeker_leftbar.php');?>
	  		     
				<div class="jobseeker_middle">
					<div class="jobseeker_leftbar_title" style=" margin-left: 100px;">
	  	 				<h2>Language Details</h2>
	 				</div>
					<form name="language" method="post" class="form">
						<?php $row=mysql_fetch_array($viewdata); ?>
	        			<table align="center" cellspacing="10px" style="margin-top: 50px;">
		        			<tr>
		        				<th>Language</th>
		        				<th>Proficiency</th>
		        				<th>Read</th>
		        				<th>Write</th>
		        				<th>Speak</th>
		        			</tr>
		        			<tr>
								<td><input type="text" name="language" value="<?php echo $row['lname']; ?>" /></td>
								<?php $proficiency = $row['proficency']; ?>
								<td>
									<select name="proficiency">
										 <option value="">Select</option>
										 <option value="expert"<?php if($proficiency=='expert'){ echo "selected=selected"; } ?>>Expert</option>
										 <option value="beginner"<?php if($proficiency=='beginner'){ echo "selected=selected"; } ?>>Beginner</option>
										 <option value="proficient"<?php if($proficiency=='proficient'){ echo "selected=selected"; } ?>>Proficient</option>
									</select>
								</td>
								<?php $read = $row['read']; ?>
								<td>
									<center><input type="checkbox" name="read" value="read" <?php if($read =='read'){echo "checked";} ?> /></center>
								</td>
								<?php $write = $row['write']; ?>
								<td>
									<center><input type="checkbox" name="write" value="write" <?php if($write =='write'){echo "checked";} ?>/></center>
								</td>
								<?php $speak = $row['speak']; ?>
								<td>
									<center><input type="checkbox" name="speak" value="speak" <?php if($speak =='speak'){echo "checked";} ?>/></center>
								</td>	        				
		        			</tr>
		        			<tr>
								<td><input type="text" name="language1" value="<?php echo $row['lname1']; ?>" /></td>
								<?php $proficiency1 = $row['proficency1']; ?>
								<td>
									<select name="proficiency1">
										 <option value="">Select</option>
										 <option value="expert"<?php if($proficiency1=='expert'){ echo "selected=selected"; } ?>>Expert</option>
										 <option value="beginner"<?php if($proficiency1=='beginner'){ echo "selected=selected"; } ?>>Beginner</option>
										 <option value="proficient"<?php if($proficiency1=='proficient'){ echo "selected=selected"; } ?>>Proficient</option>
									</select>
								</td>
								<?php $read1 = $row['read1']; ?>
								<td>
									<center><input type="checkbox" name="read1" value="read" <?php if($read1=='read'){echo "checked";} ?> /></center>
								</td>
								<?php $write1 = $row['write1']; ?>
								<td>
									<center><input type="checkbox" name="write1" value="write" <?php if($write1 =='write'){echo "checked";} ?>/></center>
								</td>
								<?php $speak1 = $row['speak1']; ?>
								<td>
									<center><input type="checkbox" name="speak1" value="speak" <?php if($speak1 =='speak'){echo "checked";} ?>/></center>
								</td>	        				
		        			</tr>
		        			<tr>
								<td><input type="text" name="language2" value="<?php echo $row['lname2']; ?>" /></td>
								<?php $proficiency2 = $row['proficency2']; ?>
								<td>
									<select name="proficiency2">
										 <option value="">Select</option>
										 <option value="expert"<?php if($proficiency2=='expert'){ echo "selected=selected"; } ?>>Expert</option>
										 <option value="beginner"<?php if($proficiency2=='beginner'){ echo "selected=selected"; } ?>>Beginner</option>
										 <option value="proficient"<?php if($proficiency2=='proficient'){ echo "selected=selected"; } ?>>Proficient</option>
									</select>
								</td>
								<?php $read2 = $row['read2']; ?>
								<td>
									<center><input type="checkbox" name="read2" value="read" <?php if($read2 =='read'){echo "checked";} ?> /></center>
								</td>
								<?php $write2 = $row['write2']; ?>
								<td>
									<center><input type="checkbox" name="write2" value="write" <?php if($write2 =='write'){echo "checked";} ?>/></center>
								</td>
								<?php $speak2 = $row['speak2']; ?>
								<td>
									<center><input type="checkbox" name="speak2" value="speak" <?php if($speak2 =='speak'){echo "checked";} ?>/></center>
								</td>	        				
		        			</tr>
		        			<tr>
								<td><input type="text" name="language3" value="<?php echo $row['lname3']; ?>" /></td>
								<?php $proficiency3 = $row['proficency3']; ?>
								<td>
									<select name="proficiency3">
										 <option value="">Select</option>
										 <option value="expert"<?php if($proficiency3=='expert'){ echo "selected=selected"; } ?>>Expert</option>
										 <option value="beginner"<?php if($proficiency3=='beginner'){ echo "selected=selected"; } ?>>Beginner</option>
										 <option value="proficient"<?php if($proficiency3=='proficient'){ echo "selected=selected"; } ?>>Proficient</option>
									</select>
								</td>
								<?php $read3 = $row['read3']; ?>
								<td>
									<center><input type="checkbox" name="read3" value="read" <?php if($read3 =='read'){echo "checked";} ?> /></center>
								</td>
								<?php $write3 = $row['write3']; ?>
								<td>
									<center><input type="checkbox" name="write3" value="write" <?php if($write3 =='write'){echo "checked";} ?>/></center>
								</td>
								<?php $speak3 = $row['speak3']; ?>
								<td>
									<center><input type="checkbox" name="speak3" value="speak" <?php if($speak3 =='speak'){echo "checked";} ?>/></center>
								</td>	        				
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