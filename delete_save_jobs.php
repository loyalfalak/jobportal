<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'save_jobs_Class.php');

# Creating Object variable of post jobs class file
$objsave_jobs = new save_jobs();  

	$id = $_GET['id'];
  	$objsave_jobs->delete_save_jobs($id);
 
?>