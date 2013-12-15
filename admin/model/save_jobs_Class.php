<?php
class save_jobs{
	# Function for insert save_jobs data in save_jobs table
	public function insert_save_jobs($id,$sesid){
		$query = "INSERT INTO `save_jobs`(`pjid`, `uid`) VALUES('$id','$sesid')";
		$result = mysql_query($query);
		if($result){
			header("location:view_post_jobs_more_details.php?id=$id");
		}else{
			die('can not update'.mysql_error());
		}
	}
	
	# Function for insert save_jobs data in save_jobs table
	public function insert_save_jobs_outside($id,$sesid){
		$query = "INSERT INTO `save_jobs`(`pjid`, `uid`) VALUES('$id','$sesid')";
		$result = mysql_query($query);
		if($result){
			header("location:view_advanced_job_search_more_details.php?id=$id");
		}else{
			die('can not update'.mysql_error());
		}
	}
	
	# Function for select save_jobs data in save_jobs table
	public function select_save_jobs($id){
		$query = "SELECT * FROM `save_jobs` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for select save_jobs data in save_jobs table
	public function select_save_jobs_id($id){
		$query = "SELECT * FROM `save_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for select post_jobs and get title in post_jobs table
	public function get_title_save_jobs($id){
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
	public function get_experience_save_jobs($id){
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
	public function get_employees_required_save_jobs($id){
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
	public function get_jobs_expiry_save_jobs($id){
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
	public function get_gender_save_jobs($id){
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
	public function get_zipcode_save_jobs($id){
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
	public function get_job_type_save_jobs($id){
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
	public function get_salary_save_jobs($id){
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
	public function get_description_save_jobs($id){
		$query = "SELECT `description` FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['description'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	# Function for delete save_jobs in save_jobs table
	public function delete_save_jobs($id){
		$query = "DELETE FROM `save_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			header("location:view_save_jobs.php");			
		}else{
			die('can not delete'.mysql_error());
		}
	}
}
?>
