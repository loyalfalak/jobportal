<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'franchise_Class.php');

# Creating Object variable of class file 
$objfranchise = new franchise();

$viewcontent = $objfranchise->select_franchise_details();
$viewimg = $objfranchise->select_franchise_images();

if(isset($_POST['submit'])){
	$objfranchise->insert_franchise($_POST);
}

include(VIEW.'franchise.php');
?>