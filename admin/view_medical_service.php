<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'medical_Class.php');	

# Creating Object variable of medical class file
$objmedical = new medical();
$viewimage = $objmedical->select_medical();

include(ADVIEW.'view_medical_service.php');
?>
