<?php
# Common file to include config, path and starting PHP session  
include('../include/common.php');

if(isset($_SESSION['admin'])){
	
	# Include Class file
	include(MODEL.'contact_us_Class.php');
	
	# Creating Object variable of contact_us class file
	$objcontact_us = new contact_us();

		$viewdata = $objcontact_us->select_contact_us();
	
	include(ADVIEW .'view_contact_us.php');
}else{
header('location:index.php');
exit;
}
?>