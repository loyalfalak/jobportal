<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'preffered_location_Class.php');

# Creating Object variable of class file
$objpreffered_location = new preffered_location();

$id = $_GET['did'];
$result = $objpreffered_location->delete_preffered_location($id);
	 

?>