<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file 
include(MODEL.'registration_Class.php');
include(MODEL .'industry_Class.php');
include(MODEL .'function_Class.php');
include(MODEL .'resume_registration_Class.php');
include(MODEL .'country_Class.php');
include(MODEL .'location_Class.php');

# Creating Object variable of registration class file 
$objregistration = new registration();

# Creating Object variable of resume class file
$objresume = new resume();

if(isset($_POST['submit']) && $_POST['submit'] != ''){
# Code to insert user data in db
$objregistration->insert_user_registration($_POST);
}
if(isset($_POST['submit']) && $_POST['submit'] != ''){
	# Assignig last user insert id to Session variable	
	$id = $_SESSION['last_uid'];
	# Code to move resume file to server
	$resume = $_FILES['file']['name'];
	if(isset($_FILES['file']['name'])){
		$_array	= array('doc', 'docx', 'pdf');
	    $_extn	= strtolower(substr($_FILES['file']['name'], strpos($_FILES['file']['name'], ".") + 1));
		if(in_array($_extn, $_array) && ($_FILES['file']['size'] < (1024 * 1024))){
			//rename($_FILES['file']['name'], $_FILES['file']['name']['uid']);	
			move_uploaded_file($_FILES['file']['tmp_name'], "admin/resfil/" . $_FILES['file']['name']);
			$_msg = "Your image successsfully uploaded";
	    }else{
			$_msg = "File extension is not valid or too large";
		}
	# Code to insert user data in db
		$objresume->insert_resume_registration($_POST,$resume,$id);
	}else{
		$_msg = "please select file first";
	}
}
else{
	
# Object of industry class to insert user industry data
$objindustry = new industry();
$viewdata3 = $objindustry->select_industry();	

# Object of job function
$objfunction = new functionn();
$viewdata4 = $objfunction->select_function();	

# Creating Object variable of Country class file
$objCountry = new Country();
$viewdata5 = $objCountry->select_country();

# Creating Object variable of location class file
$objlocation = new location();
$viewdata6 = $objlocation->select_location();	 	 

}
include(VIEW.'user_registration.php');
?>