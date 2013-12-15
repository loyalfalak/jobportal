<?php
# Common file to include config, path and starting PHP session 
include('../include/common.php');

# Include Class file
include(MODEL .'country_Class.php');

# Creating Object variable of Country class file
$objCountry = new Country();
	
if(isset($_POST['submit'])){
	$country = $_POST['country_name'];
	$objCountry->insert_country($country);	
}
include(ADVIEW . 'add_country.php');
?>






