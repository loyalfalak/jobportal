<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<div class="wrapper">
		<!--Start Header-->		
		 <?php include(TEMPLATE.'header.php');?> 
		
		<?php $row=mysql_fetch_array($viewcontent);?>
			<table>
				<tr>
					 <td><img src="admin/images/<?php echo $row['pageimage'];?>" height="320px" width="996px" /></td>
				</tr>
			</table>
			
		<!--Start Menubar-->
		<?php include(TEMPLATE.'menubar.php');?>
			<div class="content">
				<table style="margin-top: 5px;">
					<tr>
						<td><h2 style="color: #189DE1;"><?php echo $row['pagename'];?></h2></td>
					</tr>
				</table>  
					<hr style="margin-top: 10px;margin-bottom: 10px; width: 780px; color:#f0f0f0;" />
				<table>
					<tr>
				 		<td><?php echo $row['pagecontent'];?></td>
					</tr>
				</table>
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