<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'post_jobs_Class.php');

# Creating Object variable of post jobs class file
$objpost_jobs = new post_jobs();  

if (isset($_GET['createId'])) {
    $_createid = $_GET['createId'];
    $objpost_jobs->createApprove($_createid);
} else if (isset($_GET['removeId'])) {
    $_removeid = $_GET['removeId'];
    $objpost_jobs->_Disapprove($_removeid);
}

?>