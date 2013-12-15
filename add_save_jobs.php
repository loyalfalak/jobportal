<?php
/*
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'save_jobs_Class.php');

# Creating Object variable of save_jobs class file
$objsave_jobs = new save_jobs();  

if(isset($_POST['submit']) && $_POST['submit'] != ''){	
	$id 		= $_GET['id'];
	$sesid 		= $_SESSION['uid'];
  	$objsave_jobs->insert_save_jobs($id,$sesid);
}
 
include(VIEW.'view_post_jobs_more_details.php');
 */
?>