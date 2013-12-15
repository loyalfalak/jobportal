<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'default_applications_Class.php');

# Creating Object variable of default_applications class file
$objdefault_applications = new default_applications();  
  
	$id = $_GET['id'];
 	$viewdata = $objdefault_applications->select_default_applications_id($id);

if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$objdefault_applications->update_default_applications($_POST,$id);
}

include(VIEW.'update_default_applications.php');
?>