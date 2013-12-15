<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'location_Class.php');
	
	# Creating Object variable of location class file
	$objlocation = new location();
	$result = $objlocation->select_country();
	
if(isset($_POST['submit'])){
	$country = $_POST['country_name'];
	$location = $_POST['location_name'];
	$objlocation->insert_location($country,$location);	
}
	
include(ADVIEW.'add_location.php');
?>






