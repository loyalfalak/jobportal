<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'logo_Class.php');
	
# Creating Object variable of class file
$objlogo = new logo();
	
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	$image = $_FILES['photo']['name'];
	if(isset($_FILES['photo']['name'])){
        $_array = array('jpg', 'jpeg', 'gif', 'bmp', 'png');
        $_extn = strtolower(substr($_FILES['photo']['name'], strpos($_FILES['photo']['name'], ".") + 1));
        if(in_array($_extn, $_array) && ($_FILES['photo']['size'] < (1024 * 1024))) {
            move_uploaded_file($_FILES['photo']['tmp_name'], "images/" . $_FILES['photo']['name']);
            //object call the function...........//
            $_msg = "Your image is successsfully uploaded";
        }else{
            $_msg = "file extension is not valid or too large";
        }
         $objlogo->insert_logo($image);
   	}else{
        $_msg = "please select file first";
  	}
}
	include(ADVIEW . 'add_logo.php');
?>






