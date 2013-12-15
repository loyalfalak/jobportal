<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'post_jobs_Class.php');
include(MODEL.'industry_Class.php');
include(MODEL.'function_Class.php');
include(MODEL .'country_Class.php');
include(MODEL .'location_Class.php');


# Creating Object variable of post jobs class file
$objpost_jobs = new post_jobs();  

$viewdata = $objpost_jobs->select_post_jobs();

# Creating Object variable of industry class file
$objindustry = new industry();  

# Creating Object variable of functionn class file
$objfunctionn = new functionn();

# Creating Object variable of Country class file
$objCountry = new Country();

# Creating Object variable of location class file
$objlocation = new location();

include(VIEW.'view_employe_post_jobs.php');
?>