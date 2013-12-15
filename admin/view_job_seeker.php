<?php
  include('../include/common.php');
  include(MODEL.'job_seeker_Class.php');

 	$objjob_seeker = new job_seeker();
 	
 	 $viewdata = $objjob_seeker->select_job_seeker_education();
	 $viewdata1 = $objjob_seeker->select_job_seeker_work_experience();
 	 $viewdata2 = $objjob_seeker->select_job_seeker_preferred_job();
  	 $viewdata3 = $objjob_seeker->select_job_seeker_personal_details();
  	 $viewdata4 = $objjob_seeker->select_job_seeker_languages_known();
  
  include(ADVIEW .'view_job_seeker.php');



?>