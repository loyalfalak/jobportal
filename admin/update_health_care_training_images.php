<?php 
# Common file to include config, path and starting PHP session	
include('../include/common.php');

# Include Class file    
include(MODEL.'health_care_Class.php');

# Creating Object variable of health_care class file
$objhealth_care = new health_care();
	
$id = $_GET['uid'];
$view = $objhealth_care->select_health_care_id($id);
	
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$image = $_FILES['photo']['name'];
	if(isset($_FILES['photo']['name'])){
		$_array = array('jpg', 'jpeg', 'gif', 'bmp', 'png');
		$_extn = strtolower(substr($_FILES['photo']['name'], strpos($_FILES['photo']['name'], ".") + 1));
		if(in_array($_extn, $_array) && ($_FILES['photo']['size'] < (1024 * 1024))) {
			move_uploaded_file($_FILES['photo']['tmp_name'], "images/" . $_FILES['photo']['name']);
			//object call the function...........//
			$_msg = "Your image is successsfully upload";
		}else{
			$_msg = "file extension is not valid or too large";
		}
	 		$objhealth_care->update_health_care_image($image);
	}else{
			$_msg = "please select file first";
	}
}
include(ADVIEW .'update_health_care_training_images.php');
?>






