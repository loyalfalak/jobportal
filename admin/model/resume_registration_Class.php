<?php
# Create Class
class resume{
		
	# Function for inserting resume data in resume table
	public function insert_resume_registration($data,$resume,$id){
		$resume_title      = $data['resume_title'];
		$jobtype           = $data['jobtype'];
		$experience        = $data['experience'];
		$industries        = $data['industries'];
		$function          = $data['function'];
		$key_skill         = $data['key_skill'];
		$notice_period     = $data['notice_period'];
		
		$query = "INSERT INTO `resume`(`resume_title`, `uploaded_resume`, `job_type`, `experience`, `industry`, `function`, `key_skills`,`notice_period`, `uid`) VALUES('$resume_title','$resume','$jobtype',
		'$experience','$industries','$function','$key_skill','$notice_period',$id)";
		$result = mysql_query($query);
		if($result){
			header('location:education_details.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	
	# Function for update resume data in resume table
	public function update_resume_profile($data,$resume,$id){
	    $resume_title      = $data['resume_title'];
		$jobtype           = $data['jobtype'];
		$experience        = $data['experience'];
		$industries        = $data['industries'];
		$function          = $data['function'];
		$key_skill         = $data['key_skill'];
		$notice_period     = $data['notice_period'];	
		
		$query = "UPDATE `resume` SET `resume_title`='$resume_title',`uploaded_resume`='$resume',`job_type`='$jobtype',`experience`='$experience',`industry`='$industries',`function`='$function',
		`key_skills`='$key_skill',`notice_period`='$notice_period' WHERE `uid`='$id'";			  
		$result = mysql_query($query);
		if($result){
			header("location:update_resume_profile.php?updatemsg=success");
		}else{
			die('can not update'.mysql_error());
		}	               
	}
	
	# Function for select resume data in resume table
	public function select_resume_profile($id){
		$query = "SELECT * FROM `resume` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
}

?>