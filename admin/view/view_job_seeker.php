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
					<form name="category" method="post" style="form">
				  	     
				  	     <center><h3><b>View Job Seekers List</b></h3></center>
				  	       
				  	       
				  	       <table  border="1" style="margin-top: 10px;margin-right: 300px;">
				  	       		
				  	       		<tr>
				  	       		<?php while($row = mysql_fetch_array($viewdata)){?>
				  	       		
				  	       		
				  	       			<td>
				  	       					
				  	       				<ul>
				  	       			 		<center><b>Education Details</b></center>
				  	       			 		<hr>
				  	       			 		<li><b>Course Name:</b> <?php echo $row['Course_Name'];?></li>
				  	       			 		<li><b>Study Duration:</b> <?php echo $row['Study_Duration'];?></li>
				  	       			 		<li><b>Specilization:</b> <?php echo $row['Specilization'];?></li>
				  	       			 		<li><b>University:</b> <?php echo $row['University'];?></li>
				  	       			 		<li><b>Degree Type:</b> <?php echo $row['Degree_Type'];?></li>
				  	       			 		<li><b>Passing Year:</b> <?php echo $row['Passing_Year'];?></li>
				  	       			 		<li><b>Study Type:</b> <?php echo $row['Study_Type'];?></li>
				  	       			 		
				  	       				</ul>
				  	       			</td>	
				  	       				
				  	       		
				  	       		
				  	             <?php }?>
				  	             
				  	             <?php while($row1 = mysql_fetch_array($viewdata1)){?>
				  	       		
				  	       		
				  	       			<td>
				  	       					
				  	       				<ul>
				  	       			 		<center><b>Work Experience</b></center>
				  	       			 		
				  	       			 		<hr style="margin-bottom: 40px;">
				  	       			 		
				  	       			 		<li><b>Current Company:</b> <?php echo $row1['Current_Company'];?></li>
				  	       			 		<li><b>Current Designation:</b> <?php echo $row1['Current_Designation'];?></li>
				  	       			 		<li><b>Current Annual_Salary:</b> <?php echo $row1['Current_Annual_Salary'];?></li>
				  	       			 		<li><b>Duration in Current:</b> <?php echo $row1['Duration_in_Current'];?></li>
				  	       			 		<li><b>Job Profile:</b> <?php echo $row1['Job_Profile'];?></li>
				  	       			 		
				  	       				</ul>
				  	       			</td>	
				  	       				
				  	             <?php }?>
				  	             
				  	              <?php while($row2 = mysql_fetch_array($viewdata2)){?>
				  	       		
				  	       		
				  	       			<td>
				  	       					
				  	       				<ul>
				  	       			 		<center><b>Preferred Job</b></center>
				  	       			 		
				  	       			 		<hr style="margin-bottom: 0px;">
				  	       			 		
				  	       			 		<li><b>Expected_Annual_Salary:</b> <?php echo $row2['Expected_Annual_Salary'];?></li>
				  	       			 		<li><b>Preffered Country:</b> <?php echo $row2['Preffered_Country'];?></li>
				  	       			 		<li><b>Preffered State:</b> <?php echo $row2['Preffered_State'];?></li>
				  	       			 		<li><b>Preffered City:</b> <?php echo $row2['Preffered_City'];?></li>
				  	       			 		<li><b>Preffered Industry:</b> <?php echo $row2['Preffered_Industry'];?></li>
				  	       			 		<li><b>Preferred Function:</b> <?php echo $row2['Preferred_Function'];?></li>
				  	       			 		<li><b>Preffered JobType:</b> <?php echo $row2['Preffered_Job_Type'];?></li>
				  	       			 		<li><b>Any_other Preference:</b> <?php echo $row2['Any_other_Preference'];?></li>
				  	       				</ul>
				  	       			</td>	
				  	       				
				  	       		
				  	       		
				  	             <?php }?>
				  	             
				  	             <?php while($row3 = mysql_fetch_array($viewdata3)){?>
				  	       		
				  	       		
				  	       			<td>
				  	       					
				  	       				<ul>
				  	       			 		<center><b>Personal Details</b></center>
				  	       			 		
				  	       			 		<hr style="margin-bottom: 0px;">
				  	       			 		
				  	       			 		<li><b>Date of Birth:</b> <?php echo $row3['Date_of_Birth'];?></li>
				  	       			 		<li><b>Gender:</b> <?php echo $row3['Gender'];?></li>
				  	       			 		<li><b>Marital Status:</b> <?php echo $row3['Marital_Status'];?></li>
				  	       			 		<li><b>Work Permit in Country:</b> <?php echo $row3['Work_Permit_in_Country'];?></li>
				  	       			 		<li><b>Physically Challenged:</b> <?php echo $row3['Physically_Challenged'];?></li>
				  	       			 		<li><b>Category:</b> <?php echo $row3['Category'];?></li>
				  	       			 		<li><b>Description:</b> <?php echo $row3['Description'];?></li>
				  	       			 		
				  	       				</ul>
				  	       			</td>	
				  	       				
				  	       		
				  	       		
				  	             <?php }?>
		                    
		              		      <?php while($row4 = mysql_fetch_array($viewdata4)){?>
				  	       		
				  	       			<td>
				  	       					
				  	       				<ul>
				  	       			 		<center><b>Languages Known</b></center>
				  	       			 		
				  	       			 		<hr style="margin-bottom: 40px;">
				  	       			 		
				  	       			 		<li><b>Language:</b> <?php echo $row4['lname'];?></li>
				  	       			 		<li><b>Proficency:</b> <?php echo $row4['proficency'];?></li>
				  	       			 		<li><b>Read:</b> <?php echo $row4['read'];?></li>
				  	       			 		<li><b>Write:</b> <?php echo $row4['write'];?></li>
				  	       			 		<li><b>Speak:</b> <?php echo $row4['speak'];?></li>
				  	       			 		
				  	       				</ul>
				  	       			</td>	
				  	       				
				  	             <?php }?>
		
		              				</tr>						
				  	       </table>  
				  </form>
			</center> 
		</div>
		
		<?php include(ADDTEMPLATE.'admin_footer.php');?>
		<div class="clr"></div>
    </body>
</html>