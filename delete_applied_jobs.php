<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'apply_now_Class.php');

# Creating Object variable of apply_now class file
$objapply_now = new apply_now();  

	$id = $_GET['id'];
  	$objapply_now->delete_application_jobs($id);
 
?>