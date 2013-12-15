<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'post_jobs_Class.php');

# Creating Object variable of post jobs class file
$objpost_jobs = new post_jobs();  
  
  $id = $_GET['did'];
  $viewdata = $objpost_jobs->delete_post_jobs($id);
  
?>