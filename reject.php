<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'apply_now_Class.php');

# Creating Object variable of post jobs class file
$objupdate_status = new apply_now();  

	$id = $_GET['id'];
  	$objupdate_status->reject_status($id);
 
?>