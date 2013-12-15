<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'university_institute_Class.php');

# Creating Object variable of university_institute class file	
$objuniversity_institute = new university_institute();
	   
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$university_institute =  $_POST['university_institute'];
	$objuniversity_institute->insert_university_institute($university_institute); 
}

include(ADVIEW . 'add_university_institute.php');
?>






