<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'franchise_Class.php');

# Creating Object variable of class file
$objfranchise = new franchise();
	$id=$_GET['did'];
	$objfranchise->delete_franchise($id);

include(ADVIEW .'view_franchise.php');
?>




