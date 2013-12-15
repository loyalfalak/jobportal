<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'location_Class.php');

# Creating Object variable of location class file
$objlocation = new location();

$id=$_GET['uid'];
if(isset($_POST['submit'])){
	$country = $_POST['country_name'];
	$location = $_POST['location_name'];
	$objlocation->update_location($id,$country,$location);	
}else{
	$view = $objlocation->select_location1($id);
    $country = $objlocation->select_country($id);
}

include(ADVIEW . 'update_location.php');
?>






