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
 		
 		<!--Start Menubar-->	 
	    <?php include(TEMPLATE.'menubar.php');?>
	   
	    <div class="content">
	    	 <h2 style="color: #189DE1;">News & Updates</h2>
	    	 <hr style="margin-top: 10px;margin-bottom: 10px; width: 780px; color:#f0f0f0;" />
			<?php
				$select_news = "SELECT * FROM `news_and_update`";
				$result = mysql_query($select_news) or die('no data found'.mysql_error());
				while($row = mysql_fetch_array($result)){ ?>
				<table>
					<tr>
						<th><h3 style="color:red;"><?php echo $row['title'];?></h3></th>
					</tr>
				</table>
				<br>
				<table>	
					<tr>
						<td height="auto" width="700px"><?php echo $row['description'];?></td>
					</tr>
				</table>	
			<?php } ?>
	    </div>
			
			<!-- Start Rightbar-->
	 		<?php include(TEMPLATE.'middle_rightbar.php');  ?> 	
	     	<div class="clr">
	     	</div>	 
	</div>
	
		<!-- Start Footer--> 
		<?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>