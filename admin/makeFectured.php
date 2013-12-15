<?php
# Common file to include config, path and starting PHP session
include("../include/common.php");

# Include Class file
include(MODEL ."news_and_updateClass.php");

# Creating Object variable of news_updates class file
$objnews_updates = new news_updates();

if(isset($_GET['createId'])){
    $_createid = $_GET['createId'];
    $objnews_updates->_createFeatured($_createid);
}else if (isset($_GET['removeId'])){
    $_removeid = $_GET['removeId'];
    $objnews_updates->_removeFeatured($_removeid);
}


?>