<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'apply_now_Class.php');
include(MODEL .'country_Class.php');
include(MODEL .'location_Class.php');
include(MODEL .'course_name_Class.php');
include(MODEL .'specilization_Class.php');
include(MODEL .'university_institute_Class.php');

# Creating Object variable of apply_now class file
 $objapply_now = new apply_now();  

	$id = $_GET['id'];
 	$viewdata = $objapply_now->select_apply_id($id);

# Creating Object variable of Country class file
$objCountry = new Country();

# Creating Object variable of location class file
$objlocation = new location();

# Creating Object variable of specilization class file
$objspecilization = new specilization();

# Creating Object variable of university_institute class file
$objuniversity_institute = new university_institute();

# Creating Object variable of course_name class file
$objcourse_name = new course_name();

include(ADVIEW.'view_emp_apply_jobs.php');
?>