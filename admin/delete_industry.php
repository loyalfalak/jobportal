<?php
# Common file to include config, path and starting PHP session  
include('../include/common.php');

# Include Class file
include(MODEL.'industry_Class.php');

# Creating Object variable of class file
$objindustry = new industry();

$id = $_GET['did'];
$objindustry->delete_industry($id);
	 
?>