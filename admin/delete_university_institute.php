<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'university_institute_Class.php');

# Creating Object variable of class file
$objuniversity_institute = new university_institute();

$id = $_GET['did'];
$result = $objuniversity_institute->delete_university_institute($id);
	 
?>