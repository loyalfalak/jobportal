<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'default_applications_Class.php');

# Creating Object variable of default_applications class file
	$objdefault_applications = new default_applications();  
	$viewdata = $objdefault_applications->select_default_applications();
  
include(VIEW.'view_default_applications.php');
?>