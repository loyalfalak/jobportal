<?php 

include('../include/common.php');

include(MODEL.'medical_Class.php');

$id = $_GET['uid'];
$objmedical = new medical();
$view = $objmedical->select_medical_id($id);

if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$image = $_FILES['image']['name'];
	if(isset($_FILES['image']['name'])){
		$_array = array('jpg', 'jpeg', 'gif', 'bmp', 'png');
		$_extn = strtolower(substr($_FILES['image']['name'], strpos($_FILES['image']['name'], ".") + 1));
		if(in_array($_extn, $_array) && ($_FILES['image']['size'] < (1024 * 1024))) {
			move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
			//object call the function...........//
			$_msg = "Your image is successsfully upload";
		}else{
			$_msg = "file extension is not valid or too large";
		}
	 		$objmedical->update_medical_image($id,$image);
	}else{
			$_msg = "please select file first";
	}
}

include(ADVIEW .'update_medical_service.php');
?>






