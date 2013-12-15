<?php 
# Common file to include config, path and starting PHP session	
include('../include/common.php');

# Include Class file
include(MODEL .'file_Class.php');

# Creating Object variable of files class file	
$objfile = new files();
	
	$id = $_GET['uid'];
	$view =	$objfile->select_file1($id);
	
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$files = $_FILES['file']['name'];
	if(isset($_FILES['file']['name'])){
		$_array = array('doc', 'docx', 'pdf');
		$_extn = strtolower(substr($_FILES['file']['name'], strpos($_FILES['file']['name'], ".") + 1));
		if(in_array($_extn, $_array) && ($_FILES['file']['size'] < (1024 * 1024))) {
			move_uploaded_file($_FILES['file']['tmp_name'], "files/" . $_FILES['file']['name']);
			//object call the function...........//
			$_msg = "Your image is successsfully uploaded";
		}else{
	    	$_msg = "file extension is not valid or too large";
	    }
	     $objfile->update_file($id,$files);
		}else{
	    $_msg = "please select file first";
   	}
}

include(ADVIEW . 'update_file.php');
?>






