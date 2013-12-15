<?php
# Common file to include config, path and starting PHP session 
include('../include/common.php');

# Include Class file
include(MODEL.'function_Class.php');

# Creating Object variable of class file
$objfunction = new functionn();

$id = $_GET['did'];
$objfunction->delete_function($id);
	 

?>