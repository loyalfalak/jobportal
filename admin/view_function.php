<?php
# Common file to include config, path and starting PHP session   
include('../include/common.php');

# Include Class file
include(MODEL .'function_Class.php');

# Creating Object variable of functionn class file	
$objfunction = new functionn();
$viewdata = $objfunction->select_function();	  
	
include(ADVIEW .'view_function.php');
?>