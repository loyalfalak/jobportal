<?php
# Common file to include config, path and starting PHP session 
include('include/common.php');

# Include Class file
include(MODEL .'medical_Class.php');	
include(MODEL .'health_care_Class.php');
include(MODEL.'search_jobs_Class.php');

# Creating Object variable of search_jobs class file
$objsearch_jobs = new search_jobs();  

if(isset($_POST['submit1']) && $_POST['submit1'] == 'Find Jobs'){
	$viewsearch  = $objsearch_jobs->select_key_words_search_jobs($_POST);	
}else{
	$viewsearch  = $objsearch_jobs->select_key_words_jobs();
}

# Creating Object variable of class file   
$objmedical = new medical();
$viewimage = $objmedical->select_medical();

# Creating Object variable of class file	
$objhealth_care = new health_care();
$viewimage1 = $objhealth_care->select_health_care();

include(VIEW.'index.php');
?>