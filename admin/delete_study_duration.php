<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'study_duration_Class.php');

# Creating Object variable of class file
$objstudy_duration = new study_duration();

$id = $_GET['did'];
$result = $objstudy_duration->delete_study_duration($id);

?>