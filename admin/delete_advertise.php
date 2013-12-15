<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'advertise_Class.php');
	
# Creating Object variable of class file
$objadvertise = new advertise();

$id = $_GET['id'];
$objadvertise->delete_advertise($id);
	
	
?>






