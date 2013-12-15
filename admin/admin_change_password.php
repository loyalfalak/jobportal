<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

if(isset($_SESSION['admin'])){
	
# Include Class file	
include(MODEL.'adminClass.php');

# Creating Object variable of admin class file
$objadmin = new admin();

$id=$_SESSION['admin'];

if(isset($_POST['update']) && $_POST['update'] != ''){
	$new_password = $_POST['new_password'];
	$objadmin->update_admin_password($new_password,$id);
}

include(ADVIEW.'admin_change_password.php');
}else{
 header('location:index.php');
 exit;
}
?>

