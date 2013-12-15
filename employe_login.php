<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'employe_registration_Class.php');
  
  # Creating Object variable of employe_registration class file
  $objemploye_registration = new employe_registration();
  
if(isset($_POST['login']) && $_POST['login'] != ''){
	$email 		= $_POST['email'];
	$password	= $_POST['password'];
	$lgin = $objemploye_registration->select_employe_registration($email,$password);
	if(isset($lgin)){
		$_SESSION['company_id'] =  $lgin;
		header('location:update_employe_profile.php');
		exit;
	}else{
		$msg = 'invalid username or pasword';
	}
	if(isset($_SESSION['company_id'])){
		header('location:update_employe_profile.php');
	}
}

include(VIEW.'employe_login.php');
?>