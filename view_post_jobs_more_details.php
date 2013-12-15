<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'post_jobs_Class.php');
include(MODEL.'save_jobs_Class.php');
include(MODEL.'apply_now_Class.php');
include(MODEL.'industry_Class.php');
include(MODEL.'function_Class.php');
include(MODEL .'country_Class.php');
include(MODEL .'location_Class.php');

# Creating Object variable of post jobs class file
$objpost_jobs = new post_jobs();  

	$id = $_GET['id'];
  	$viewdata = $objpost_jobs->select_post_jobs_id($id);
 
# Creating Object variable of save_jobs class file
$objsave_jobs = new save_jobs();  

if(isset($_POST['submit']) && $_POST['submit'] != ''){	
	$sesid 		= $_SESSION['uid'];
	$objsave_jobs->insert_save_jobs($id,$sesid);
}

# Creating Object variable of apply_now class file
$objapply_now = new apply_now();  
 
if(isset($_POST['submit1']) && $_POST['submit1'] != ''){	
	$sesid 		= $_SESSION['uid'];
	$objapply_now->insert_apply_now($id,$sesid);
}

# Creating Object variable of industry class file
$objindustry = new industry();  

# Creating Object variable of functionn class file
$objfunctionn = new functionn();

# Creating Object variable of Country class file
$objCountry = new Country();
$objCountry->select_country();
	
# Creating Object variable of location class file
$objlocation = new location();
$objlocation->select_location();	 	   
    
include(VIEW.'view_post_jobs_more_details.php');
?>