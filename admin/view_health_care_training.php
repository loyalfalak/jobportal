<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'health_care_Class.php');	

# Creating Object variable of health_care class file
$objhealth_care = new health_care();
$viewimage = $objhealth_care->select_health_care();
	
include(ADVIEW.'view_health_care_training.php');
?>
