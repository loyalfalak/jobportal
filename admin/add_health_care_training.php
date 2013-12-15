<?php 
	include('../include/common.php');
	include(MODEL .'health_care_Class.php');


	$objhealth_care = new health_care();
	
	if(isset($_POST['submit'])){
			
		$title = $_POST['title'];
		$subtitle = $_POST['sub_title'];
		
		$image = $_FILES['photo']['name'];
		if (isset($_FILES['photo']['name'])) {
            $_array = array('jpg', 'jpeg', 'gif', 'bmp', 'png');
            $_extn = strtolower(substr($_FILES['photo']['name'], strpos($_FILES['photo']['name'], ".") + 1));
            if (in_array($_extn, $_array) && ($_FILES['photo']['size'] < (1024 * 1024))) {


                move_uploaded_file($_FILES['photo']['tmp_name'], "images/" . $_FILES['photo']['name']);

                //object call the function...........//
                $_msg = "ur img is successsfully upload";
            } else {
                $_msg = "file extension is not valid or too large";
            }
             $objhealth_care->insert_health_care($title,$subtitle,$image);
        } else {
            $_msg = "please select file first";
        }
    
   
}

	include(ADVIEW . 'add_health_care_training.php');
	

		
?>






