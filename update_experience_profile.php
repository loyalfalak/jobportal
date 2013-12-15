<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'work_experience_Class.php');

# Creating Object variable of registration class file
$objwork_experience = new work_experience();
	
	$id = $_SESSION['uid'];
   	$viewdata = $objwork_experience->select_work_experience_profile($id);
  
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$objwork_experience->update_work_experience_profile($_POST,$id);
}  

include(VIEW.'update_experience_profile.php');
?>