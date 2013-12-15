<?php
# Common file to include config, path and starting PHP session 
include('include/common.php');

# Include Class file
include(MODEL.'contact_us_Class.php');

# Creating Object variable of class file 
$objcontact_us = new contact_us();

$viewcontent = $objcontact_us->select_contact_us_details();
$viewimg = $objcontact_us->select_contact_us_images();

if(isset($_POST['submit'])){
	$objcontact_us->insert_contact_us($_POST);
}

include(VIEW.'contact_us.php');
?>