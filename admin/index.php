<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'adminClass.php');

# Creating Object variable of admin class file
$objS = new admin();

if(isset($_POST['login']))
{
	$username = $_POST['admin_name'];
	$password = $_POST['admin_password'];
	$lgin = $objS->selectlogin($username,$password);
	if(isset($lgin)){
		$_SESSION['admin'] = $lgin;
		header('location:login.php');
		exit;
	}else{
		$msg = 'invalid username or pasword';
	}
}

if(isset($_SESSION['admin'])){
	header('location:login.php');
}

include(ADVIEW .'index.php');
?>