<div class="header">
  <?php
	$query="SELECT `logo` from `logo`";
	$_result=mysql_query($query) or die('can not select'.mysql_error());
    	$row=mysql_fetch_array($_result);
   ?>
	<div class="logo">
 	   <img src="admin/images/<?php echo $row['logo'];?>" />
	</div>
	<div class="header_midpart">
 	   <p><b>Nationwide Healthcare Provider</b></p>
	</div>	   
 	<div class="header_rightpart"> 
        <?php if(isset($_SESSION['company_id']) && $_SESSION['company_id'] != ''){
					$id=$_SESSION['company_id'];
					$query="SELECT `company_name` FROM `company_details` WHERE `company_id`='$id'";
					$result =mysql_query($query);
					if($result){
						$row= mysql_fetch_array($result);	
						echo "<b>Welcome,</b>"." ";	
						echo $row['company_name'];
					}else{
						die('can not select'.mysql_errno());
					}
			   }
			?>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
		<a href="logout.php" style="color: #ffffff;text-decoration: none;">Logout</a>
      	 <p><h3><b>24HR</b> | Call:0208 731 5972</h3></p>		 	 	  
 	</div> 	   
</div>
