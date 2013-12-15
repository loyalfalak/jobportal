<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');	

# Include Class file
include(MODEL . 'news_and_updateClass.php');

# Creating Object variable of news_updates class file
$objselect_news = new news_updates();
$viewsdata=$objselect_news->select_news_updates();

include(ADVIEW  . 'view_news_and_update.php');
?>