<?php 
# Common file to include config, path and starting PHP session 
include('../include/common.php');

# Include Class file
include(MODEL.'file_Class.php');

# Creating Object variable of files class file
$objfile = new files();
$result = $objfile->select_file();
	 
include(ADVIEW .'view_file.php');
?>