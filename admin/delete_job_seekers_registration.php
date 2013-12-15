<?php
include('../include/common.php');
include(MODEL.'job_seekers_registration_Class.php');

 $objjob_seekers_registration = new job_seekers_registration();
 
 $id = $_GET['did'];
 $objjob_seekers_registration->job_seekers_registration_delete($id);
 
  
?>