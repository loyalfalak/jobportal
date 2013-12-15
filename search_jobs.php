<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'search_jobs_Class.php');
include(MODEL.'industry_Class.php');
include(MODEL.'function_Class.php');
include(MODEL.'country_Class.php');
include(MODEL.'location_Class.php');

# Creating Object variable of search_jobs class file
$objsearch_jobs = new search_jobs();  

if(isset($_POST['submit']) && $_POST['submit'] == 'Search'){
	$viewsearch  = $objsearch_jobs->select_search_jobs($_POST);	
}else{
	$viewsearch  = $objsearch_jobs->select_jobs();
}

# Creating Object variable of industry class file 
$objindustry = new industry();
$viewdata3 = $objindustry->select_industry();	

# Creating Object variable of functionn class file 
$objfunction = new functionn();
$viewdata4 = $objfunction->select_function();	  

# Creating Object variable of Country class file
$objCountry = new Country();
$viewdata5 = $objCountry->select_country();

# Creating Object variable of location class file
$objlocation = new location();
$viewdata6 = $objlocation->select_location();	 	 

include(VIEW.'search_jobs.php');
?>