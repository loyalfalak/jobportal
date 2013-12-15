<?php 
# Common file to include config, path and starting PHP session 
include('../include/common.php');

# Include Class file
include(MODEL .'location_Class.php');

# Creating Object variable of location class file
$objlocation = new location();

$id=$_GET['did'];	
$objlocation->delete_location($id);	
?>






