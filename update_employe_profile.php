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
  
	$id = $_SESSION['company_id'];
	$viewdata = $objemploye_registration->select_employe_registration_details($id);
  
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$objemploye_registration->update_employe_registration($_POST,$id);
}

# Object of industry Class 
	$objindustry = new industry();
	$viewdata3 = $objindustry->select_industry();	

# Creating Object variable of Country class file
	$objCountry = new Country();
	$viewdata5 = $objCountry->select_country();

# Object of Location Class
	$objlocation = new location();
	$viewlocation = $objlocation->select_location();

		
include(VIEW.'update_employe_profile.php');

?>