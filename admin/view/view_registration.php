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
					<form name="category" method="post">
				  	       <center><h3><b>View Registration</b></h3></center>
				  	       <table align="center" border="1" style="margin-top: 10px;" width="">
				  	       		<tr>
				  	       			<th>Email</th>
				  	       			<th>Password</th>
				  	       			<th>Full Name</th>
				  	       			<th>Mobile</th>
				  	       			<th>Landline</th>
				  	       			<th>Location</th>
				  	       			<th>Address</th>
				  	       			<th>Resume Title</th>
				  	       			<th>Upload Resume</th>
				  	       			<th>JobType</th>
				  	       			<th>Experience</th>
				  	       			<th>Industries</th>
									<th>Function</th>
				  	       			<th>Key Skill</th>
				  	       			<th>Action</th>
				  	       		</tr>
				  	       	 <?php while($row = mysql_fetch_array($viewdata)){?>		
				  	       		<tr>
				  	       			<td><?php echo $row['email'];?></td>
				  	       			<td><?php echo $row['password'];?></td>
				  	       			<td><?php echo $row['fullname'];?></td>
				  	       			<td><?php echo $row['mobile'];?></td>
				  	       			<td><?php echo $row['landline'];?></td>
				  	       			
				  	       			<td><?php echo $row['location'];?></td>
				  	       			<td><?php echo $row['address'];?></td>
				  	       			<td><?php echo $row['resume_title'];?></td>
				  	       			<td><?php echo $row['resume'];?></td>
				  	       			
				  	       			<td><?php echo $objregistration->get_jobtype_name($row['jobtype']); ?></td>
				  	       			<td><?php echo $objregistration->get_experience_name($row['experience']) ?></td>
				  	       			<td><?php echo $objregistration->get_industry_name($row['industries']) ?></td>
				  	       			<td><?php echo $objregistration->get_function_name($row['function']) ?></td>
				  	       			<td><?php echo $row['key_skill'];?></td>
				  	       			
				  	       			<td><a href="update_registration.php?uid=<?php echo $row['register_id'];?>">Update</a>
				  	       				<a href="delete_registration.php?did=<?php echo $row['register_id'];?>">Delete</a>
				  	       			</td>
				  	       		</tr>
				  	        <?php }?>
				  	       </table>  
				  </form>
			</center> 
		</div>
		
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>