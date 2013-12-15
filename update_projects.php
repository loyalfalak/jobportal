<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'projects_Class.php');

# Creating Object variable of projects class file
$objprojects = new projects();  
  
  $id = $_SESSION['uid'];
  $viewdata = $objprojects->select_projects($id);
  
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$user_status = $objprojects->check_user_id($id);
	if(isset($user_status) && $user_status == 'new'){
		$objprojects->insert_projects($_POST,$id);		
	}else{	
		$objprojects->update_projects($_POST,$id);
	}
}

include(VIEW.'update_projects.php');

?>