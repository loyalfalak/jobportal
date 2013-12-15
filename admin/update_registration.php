<?php
include('../include/common.php');
include(MODEL.'registration_Class.php');
include(MODEL .'job_type_Class.php');
include(MODEL .'experience_Class.php');
include(MODEL .'industry_Class.php');
include(MODEL .'function_Class.php');
 
 	$id = $_GET['uid'];
	$objregistration = new registration();
	$viewdata = $objregistration->select_registration_id($id);

if(isset($_POST['submit'])){
		
			
		$email             = $_POST['email'];
		$password          = $_POST['password'];
		$fullname          = $_POST['fullname'];
		$mobile            = $_POST['mobile'];
		$landline          = $_POST['landline'];
		$location          = $_POST['location'];
		$address           = $_POST['address'];
		$resume_title      = $_POST['resume_title'];
		$jobtype           = $_POST['jobtype'];
		$experience        = $_POST['experience'];
		$industries        = $_POST['industries'];
		$function          = $_POST['function'];
		$key_skill         = $_POST['key_skill'];
		
		$resume = $_FILES['file']['name'];
	
		if (isset($_FILES['file']['name'])) {
            $_array = array('doc', 'docx', 'pdf');
            $_extn = strtolower(substr($_FILES['file']['name'], strpos($_FILES['file']['name'], ".") + 1));
            if (in_array($_extn, $_array) && ($_FILES['file']['size'] < (1024 * 1024))) {


            move_uploaded_file($_FILES['file']['tmp_name'], "images/" . $_FILES['file']['name']);

                //object call the function...........//
                $_msg = "ur img is successsfully upload";
            } else {
                $_msg = "file extension is not valid or too large";
            }
   

		 $objregistration->update_registration($id,$email,$password,$fullname,$mobile,$landline,
  		 $location,$address,$resume_title,$resume,$jobtype,$experience,$industries,$function,$key_skill);
 		     
        } else {
            $_msg = "please select file first";
        }
		
}else{
	  
	  $objjob_type = new job_type();
	  $viewdata1 = $objjob_type->select_job_type();
	  
	  $objexperience = new experience();
   	  $viewdata2 = $objexperience->select_experience();	  
		
	  $objindustry = new industry();
   	  $viewdata3 = $objindustry->select_industry();	
	  
	  $objfunction = new functionn();
	  $viewdata4 = $objfunction->select_function();	  
	
}

include(ADVIEW.'update_registration.php');

?>