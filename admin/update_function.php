<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'function_Class.php');
	
# Creating Object variable of functionn class file
$objfunctionn = new functionn();

$id = $_REQUEST['uid'];
$result = $objfunctionn->select_function_id($id);
	   
if(isset($_POST['submit']) && $_POST['submit'] != ''){
$function = $_POST['function'];
$objfunctionn->update_function($function,$id); 
}

include(ADVIEW . 'update_function.php');
?>
