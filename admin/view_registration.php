<?php
include('../include/common.php');
 
if(isset($_SESSION['admin'])){
include(MODEL.'registration_Class.php');

$objregistration = new registration();
$viewdata = $objregistration ->select_registration();
 
include(ADVIEW .'view_registration.php');
}else{
header('location:index.php');
exit;
}
?>