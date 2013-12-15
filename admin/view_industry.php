<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'industry_Class.php');

# Creating Object variable of industry class file	
$objindustry = new industry();
$viewdata = $objindustry->select_industry();	  
	
include(ADVIEW .'view_industry.php');
?>