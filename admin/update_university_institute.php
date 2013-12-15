<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'university_institute_Class.php');

# Creating Object variable of university_institute class file   
$objuniversity_institute = new university_institute();
	
	$id = $_REQUEST['uid'];
	$result = $objuniversity_institute->select_university_institute_id($id);

if(isset($_POST['submit'])){
	$university_institute = $_POST['university_institute'];
	$objuniversity_institute->update_university_institute($university_institute,$id); 
}

include(ADVIEW .'update_university_institute.php');
?>
