<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'specilization_Class.php');

# Creating Object variable of specilization class file	
$objspecilization = new specilization();
$viewdata = $objspecilization->select_specilization();	  
	
include(ADVIEW .'view_specilization.php');
?>