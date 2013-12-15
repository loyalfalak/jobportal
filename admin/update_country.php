<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'country_Class.php');

# Creating Object variable of Country class file
$objCountry = new Country();

$id=$_GET['uid'];
$view = $objCountry->select_country1($id);

if(isset($_POST['submit'])){
	$country = $_POST['country_name'];
	$objCountry->update_country($id,$country);	
}

include(ADVIEW . 'update_country.php');
?>






