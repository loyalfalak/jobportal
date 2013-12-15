<?php
# Common file to include config, path and starting PHP session  
include('../include/common.php');

# Include Class file
include(MODEL .'preffered_location_Class.php');

# Creating Object variable of preffered_location class file	
$objpreffered_location = new preffered_location();
$viewdata = $objpreffered_location->select_preffered_location();	  
	
include(ADVIEW .'view_course_name.php');
?>