<?php
# Common file to include config, path and starting PHP session 
include('../include/common.php');

# Include Class file  
include(MODEL .'university_institute_Class.php');

# Creating Object variable of university_institute class file	
$objuniversity_institute = new university_institute();
$viewdata = $objuniversity_institute->select_university_institute();	  
	
include(ADVIEW .'view_university_institute.php');
?>