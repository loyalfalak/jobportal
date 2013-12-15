<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'preffered_job_Class.php');
include(MODEL .'industry_Class.php');
include(MODEL .'function_Class.php');
include(MODEL .'location_Class.php');

# Creating Object variable of preffered_job class file
$objpreffered_job = new preffered_job();
 
	$id = $_SESSION['uid'];
	$viewdata = $objpreffered_job->select_preffered_job($id);
  
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$id = $_SESSION['uid'];  	
    $objpreffered_job->update_preffered_job($_POST,$id);
}

# Object of industry class to insert user industry data
	$objindustry = new industry();
	$viewdata3 = $objindustry->select_industry();	
	
# Object of job function
	$objfunction = new functionn();
	$viewdata4 = $objfunction->select_function();	  

# Object of Location
	$objlocation = new location();
	$viewlocation = $objlocation->select_location();

include(VIEW.'update_preferred_job_profile.php');
?>