<?php
class work_experience{
	
	# Function for inserting work_experience data in work_experience table
	public function insert_work_experience($data,$uid){
		$current_company         =  $_POST['current_company'];
		$current_designation     =  $_POST['current_designation'];
		$lacs                    =  $_POST['lacs'];
		$thosounds               =  $_POST['thosounds'];
		$current_annual_salary   =  $lacs .'|'.$thosounds;
		$month1                  =  $_POST['month1'];
		$year1                   =  $_POST['year1'];
		$duration_form           =  $month1.'|'.$year1;
		$month2                  =  $_POST['month2'];
		$year2                   =  $_POST['year2'];
		$duration_to             =  $month2.'|'.$year2;
		$job_profile             =  $_POST['job_profile'];

		$query = "INSERT INTO `work_experience`(`current_company`, `current_designation`, `current_annual_salary`, `duration_in_current`,`duration_in_current_company_to`, `job_profile`,`uid`)
				 VALUES('$current_company','$current_designation','$current_annual_salary','$duration_form','$duration_to','$job_profile',$uid)";
		
		$result  = mysql_query($query);
		if($result){
			header('location:preffered_job.php');
		}else{
			die('can not insert'.mysql_error());
		 }
	}
	
	# Function for select work_experience data in work_experience table
	public function select_work_experience_profile($id){
		
    	$query ="SELECT * FROM `work_experience` WHERE `uid`='$id'";
		$result =mysql_query($query);                          		
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_errno());
		}                          	
    }
	
	# Function for update work_experience data in work_experience table
	public function	update_work_experience_profile($data,$id){
		$current_company         =  $_POST['current_company'];
		$current_designation     =  $_POST['current_designation'];
		$lacs                    =  $_POST['lacs'];
		$thosounds               =  $_POST['thosounds'];
		$current_annual_salary   =  $lacs.'|'.$thosounds;
		$month1                  =  $_POST['month1'];
		$year1                   =  $_POST['year1'];
		$duration_form           =  $month1.'|'.$year1;
		$month2                  =  $_POST['month2'];
		$year2                   =  $_POST['year2'];
		$duration_to             =  $month2.'|'.$year2;
		$job_profile             =  $_POST['job_profile'];
		$query = "UPDATE `work_experience`
						                  SET    
						                        `current_company` ='$current_company',
						                        `current_designation` ='$current_designation',
						                        `current_annual_salary` ='$current_annual_salary',
						                        `duration_in_current` = '$duration_form',
						                        `duration_in_current_company_to`='$duration_to',
						                        `job_profile` = '$job_profile'
						                  WHERE 
						                         `uid`='$id'";     
		$result = mysql_query($query);
		if($result){
			header('location:update_experience_profile.php?updatemsg=success');
		 }else{
		 	die('can not update'.mysql_error());
		 }                                      		
	}							  
}


?>