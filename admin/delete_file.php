<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'file_Class.php');

# Creating Object variable of class file
$objfile = new files();

$id = $_GET['did'];
$result = $objfile->delete_file($id);
	 
?>