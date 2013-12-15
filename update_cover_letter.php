<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'cover_letter_Class.php');

# Creating Object variable of cover_letter class file
$objcover_letter = new cover_letter();  
  
  $id = $_SESSION['uid'];
  $viewdata = $objcover_letter->select_cover_letter($id);
  
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$user_status = $objcover_letter->check_user_id($id);
	
	if(isset($user_status) && $user_status == 'new'){
		$objcover_letter->insert_cover_letter($_POST,$id);		
	}else{	
		$objcover_letter->update_cover_letter($_POST,$id);
	}
}

include(VIEW.'update_cover_letter.php');

?>

