<?php 
# Common file to include config, path and starting PHP session 
include('../include/common.php');

# Include Class file
include(MODEL .'advertise_Class.php');

if(!$_SESSION['admin']){
 	header('location:index.php');
 }
# Creating Object variable of advertise class file
$objadvertise = new advertise();
	
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
         $objadvertise->insert_advertise($image);
    }else{
        $_msg = "please select file first";
    }
}
include(ADVIEW . 'add_advertise.php');
?>






