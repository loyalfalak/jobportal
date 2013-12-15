<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'employe_registration_Class.php');
include(MODEL .'industry_Class.php');
include(MODEL .'country_Class.php');
include(MODEL .'location_Class.php');
	
# Creating Object variable of employe_registration class file
	$objemploye_registration = new employe_registration();
	
# Creating Object variable of industry class file
	$objindustry = new industry();
	
if(isset($_POST['submit']) && $_POST['submit'] != ''){
    $objemploye_registration->insert_employe_registration($_POST);
}else{
    $viewdata3 = $objindustry->select_industry();	
}

# Creating Object variable of Country class file
	$objCountry = new Country();
	$viewdata5 = $objCountry->select_country();

# Object of Location
	$objlocation = new location();
	$viewlocation = $objlocation->select_location();
	
include(VIEW.'employe_registration.php');
?>