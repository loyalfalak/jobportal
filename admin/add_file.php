<?php 
# Common file to include config, path and starting PHP session 	
include('../include/common.php');

# Include Class file
include(MODEL .'file_Class.php');

# Creating Object variable of advertise class file	
$objfile = new files();
	
if(isset($_POST['submit']) && $_POST['submit'] != ''){
		$file = $_FILES['file']['name'];
		if(isset($_FILES['file']['name'])){
            $_array = array('jpg', 'jpeg', 'gif', 'bmp', 'png');
            $_extn = strtolower(substr($_FILES['photo']['name'], strpos($_FILES['file']['name'], ".") + 1));
            if(in_array($_extn, $_array) && ($_FILES['photo']['size'] < (1024 * 1024))) {
                move_uploaded_file($_FILES['file']['tmp_name'], "files/" . $_FILES['file']['name']);
                //object call the function...........//
                $_msg = "Your image is successsfully uploaded";
            }else{
                $_msg = "file extension is not valid or too large";
            }
             $objfile->insert_file($file);
        }else{
            $_msg = "please select file first";
        }
}

include(ADVIEW . 'add_file.php');
?>






