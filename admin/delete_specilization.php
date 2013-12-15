<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'specilization_Class.php');

# Creating Object variable of class file
$objspecilization = new specilization();

$id = $_GET['did'];
$result = $objspecilization->delete_specilization($id);

?>