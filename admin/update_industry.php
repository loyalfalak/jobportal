<?php 
# Common file to include config, path and starting PHP session	
include('../include/common.php');

# Include Class file
include(MODEL .'industry_Class.php');

# Creating Object variable of industry class file	
$objindustry = new industry();
	   
$id = $_REQUEST['uid'];	
$result = $objindustry->select_industry_id($id);
	   
if(isset($_POST['submit'])){
	$industry = $_POST['industry'];
	$objindustry->update_industry($industry,$id); 
}

include(ADVIEW . 'update_industry.php');
?>
