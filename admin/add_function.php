<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'function_Class.php');

# Creating Object variable of class file
$objfunctionn = new functionn();
	   
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$function = $_POST['function'];
	$objfunctionn->insert_function($function); 
}

include(ADVIEW . 'add_function.php');
?>






