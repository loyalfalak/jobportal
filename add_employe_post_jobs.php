<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'post_jobs_Class.php');
include(MODEL .'industry_Class.php');
include(MODEL .'function_Class.php');
include(MODEL .'country_Class.php');
include(MODEL .'location_Class.php');

# Creating Object variable of post jobs class file
$objpost_jobs = new post_jobs();  
  
 	 $id = $_SESSION['company_id'];

if(isset($_POST['submit']) && $_POST['submit'] != ''){
 	 $objpost_jobs->insert_post_jobs($_POST,$id);
}else{
		
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

}
include(VIEW.'add_employe_post_jobs.php');

?>