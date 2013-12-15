<?php 
# Common file to include config, path and starting PHP session
include('../include/common.php');

# Include Class file
include(MODEL .'medical_Class.php');
	
# Creating Object variable of class file
$objmedical = new medical();

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
		$title = $_POST['title']; 	
		$logo = $_FILES['logo']['name'];
		$image = $_FILES['image']['name'];
		if(isset($_FILES['logo']['name'])and($_FILES['image']['name'])){
		    $_array = array('jpg', 'jpeg', 'gif', 'bmp', 'png');
			$_extn = strtolower(substr($_FILES['logo']['name'], strpos($_FILES['logo']['name'], ".") + 1));
			$_extn1 = strtolower(substr($_FILES['image']['name'], strpos($_FILES['image']['name'], ".") + 1));
				   // if(in_array($_extn,$_extn1,$_array) && ($_FILES['logo']['size'] < (1024 * 1024)) && ($_FILES['image']['size'] < (1024 * 1024))) {
					move_uploaded_file($_FILES['logo']['tmp_name'], "images/" . $_FILES['logo']['name']);
					move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
					//object call the function...........//
					$_msg = "ur img is successsfully upload";
					   // } else {
					$_msg = "file extension is not valid or too large";
   					// }
     		$objmedical->insert_medical($logo,$title,$image);
		}else{
    		$_msg = "please select file first";
        }
}
include(ADVIEW . 'add_medical_service.php');
?>






