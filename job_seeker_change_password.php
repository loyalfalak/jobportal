<?php
# Common file to include config, path and starting PHP session  
include('include/common.php');

# Include Class file
include(MODEL.'job_seeker_change_password_Class.php');

# Creating Object variable of job_seeker_change_password class file  
$objjob_seeker_change_password = new job_seeker_change_password();

$id = $_SESSION['uid'];
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$objjob_seeker_change_password->update_job_seeker_change_password($_POST,$id);
}

include(VIEW.'job_seeker_change_password.php');
?>
