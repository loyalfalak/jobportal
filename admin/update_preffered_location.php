<?php 

include('../include/common.php');

include(MODEL.'preffered_location_Class.php');

   $id = $_GET['uid'];
   $objpreffered_location = new preffered_location();
   $result = $objpreffered_location->select_preffered_location_id($id);
	
if(isset($_POST['submit'])){
	$preffered_location = $_POST['preffered_location'];
	$objpreffered_location->update_preffered_location($preffered_location,$id); 
}

include(ADVIEW . 'update_preffered_location.php');
?>
