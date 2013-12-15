<?php
# Common file to include config, path and starting PHP session	
include('../include/common.php');

if(isset($_SESSION['admin'])){
	
	# Include Class file		
	include(MODEL .'advertise_Class.php');
	
	# Creating Object variable of advertise class file
	$objadvertise = new advertise();
	
	$viewimage = $objadvertise->select_advertise();
	
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$image = $_FILES['photo']['name'];
	if(isset($_FILES['photo']['name'])){
		$_array = array('jpg', 'jpeg', 'gif', 'bmp', 'png');
		$_extn = strtolower(substr($_FILES['photo']['name'], strpos($_FILES['photo']['name'], ".") + 1));
		if(in_array($_extn, $_array) && ($_FILES['photo']['size'] < (1024 * 1024))) {
			move_uploaded_file($_FILES['photo']['tmp_name'], "../images/" . $_FILES['photo']['name']);
			$_msg = "Your image is successsfully uploaded";
		}else{
			$_msg = "file extension is not valid or too large";
		}
		$objadvertise->update_advertise($id,$image);
	}else{
		$_msg = "please select file first";
	}
}
include(ADVIEW.'view_advertise.php');
}else{
header('location:index.php');
exit;

}
?>