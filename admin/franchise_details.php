<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
if(isset($_SESSION['admin'])){

# Creating Object variable of franchise class file	
include(MODEL.'franchise_Class.php');

$objfranchise = new franchise();
$viewdata = $objfranchise->select_franchise_details();

if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$id = $_POST['id'];
	$franchise = $_POST['franchise'];
	$objfranchise->Update_franchise_details($franchise,$id);
}

$viewimage = $objfranchise->select_franchise_images();
if(isset($_POST['update']) && $_POST['update'] != ''){
	$image = $_FILES['photo']['name'];
	if(isset($_FILES['photo']['name'])){
		$_array = array('jpg', 'jpeg', 'gif', 'bmp', 'png');
		$_extn = strtolower(substr($_FILES['photo']['name'], strpos($_FILES['photo']['name'], ".") + 1));
		if(in_array($_extn, $_array) && ($_FILES['photo']['size'] < (1024 * 1024))) {
			move_uploaded_file($_FILES['photo']['tmp_name'], "../images/" . $_FILES['photo']['name']);
			//object call the function...........//
			$_msg = "Your image is successsfully upload";
		}else{
			$_msg = "file extension is not valid or too large";
		}
		$objfranchise->update_franchise_images($image);
	} else {
		$_msg = "please select file first";
	}
}

include(ADVIEW.'franchise_details.php');

}else{
 header('location:index.php');
 exit;
}
?>