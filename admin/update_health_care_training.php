<?php 
# Common file to include config, path and starting PHP session	
include('../include/common.php');

# Include Class file    
include(MODEL.'health_care_Class.php');

# Creating Object variable of health_care class file
$objhealth_care = new health_care();
	
$view = $objhealth_care->select_health_care_id();
	
if(isset($_POST['submit']) && $_POST['submit'] != ''){
$title 		= $_POST['title'];
$subtitle 	= $_POST['sub_title'];
$objhealth_care->update_health_care($title,$subtitle);
}
include(ADVIEW .'update_health_care_training.php');
?>






