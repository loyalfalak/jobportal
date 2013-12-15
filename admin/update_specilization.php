<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'specilization_Class.php');

# Creating Object variable of specilization class file
$objspecilization = new specilization();

$id = $_REQUEST['uid'];
$result = $objspecilization->select_specilization_id($id);
   
if(isset($_POST['submit'])){
 $specilization = $_POST['specilization'];
 $objspecilization->update_specilization($specilization,$id); 
}

include(ADVIEW .'update_specilization.php');
?>
