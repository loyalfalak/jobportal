<?php

include('../include/common.php');

include(MODEL.'registration_Class.php');

$objregistration = new registration();
 
$id = $_GET['did'];
$objregistration->registration_delete($id);
 
?>