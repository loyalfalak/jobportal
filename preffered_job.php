<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'preffered_job_Class.php');
include(MODEL.'registration_Class.php');
include(MODEL.'language_profile_Class.php');
include(MODEL .'industry_Class.php');
include(MODEL .'function_Class.php');
include(MODEL .'location_Class.php');
include(MODEL .'country_Class.php');

# Creating Object variable of preffered_job class file
$objpreffered_job = new preffered_job();

# Creating Object variable of registration class file  
$objregistration = new registration(); 

# Creating Object variable of language_profile class file
$objlanguage_profile = new language_profile();  

if(isset($_POST['submit']) && $_POST['submit'] != ''){
    # Assignig last user insert id to Session variable
    $uid = $_SESSION['last_uid'];
	$objpreffered_job->insert_preffered_job($_POST,$uid);
}

if(isset($_POST['submit']) && $_POST['submit'] != ''){
	# Assignig last user insert id to Session variable
	$uid = $_SESSION['last_uid'];
	$objregistration->update_personal_details($_POST,$uid);
}	
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	# Assignig last user insert id to Session variable
	$uid = $_SESSION['last_uid'];
	$objlanguage_profile->insert_language_profile($_POST,$uid);
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

# Object of Country
	$objcountry = new Country();
	$viewcountry = $objcountry->select_country();  


include(VIEW.'preffered_job.php');
?>