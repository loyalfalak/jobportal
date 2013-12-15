<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'industry_Class.php');

# Creating Object variable of class file	
$objindustry = new industry();

if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$industry = $_POST['industry'];
    $objindustry->insert_industry($industry); 
}

include(ADVIEW . 'add_industry.php');
?>






