<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'contact_us_Class.php');

# Creating Object variable of class file
$objcontact_us = new contact_us();

$id=$_GET['did'];
$objcontact_us->delete_contact_us($id);

include(ADVIEW .'view_contact_us.php');


?>




