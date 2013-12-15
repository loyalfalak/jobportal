<?php
# Common file to include config, path and starting PHP session 
include('../include/common.php');

# Include Class file
include(MODEL .'health_care_Class.php');

# Creating Object variable of class file
$objhealth_care = new health_care();

$id = $_GET['did'];
$objhealth_care->delete_health_care($id);

?>