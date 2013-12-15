<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'default_applications_Class.php');

# Creating Object variable of default_applications class file
$objdefault_applications = new default_applications();  
  
	$id = $_GET['did'];
	$objdefault_applications->delete_default_applications($id);
  
?>