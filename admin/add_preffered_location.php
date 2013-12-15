<?php 

include('../include/common.php');

include(MODEL .'preffered_location_Class.php');
	
$objpreffered_location = new preffered_location();
   
if(isset($_POST['submit'])){
	$preffered_location =  $_POST['preffered_location'];
	$objpreffered_location->insert_preffered_location($preffered_location); 
}

include(ADVIEW .'add_preffered_location.php');
?>






