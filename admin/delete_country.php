<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'country_Class.php');

# Creating Object variable of Country class file
$objCountry = new Country();

$id=$_GET['did'];	
$objCountry->delete_country($id);	

?>






