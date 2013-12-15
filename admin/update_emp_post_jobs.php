<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'post_jobs_Class.php');
include(MODEL .'industry_Class.php');
include(MODEL .'function_Class.php');
include(MODEL .'country_Class.php');
include(MODEL .'location_Class.php');

# Creating Object variable of post jobs class file
$objpost_jobs = new post_jobs();  
  
 	$id = $_GET['id'];
	$viewdata1 = $objpost_jobs->select_post_jobs_id($id);	

if(isset($_POST['submit']) && $_POST['submit'] != ''){
 	 $objpost_jobs->update_emppost_jobs($_POST,$id);

}else{
		
# Object of industry class to insert user industry data
$objindustry = new industry();
$viewdata3 = $objindustry->select_industry();	

# Object of job function
$objfunction = new functionn();
$viewdata4 = $objfunction->select_function();

# Creating Object variable of Country class file
$objCountry = new Country();
$viewdata5 = $objCountry->select_country();

# Creating Object variable of location class file
$objlocation = new location();
$viewdata6 = $objlocation->select_location();	 	 

}

include(ADVIEW.'update_emp_post_jobs.php');
?>
