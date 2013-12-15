<?php
class post_jobs{
	
	# Function for inserting post_jobs data in post_jobs table
	public function insert_post_jobs($data,$id){
		$title 					= $data['title'];
		$industry 				= $data['industry'];
		$functional_area 		= $data['functional_area'];
		$exp1 					= $data['experience1'];
		$exp2 					= $data['experience2'];
		$experience 			= $exp1."|".$exp2;
		$emp_require 			= $data['emp_require'];
		$jobs_expiry 			= $data['jobs_expiry'];
		$gender 				= $data['gender'];
		$country 				= $data['country'];
		$location 				= $data['location'];
		$zipcode 				= $data['zipcode'];
		$job_type 				= $data['job_type'];
		$lacs 					= $data['lacs'];
		$thos 					= $data['thosounds'];
		$salary 				= $lacs."|".$thos;
		$keywords 				= $data['keywords'];
		$job_description 		= $data['job_description'];
			
		$query = "INSERT INTO `post_jobs`(`company_id`, `title`, `industry`, `function`, `experience`,`emp_require`,`jobexpiry`, `gender`, `country`, `location`, `zipcode`, `jobtype`, `salary`, `keywords`, `description`) VALUES
		('$id','$title','$industry','$functional_area','$experience','$emp_require','$jobs_expiry','$gender','$country','$location','$zipcode','$job_type','$salary','$keywords','$job_description')";
		
		$result = mysql_query($query);
		if($result){
			header("location:view_employe_post_jobs.php");
		}else{
			die('can not insert'.mysql_error());
		}
	}

	# Function for select post_jobs data in post_jobs table
	public function select_post_jobs(){
		$per_page = 10;
		$pages_query = mysql_query("SELECT count(`pjid`) FROM `post_jobs`");
		$pages = ceil(mysql_result($pages_query, 0) / $per_page);
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start = ($page-1) * $per_page;
			
		$query = "SELECT * FROM `post_jobs` WHERE `app_disapprove`= 1 LIMIT $start,$per_page";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select post_jobs data in post_jobs table
	public function select_emp_post_jobs(){
		$per_page = 10;
		$pages_query = mysql_query("SELECT count(`pjid`) FROM `post_jobs`");
		$pages = ceil(mysql_result($pages_query, 0) / $per_page);
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start = ($page-1) * $per_page;

		$query = "SELECT * FROM `post_jobs` ORDER BY `pjid` DESC LIMIT $start,$per_page";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select post_jobs data in post_jobs table
	public function select_post_jobs_id($id){
		$query = "SELECT * FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update post_jobs data in post_jobs table
	public function update_post_jobs($data,$id){
		$title 					= $data['title'];
		$industry 				= $data['industry'];
		$functional_area 		= $data['functional_area'];
		$exp1 					= $data['experience1'];
		$exp2 					= $data['experience2'];
		$experience 			= $exp1."|".$exp2;
		$emp_require 			= $data['emp_require'];
		$jobs_expiry 			= $data['jobs_expiry'];
		$gender 				= $data['gender'];
		$country 				= $data['country'];
		$location 				= $data['location'];
		$zipcode 				= $data['zipcode'];
		$job_type 				= $data['job_type'];
		$lacs 					= $data['lacs'];
		$thos 					= $data['thosounds'];
		$salary 				= $lacs."|".$thos;
		$keywords 				= $data['keywords'];
		$job_description 		= $data['job_description'];
		
		$query = "UPDATE `post_jobs` SET `title`='$title', `industry`='$industry', `function`='$functional_area', `experience`='$experience',`emp_require`='$emp_require',`jobexpiry`='$jobs_expiry',
		 `gender`='$gender', `country`='$country', `location`='$location', `zipcode`='$zipcode', `jobtype`='$job_type', `salary`='$salary', `keywords`='$keywords', `description`='$job_description'
		 WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			header("location:view_employe_post_jobs.php");
		}else{
			die('can not update'.mysql_error());
		}
		
	}
	
	# Function for update post_jobs data in post_jobs table
	public function update_emppost_jobs($data,$id){
		$title 					= $data['title'];
		$industry 				= $data['industry'];
		$functional_area 		= $data['functional_area'];
		$exp1 					= $data['experience1'];
		$exp2 					= $data['experience2'];
		$experience 			= $exp1."|".$exp2;
		$emp_require 			= $data['emp_require'];
		$jobs_expiry 			= $data['jobs_expiry'];
		$gender 				= $data['gender'];
		$country 				= $data['country'];
		$location 				= $data['location'];
		$zipcode 				= $data['zipcode'];
		$job_type 				= $data['job_type'];
		$lacs 					= $data['lacs'];
		$thos 					= $data['thosounds'];
		$salary 				= $lacs."|".$thos;
		$keywords 				= $data['keywords'];
		$job_description 		= $data['job_description'];
		
		$query = "UPDATE `post_jobs` SET `title`='$title', `industry`='$industry', `function`='$functional_area', `experience`='$experience',`emp_require`='$emp_require',`jobexpiry`='$jobs_expiry',
		 `gender`='$gender', `country`='$country', `location`='$location', `zipcode`='$zipcode', `jobtype`='$job_type', `salary`='$salary', `keywords`='$keywords', `description`='$job_description'
		 WHERE `pjid`='$id'";
		$result = mysql_query($query);
		if($result){
			header("location:view_emp_post_jobs.php");
		}else{
			die('can not update'.mysql_error());
		}
	}
	
	# Function for delete post_jobs data in post_jobs table
	public function delete_post_jobs($id){
		$query = "DELETE FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		
		$query = "DELETE FROM `save_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		
		$query = "DELETE FROM `applications` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		
		if($result){
			header("location:view_employe_post_jobs.php");
		}else{
			die('can not delete'.mysql_error());
		}
	}

	# Function for delete emppost_jobs data in post_jobs table
	public function delete_emppost_jobs($id){
		$query = "DELETE FROM `post_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		
		$query = "DELETE FROM `save_jobs` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		
		$query = "DELETE FROM `applications` WHERE `pjid`='$id'";
		$result = mysql_query($query);
		
		if($result){
			header("location:view_emp_post_jobs.php");
		}else{
			die('can not delete'.mysql_error());
		}
	}
	
	# Function for select company_name
	public function get_company_name($id){
		$query = "SELECT `company_name` FROM `company_details` WHERE `company_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['company_name'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select contact_person
	public function get_contact_person_name($id){
		$query = "SELECT `contact_person` FROM `company_details` WHERE `company_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['contact_person'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select mobile
	public function get_mobile_no($id){
		$query = "SELECT `mobile` FROM `company_details` WHERE `company_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['mobile'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for select landline
	public function get_landline($id){
		$query = "SELECT `landline` FROM `company_details` WHERE `company_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			echo $row['landline'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update app_disapprove
	public function createApprove($_id) {
        $_query = "UPDATE `post_jobs` SET `app_disapprove`= 1 WHERE `pjid`= $_id";
        $_result = mysql_query($_query);
        if($_result){
            header("location:view_emp_post_jobs.php");
        }else{
            die("Error" . mysql_error());
        }
    }
	
	# Function for update app_disapprove
    public function _Disapprove($_id) {
        $_query = "UPDATE `post_jobs` SET `app_disapprove`= 0 WHERE `pjid`= $_id";
        $_result = mysql_query($_query);
        if($_result){
            header("location:view_emp_post_jobs.php");
        }else{
            die("Error" . mysql_error());
        }
    }
	
}
?>