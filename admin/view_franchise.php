<?php
# Common file to include config, path and starting PHP session 
include('../include/common.php');
 
if(isset($_SESSION['admin'])){
 	
	# Include Class file
	include(MODEL.'franchise_Class.php');

	# Creating Object variable of franchise class file
	$objfranchise = new franchise();
	
	$viewdata = $objfranchise->select_franchise();
  
include(ADVIEW .'view_franchise.php');
}else{
header('location:index.php');
exit;
}
?>