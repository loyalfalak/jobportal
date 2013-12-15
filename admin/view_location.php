<?php 
# Common file to include config, path and starting PHP session	
include('../include/common.php');

# Include Class file
include(MODEL .'location_Class.php');

# Creating Object variable of location class file
$objlocation = new location();
	
$view = $objlocation->select_location();	

include(ADVIEW . 'view_location.php');

?>






