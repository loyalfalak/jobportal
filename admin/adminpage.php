<?php
# Common file to include config, path and starting PHP session
include('../include/common.php');
if(isset($_SESSION['admin'])){
	
# Include Class file
include(MODEL . 'adminpage_Class.php');

$id = $_GET['id'];

# Creating Object variable of class file   
$objadminpage = new adminpage();

$viewdata = $objadminpage->select_adminpage_content($id);

if(isset($_POST['submit'])){
	$objadminpage->update_adminpage_content($_POST);
}

$viewimage = $objadminpage->select_adminpage_images($id);
if(isset($_POST['update'])){
	$image = $_FILES['photo']['name'];
	if(isset($_FILES['photo']['name'])){
		$_array = array('jpg', 'jpeg', 'gif', 'bmp', 'png');
		$_extn = strtolower(substr($_FILES['photo']['name'], strpos($_FILES['photo']['name'], ".") + 1));
		if (in_array($_extn, $_array) && ($_FILES['photo']['size'] < (1024 * 1024))) {
			move_uploaded_file($_FILES['photo']['tmp_name'], "images/".$_FILES['photo']['name']);
			//object call the function...........//
			$_msg = "Your img is Successsfully Uploaded";
		} else {
			$_msg = "file extension is not valid or too large";
		}
		$objadminpage->update_adminpage_images($image,$id);
	}else{
		$_msg = "please select file first";
	}
}
include(ADVIEW.'adminpage.php');
}else{
 header('location:index.php');
 exit;
}
?>