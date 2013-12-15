<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Job Portal</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
	
	<div class="wrapper">
		
 <!------------------Start of Header---------------------------------------------->
		
		 <?php include(TEMPLATE.'job_seeker_header.php');?> 
 <!------------------End of Header and Start Search---------------------------------------------->
	      	 
 <!------------------End of Search and Start Menubar---------------------------------------------->	 
	   
	    <?php include(TEMPLATE.'job_seeker_menubar.php');?>
 <!--------------------------------End of Menubar and Start Content----------------------------------->
	   
	    <div class="content1">
	    	
	     <?php include(TEMPLATE.'job_seeker_leftbar.php');?>
	  		     
	    </div>
		
		
	     <div class="clr">
	     </div>	 
	</div>
	 <!--------------------------------End of Content and Start Footer-----------------------------------> 
	  <?php include(TEMPLATE.'footer.php');  ?>
</body>
</html>