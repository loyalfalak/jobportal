<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>CCS Concept Care Solution</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<div class="wrapper">
	 		<!--Start of Header-->
		 	<?php include(TEMPLATE.'header.php');?> 
			
				<table>
					<?php while($row=mysql_fetch_array($viewimg)) {?>
					<tr>
						<td><img src="images/<?php echo $row['contact_us_images'];?>" height="250px" width="997px" /></td>
					</tr>
					<?php } ?>
				</table>
			
			<!--Start Of Menubar-->	 
	    	<?php include(TEMPLATE.'menubar.php');?>
	   
		<div class="content">
			<h2 style="color: #189DE1;">Contact Us</h2>
			<hr style="margin-top: 10px;margin-bottom: 10px; width: 780px; color:#f0f0f0;" />
				<table style="margin-top: 20px;">
					<?php while($row=mysql_fetch_array($viewcontent)) {?>
					<tr>
						 <td><?php echo $row['contact_us_data'];?></td>
					</tr>
					<?php } ?>
				</table>  
				<form name="contact" method="post" class="form" onsubmit="return contact_validate();">
					<table style="margin-left: 230px;" cellspacing="5">
						<tr>
							<th style="text-align: left;">Name</th>
							<td><input type="text" name="Name1" value="" id="name" style="height: 25px;width: 160px;" /></td>
						</tr>
						<tr>
							<th style="text-align: left;">Mobile</th>
							<td><input type="text" name="Mobile" value="" id="mobile" style="height: 25px;width: 160px;" /></td>
						</tr>
						<tr>
							<th style="text-align: left;">Email</th>
							<td><input type="text" name="Email" value="" id="email" style="height: 25px;width: 160px;"  /></td>
						</tr>
						<tr>
							<th style="text-align: left;">Address</th>
							<td><textarea name="address" cols="18" rows="4" id="address"></textarea></td>
						</tr>
						<tr>
							<th style="text-align: left;">Comment</th>
							<td><textarea name="comment"  cols="18" rows="4" id="comment"></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Submit" class="btn7"/></td>
						</tr>
					</table>
				    <br/>
				</form>
			</div>
		
			<!--Start Middle Rightbar-->
	 		<?php include(TEMPLATE.'middle_rightbar.php');  ?> 	
	     	<div class="clr">
	     	</div>	 
		</div>
			<!--Start Footer-->
			<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>