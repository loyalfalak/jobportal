<?php
class apply_now{
	# Function for insert applications data in applications table
	public function insert_apply_now($id,$sesid){
		$query = "INSERT INTO `applications`(`pjid`, `uid`) VALUES('$id','$sesid')";
		$result = mysql_query($query);
		if($result){
			header("location:view_post_jobs_more_details.php?id=$id");
		}else{
			die('can not update'.mysql_error());
		}
	}
	
	# Function for insert applications data in applications table
	public function insert_apply($id,$sesid){
		$query = "INSERT INTO `applications`(`pjid`, `uid`) VALUES('$id','$sesid')";
		$result = mysql_query($query);
		if($result){
			header("location:view_save_jobs_more_details.php?id=$id");
		}else{
			die('can not update'.mysql_error());
		}
	}
	
	# Function for insert applications data in applications table
	public function insert_apply_now_outside($id,$sesid){
		$query = "INSERT INTO `applications`(`pjid`, `uid`) VALUES('$id','$sesid')";
		$result = mysql_query($query);
		if($result){
			header("location:view_advanced_job_search_more_details.php?id=$id");
		}else{
			die('can not update'.mysql_error());
		}
	}
	
	# Function for select applications data in applications table
	public function select_apply_now($id){
		$query = "SELECT * FROM `applications` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select save_jobs data in save_jobs table
	public function select_apply_now_id($id){
		$query = "SELECT * FROM `applications` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select post_jobs and get title in post_jobs table
	public function get_title_apply_now($id){
		$query = "SELECT `title` FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['title'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select post_jobs and get experience in post_jobs table
	public function get_experience_apply_now($id){
		$query = "SELECT `experience` FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['experience'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select post_jobs and get emp_require in post_jobs table
	public function get_employees_required_apply_now($id){
		$query = "SELECT `emp_require` FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['emp_require'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for select post_jobs and get jobexpiry in post_jobs table
	public function get_jobs_expiry_apply_now($id){
		$query = "SELECT `jobexpiry` FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['jobexpiry'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for select post_jobs and get gender in post_jobs table
	public function get_gender_apply_now($id){
		$query = "SELECT `gender` FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['gender'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for select post_jobs and get zipcode in post_jobs table
	public function get_zipcode_apply_now($id){
		$query = "SELECT `zipcode` FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['zipcode'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for select post_jobs and get jobtype in post_jobs table
	public function get_job_type_apply_now($id){
		$query = "SELECT `jobtype` FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['jobtype'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for select post_jobs and get salary in post_jobs table
	public function get_salary_apply_now($id){
		$query = "SELECT `salary` FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['salary'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for select post_jobs and get description in post_jobs table
	public function get_description_apply_now($id){
		$query = "SELECT `description` FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['description'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select applications data in applications table
	public function select_apply_id($id){
		$query = "SELECT * FROM `applications` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select user and get user name in user table
	public function get_name($id){
		$query = "SELECT `full_name` FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['full_name'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select experience in resume table
	public function get_experience($id){
		$query = "SELECT `experience` FROM `resume` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['experience'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select course_name in education table
	public function get_course_name($id){
		$query = "SELECT `course_name` FROM `education` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['course_name'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select study_duration in education table
	public function get_study_duration($id){
		$query = "SELECT `study_duration` FROM `education` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['study_duration'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select gender in user table
	public function get_gender($id){
		$query = "SELECT `gender` FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['gender'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select date_of_birth in user table
	public function get_date_of_birth($id){
		$query = "SELECT `date_of_birth` FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['date_of_birth'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select email in user table
	public function get_email($id){
		$query = "SELECT `email` FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['email'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select password in user table
	public function get_password($id){
		$query = "SELECT `password` FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['password'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select phone in user table
	public function get_phone($id){
		$query = "SELECT `landline` FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['landline'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select phone in user table
	public function get_mobile($id){
		$query = "SELECT `mobile` FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['mobile'];
		}else{
			die('can not select'.mysql_error());
		}
	}

	# Function for select address in user table
	public function get_address($id){
		$query = "SELECT `address` FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['address'];
		}else{
			die('can not select'.mysql_error());
		}
	}

	# Function for select address in user table
	public function get_pincode($id){
		$query = "SELECT `pincode` FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['pincode'];
		}else{
			die('can not select'.mysql_error());
		}
	}

	# Function for select current_company in work_experience table
	public function get_current_company_name($id){
		$query = "SELECT `current_company` FROM `work_experience` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['current_company'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select current_designation in work_experience table
	public function get_current_designation($id){
		$query = "SELECT `current_designation` FROM `work_experience` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['current_designation'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select current_annual_salary in work_experience table
	public function get_current_annual_salary($id){
		$query = "SELECT `current_annual_salary` FROM `work_experience` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['current_annual_salary'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select job_profile in work_experience table
	public function get_job_profile($id){
		$query = "SELECT `job_profile` FROM `work_experience` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['job_profile'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for update_status in applications;
	public function under_process($id){
		$query = "UPDATE `applications` SET `status`=0 WHERE aid='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_employe_post_jobs.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update_status in applications;
	public function under_process_display($id){
		$query = "UPDATE `applications` SET `status`=0 WHERE aid='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_emp_post_jobs.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update_status in applications;
	public function update_status($id){
		$query = "UPDATE `applications` SET `status`=1 WHERE aid='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_employe_post_jobs.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update_status in applications;
	public function update_status_display($id){
		$query = "UPDATE `applications` SET `status`=1 WHERE aid='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_emp_post_jobs.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update_status in applications;
	public function interviewed_and_under_review($id){
		$query = "UPDATE `applications` SET `status`=2 WHERE aid='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_employe_post_jobs.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update_status in applications;
	public function interviewed_and_under_review_display($id){
		$query = "UPDATE `applications` SET `status`=2 WHERE aid='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_emp_post_jobs.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update_status in applications;
	public function interviewed_and_under_rejected($id){
		$query = "UPDATE `applications` SET `status`=3 WHERE aid='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_employe_post_jobs.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update_status in applications;
	public function interviewed_and_under_rejected_display($id){
		$query = "UPDATE `applications` SET `status`=3 WHERE aid='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_emp_post_jobs.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update_status in applications;
	public function reject_status($id){
		$query = "UPDATE `applications` SET `status`=4 WHERE aid='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_employe_post_jobs.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update_status in applications;
	public function reject_status_display($id){
		$query = "UPDATE `applications` SET `status`=4 WHERE aid='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:view_emp_post_jobs.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for delete application in application table
	public function delete_application_jobs($id){
		$query = "DELETE FROM `applications` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			header("location:view_apply_jobs.php");			
		}else{
			die('can not delete'.mysql_error());
		}
	}
}
?>
