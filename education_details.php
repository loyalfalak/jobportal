<?php
# Common file to include config, path and starting PHP session  
include('include/common.php');

# Include Class file
include(MODEL.'education_details_Class.php');
include(MODEL.'work_experience_Class.php');
include(MODEL.'preffered_location_Class.php');
include(MODEL.'specilization_Class.php');
include(MODEL.'university_institute_Class.php');

# Creating Object variable of education_details class file
$objeducation_details = new education_details();

# Creating Object variable of work_experience class file
$objwork_experience = new work_experience();
  
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	# Assignig last user insert id to Session variable	
	$uid = $_SESSION['last_uid']; 
	$objeducation_details->insert_education_details($_POST,$uid);
}  

if(isset($_POST['submit']) && $_POST['submit'] != ''){
	# Assignig last user insert id to Session variable
	$uid = $_SESSION['last_uid'];	
	$objwork_experience->insert_work_experience($_POST,$uid);
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
	  
include(VIEW.'education_details.php');
?>