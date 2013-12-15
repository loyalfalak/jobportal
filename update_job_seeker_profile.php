<?php
# Common file to include config, path and starting PHP session  
include('include/common.php');

# Include Class file   
include(MODEL.'registration_Class.php');
include(MODEL .'country_Class.php');
include(MODEL .'location_Class.php');
	
# Creating Object variable of registration class file  
	$objregistration = new registration(); 
   
	$id = $_SESSION['uid'];
	$viewdata = $objregistration->select_jobseeker_registration($id);	

if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$objregistration->update_job_seeker_registration($_POST,$id);
}	

# Creating Object variable of Country class file
	$objcountry = new Country();
	$viewdata5 = $objcountry->select_country();  

# Creating Object variable of location class file
	$objlocation = new location();
	$viewdata6 = $objlocation->select_location();	 	 

include(VIEW.'update_job_seeker_profile.php');
?>