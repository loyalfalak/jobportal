<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'apply_now_Class.php');
include(MODEL.'industry_Class.php');
include(MODEL.'function_Class.php');
include(MODEL .'country_Class.php');
include(MODEL .'location_Class.php');

# Creating Object variable of apply_now class file
$objapply_now = new apply_now();  

	$id	= $_SESSION['uid'];
	$viewdata = $objapply_now->select_apply_now($id);

# Creating Object variable of industry class file
$objindustry = new industry();  

# Creating Object variable of functionn class file
$objfunctionn = new functionn(); 

# Creating Object variable of Country class file
$objCountry = new Country();
	
# Creating Object variable of location class file
$objlocation = new location();
  
include(VIEW.'view_apply_jobs.php');
?>