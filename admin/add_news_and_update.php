<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL . 'news_and_updateClass.php');

# Creating Object variable of class file
$news_updates = new news_updates();

if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$title = $_POST['news_title'];
	$description = $_POST['news'];
	$news_updates->insert_news_updates($title,$description);
}

include(ADVIEW  . 'add_news_and_update.php');
?>