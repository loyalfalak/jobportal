<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'it_skills_Class.php');

# Creating Object variable of it_skills class file
$objit_skills = new it_skills();  
  
  $id = $_SESSION['uid'];
  $viewdata = $objit_skills->select_it_skills($id);
  
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$objit_skills->update_it_skills($_POST,$id);
}

include(VIEW.'update_it_skills.php');

?>