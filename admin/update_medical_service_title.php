<?php 

include('../include/common.php');

include(MODEL.'medical_Class.php');

$id = $_GET['uid'];
$objmedical = new medical();
$view = $objmedical->select_medical_id($id);

if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$title = $_POST['title']; 		
	$objmedical->update_medical_title($id,$title);
}

include(ADVIEW .'update_medical_service_title.php');
?>






