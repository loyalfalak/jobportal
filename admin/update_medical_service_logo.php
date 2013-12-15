<?php 

include('../include/common.php');

include(MODEL.'medical_Class.php');

$id = $_GET['uid'];
$objmedical = new medical();
$view = $objmedical->select_medical_id($id);

if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$logo = $_FILES['logo']['name'];
	if(isset($_FILES['logo']['name'])){
		$_array = array('jpg', 'jpeg', 'gif', 'bmp', 'png');
		$_extn = strtolower(substr($_FILES['logo']['name'], strpos($_FILES['logo']['name'], ".") + 1));
		if(in_array($_extn, $_array) && ($_FILES['logo']['size'] < (1024 * 1024))) {
			move_uploaded_file($_FILES['logo']['tmp_name'], "images/" . $_FILES['logo']['name']);
			//object call the function...........//
			$_msg = "Your image is successsfully upload";
		}else{
			$_msg = "file extension is not valid or too large";
		}
	 		$objmedical->update_medical_logo($id,$logo);
	}else{
			$_msg = "please select file first";
	}
}

include(ADVIEW .'update_medical_service_logo.php');
?>






