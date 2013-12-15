<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL.'news_and_updateClass.php');

# Creating Object variable of class file
$news_updates = new news_updates();

$id = $_GET['id'];
$news_updates->news_delete($id);

include(ADVIEW .'delete_news_and_update.php');
?>