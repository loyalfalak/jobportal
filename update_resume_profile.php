<?php
# Common file to include config, path and starting PHP session
include('include/common.php');

# Include Class file
include(MODEL .'resume_registration_Class.php');
include(MODEL .'industry_Class.php');
include(MODEL .'function_Class.php');
  
# Creating Object variable of registration class file
	$objresume = new resume();

	$id = $_SESSION['uid'];
	$viewdata = $objresume->select_resume_profile($id);
   
if(isset($_POST['submit']) && $_POST['submit'] != ''){
		$resume = $_FILES['file']['name'];
		if(isset($_FILES['file']['name'])){
			$_array = array('doc', 'docx', 'pdf');
			$_extn = strtolower(substr($_FILES['file']['name'], strpos($_FILES['file']['name'], ".") + 1));
				if(in_array($_extn, $_array) && ($_FILES['file']['size'] < (1024 * 1024))) {
					move_uploaded_file($_FILES['file']['tmp_name'], "admin/resfil/" . $_FILES['file']['name']);
					//object call the function...........//
					$_msg = "ur img is successsfully upload";
				}else{
					$_msg = "file extension is not valid or too large";
				}
			}
		$objresume->update_resume_profile($_POST,$resume,$id);
}
  
# Object of industry class to insert user industry data
	$objindustry = new industry();
	$viewdata3 = $objindustry->select_industry();	
	
# Object of job function
	$objfunction = new functionn();
	$viewdata4 = $objfunction->select_function();	  
  
include(VIEW.'update_resume_profile.php');
?>