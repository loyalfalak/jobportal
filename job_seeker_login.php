<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'registration_Class.php');
  
  # Creating Object variable of registration class file for login process
  $objregistration = new registration();
  
if(isset($_POST['login']) && $_POST['login'] != ''){
	$email 		= $_POST['email'];
	$password	= $_POST['password'];
	 $lgin = $objregistration->select_jobseeker_login($email,$password);
	if(isset($lgin)){
		$_SESSION['uid'] =  $lgin;
		header('location:update_job_seeker_profile.php');
		exit;
	}else{
		$msg = 'invalid username or pasword';
	}
	if(isset($_SESSION['uid'])){
		header('location:update_job_seeker_profile.php');
	}
}

include(VIEW.'job_seeker_login.php');
?>