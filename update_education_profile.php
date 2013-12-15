<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'education_details_Class.php');
include(MODEL.'preffered_location_Class.php');
include(MODEL.'specilization_Class.php');
include(MODEL.'university_institute_Class.php');

# Creating Object variable of registration class file
$objeducation_details = new education_details();
  
	$id = $_SESSION['uid'];
	$viewdata = $objeducation_details->select_education_details($id);
  
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$objeducation_details->update_education_details($_POST,$id);
}

# Object of Course class to select course data
	$objcourse = new preffered_location();
	$viewcourse = $objcourse->select_preffered_location();

# Object of Speciization class to select Specilization data
	$objspecilization = new  specilization();
	$viewspecilization = $objspecilization->select_specilization();
	
# Object of University class to select University data
	$objuniversity = new university_institute();
	$viewuniversity = $objuniversity->select_university_institute();

include(VIEW.'update_education_profile.php');
?>