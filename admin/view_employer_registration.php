<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'employe_registration_Class.php');
include(MODEL .'industry_Class.php');
include(MODEL .'location_Class.php');

# Object of registration Class
	$objemploye_registration = new employe_registration();
	$viewdata = $objemploye_registration->select_employe_profile();

# Object of industry Class 
	$objindustry = new industry();

# Object of Location Class
	$objlocation = new location();

include(ADVIEW .'view_employer_registration.php');
?>