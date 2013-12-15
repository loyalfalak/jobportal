<?php
# Common file to include config, path and starting PHP session  
include('include/common.php');

# Include Class file
include(MODEL.'employe_change_password_Class.php');

# Creating Object variable of employe_change_password class file  
$objemploye_change_password = new employe_change_password();
  
	$id = $_SESSION['company_id'];
  
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$objemploye_change_password->update_employe_change_password($_POST,$id);
}

include(VIEW.'employe_change_password.php');

?>