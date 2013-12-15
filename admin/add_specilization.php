<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'specilization_Class.php');

# Creating Object variable of specilization class file
$objspecilization = new specilization();
   
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$specilization =  $_POST['specilization'];
	$objspecilization->insert_specilization($specilization); 
}

include(ADVIEW . 'add_specilization.php');
?>






