<?php
# Common file to include config, path and starting PHP session 
include('include/common.php');

# Include Class file
include(MODEL.'page_Class.php');

$id=$_GET['id'];

# Creating Object variable of class file
$objpages = new pages();

$viewcontent = $objpages->select_pages($id);

include(VIEW.'page.php');
?>