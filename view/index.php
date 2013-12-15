<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<script type="text/javascript" src="library/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="library/jquery.cycle.all.js"></script>
	<script type="text/javascript">
				$('.slider').cycle({
					fx : 'fade',
					delay : -4000
				});
	</script>
</head>
<body>
	<div class="wrapper">
			
			<!--Start of Header-->
			<?php include(TEMPLATE.'header.php');?> 

			<!--Start of Slider-->
			<?php include(TEMPLATE.'slider.php');?> 
 			
			<!--Start of Top Rightbar-->	
			<?php include(TEMPLATE.'top_rightbar.php');?>
	      	 
			<!--Start of Menubar-->
			<?php include(TEMPLATE.'menubar.php');?>

				<div class="content">
					 <div class="content_block">
						<?php while($row = mysql_fetch_array($viewimage)){?>	  
						  <div class="sub_block">
						  		<div class="sub_block_img">
									 <img src="images/<?php echo $row['logo']; ?>"/>
						  		</div>
						  		<div class="sub_block_title">
						  			<b><?php echo $row['title']; ?></b> 	
						  		</div>
						  		<div class="content_img"> 
						 			<img src="images/<?php echo $row['image']; ?>"/>
						  		</div>
						  	</div>
						<?php }?>	
  						</div>
						<div class="content_block">
							<?php while($row1 = mysql_fetch_array($viewimage1)){?>
								<div class="content_middle_block">
									<div class="content_middle_title_block">
										<b><?php echo $row1['title']; ?></b>
										<br>
										<p><?php echo $row1['sub_title']; ?></p>
									</div> 
									<div class="content_middle_block_img"> 
										<img src="images/<?php echo $row1['image']; ?>"/>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
	 			<!--Start of Middlerightbar-->
				<?php include(TEMPLATE.'middle_rightbar.php');  ?> 	
	     	<div class="clr">
	     	</div>	 
	</div>
				<!--Start of Footer-->
				<?php include(TEMPLATE.'footer.php');?>
</body>
</html>