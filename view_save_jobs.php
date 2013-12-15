<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'save_jobs_Class.php');
include(MODEL.'industry_Class.php');
include(MODEL.'function_Class.php');
include(MODEL .'country_Class.php');
include(MODEL .'location_Class.php');

# Creating Object variable of save_jobs class file
$objsave_jobs = new save_jobs();  

$id	= $_SESSION['uid'];
$viewdata = $objsave_jobs->select_save_jobs($id);

# Creating Object variable of industry class file
$objindustry = new industry();  

# Creating Object variable of functionn class file
$objfunctionn = new functionn(); 

# Creating Object variable of Country class file
$objCountry = new Country();
	
# Creating Object variable of location class file
$objlocation = new location();
	 	   
include(VIEW.'view_save_jobs.php');
?>