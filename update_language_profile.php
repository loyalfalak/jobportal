<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'language_profile_Class.php');

# Creating Object variable of language_profile class file
$objlanguage_profile = new language_profile();  
  
  $id = $_SESSION['uid'];
  $viewdata = $objlanguage_profile->select_language($id);
  
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$objlanguage_profile->update_language($_POST,$id);
}

include(VIEW.'update_language_profile.php');

?>