<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'default_applications_Class.php');

# Creating Object variable of cover_letter class file
$objdefault_applications = new default_applications();  
  
  $id = $_SESSION['uid'];
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$objdefault_applications->add_default_applications($_POST,$id);
}

include(VIEW.'add_default_applications.php');
?>