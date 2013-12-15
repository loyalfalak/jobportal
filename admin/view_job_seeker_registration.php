<?php
# Common file to include config, path and starting PHP session 
include('../include/common.php');

# Include Class file
include(MODEL.'registration_Class.php');
include(MODEL.'country_Class.php');

# Object of registration Class
	$objjob_seeker_registration = new registration();
	$viewdata = $objjob_seeker_registration->select_job_seeker_profile();

# Object of Country Class
	$objcountry = new Country();

include(ADVIEW .'view_job_seeker_registration.php');
?>