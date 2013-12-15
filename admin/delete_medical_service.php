<?php
# Common file to include config, path and starting PHP session 
include('../include/common.php');

# Include Class file
include(MODEL .'medical_Class.php');

# Creating Object variable of class file
$objmedical = new medical();

$id = $_GET['did'];
$objmedical->delete_medical($id);
		
?>