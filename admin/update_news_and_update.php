<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'news_and_updateClass.php');

# Creating Object variable of news_updates class file
$news_updates = new news_updates();

$id = $_GET['id'];
$viewsdata = $news_updates->select_news($id);
if(isset($_POST['update'])){
	$title  = $_POST['news_title'];
	$new 	= $_POST['news'];
	$news_updates->news_update($id,$title,$new);
}
include(ADVIEW .'update_news_and_update.php');
?>