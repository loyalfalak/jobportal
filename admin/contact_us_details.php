<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');

if(isset($_SESSION['admin'])){
	
# Include Class file	
include(MODEL . 'contact_us_Class.php');

# Creating Object variable of class file
$objcontact_us = new contact_us();

$viewdata = $objcontact_us->select_contact_us_details();

if(isset($_POST['submit']) && $_POST['submit']){
	$contact_us = $_POST['contact_us'];
	$objcontact_us->update_contact_us_details($contact_us);
}

$viewimage = $objcontact_us->select_contact_us_images();
if(isset($_POST['update'])){
	$image = $_FILES['photo']['name'];
	if(isset($_FILES['photo']['name'])){
		$_array = array('jpg', 'jpeg', 'gif', 'bmp', 'png');
		$_extn = strtolower(substr($_FILES['photo']['name'], strpos($_FILES['photo']['name'], ".") + 1));
		if (in_array($_extn, $_array) && ($_FILES['photo']['size'] < (1024 * 1024))) {
			move_uploaded_file($_FILES['photo']['tmp_name'], "../images/" . $_FILES['photo']['name']);
			//object call the function...........//
			$_msg = "Your image is successsfully uploaded";
		} else {
			$_msg = "file extension is not valid or too large";
		}
		$objcontact_us->update_contact_us_images($image);
	} else {
		$_msg = "please select file first";
	}
}

include(ADVIEW.'contact_us_details.php');
}else{
 header('location:index.php');
 exit;
}
?>