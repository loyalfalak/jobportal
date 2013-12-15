<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL.'news_and_updateClass.php');

# Creating Object variable of news_updates class file
$objnews = new news_updates();

include(VIEW.'show_news_moredetail.php');

?>