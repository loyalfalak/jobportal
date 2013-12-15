<?php
# Create Class
class registration{
	
	# Function for inserting user data in user table
	public function insert_user_registration($data){
		$email             = $data['email'];
		$password          = $data['password'];
		$fullname          = $data['fullname'];
		$mobile            = $data['mobile'];
		$landline          = $data['landline'];
		$country 		   = $data['country'];
		$location          = $data['location'];
		$address           = $data['address'];
		$pincode           = $data['pincode'];
			
		$query1 = "INSERT INTO `user`(`email`, `password`, `full_name`, `mobile`,`landline`,`country`,`location`, `address`, `pincode`)VALUES('$email','$password','$fullname','$mobile','$landline','$country','$location','$address','$pincode')";
		$result1 = mysql_query($query1);
		$id		 = mysql_insert_id();
		
		# Assignig last user insert id to Session variable
		$_SESSION['last_uid'] = $id; 
		
		if($result1){
			header('location:education_details.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	
	# Function for update user data in user table	
	public function update_job_seeker_registration($data,$id){
		$full_name               = $data['fullname'];
		$mobile                  = $data['mobile'];
		$landline                = $data['landline'];
		$country 		  		 = $data['country'];
		$location                = $data['location'];
		$address                 = $data['address'];
		$pincode                 = $data['pincode'];
		$day                     = $data['day'];
		$month                   = $data['month'];
		$year                    = $data['year'];
		$date_of_birth           = $day.'|'.$month.'|'.$year;
		$gender                  = $data['gender'];
		$marital_status          = $data['marital_status'];
		$category                = $data['category'];
		$physically_challenged   = $data['physically_challenged'];
		$description             = $data['description'];

		$query = "UPDATE `user` SET `full_name`='$full_name',`mobile`='$mobile',`landline`='$landline',`country`='$country',`location` ='$location',`address`='$address',`pincode`='$pincode',`date_of_birth`='$date_of_birth',
	`gender`='$gender',`marital_status`='$marital_status',`category`='$category',`physically_challenged`='$physically_challenged',`description`='$description'
	 WHERE `uid`='$id'";
			$result = mysql_query($query);
			if($result){
				header('location:update_job_seeker_profile.php?updatemsg=success');
			}else{
				die('can not update'.mysql_error());
			}
	}	 
	
	public function select_registration_id($id){
		$query = "SELECT * FROM `registration` WHERE `register_id`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}

	# Function for select user data in user table
	public function select_jobseeker_registration($id){
		$query = "SELECT * FROM `user` WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update user profile  data in user table
	public function update_personal_details($data,$uid){
		$day                    = $data['day'];
		$month                  = $data['month'];
		$year                   = $data['year'];
		$date_of_birth          = $day.'|'.$month.'|'.$year;
		$gender                 = $data['gender'];
		$marital_status         = $data['marital_status'];
		$work_permit            = $data['work_permit'];
		$physically_challenged  = $data['physically_challenged'];
		$category               = $data['category'];	 
		$description            = $data['description'];
		
		$query = "UPDATE `user` SET `date_of_birth`='$date_of_birth',`gender`='$gender',`marital_status`='$marital_status',
		`country`='$work_permit',`category`='$category',`physically_challenged`='$physically_challenged',`description`='$description'
		 WHERE `uid`='$uid'";
		
		$result = mysql_query($query);
		if($result){
		  	header('location:index.php');
	 	}else{
	  		die('can not insert'.mysql_error());
	  	}
	}
	
	# Function for select user data in user table
	public function select_job_seeker_profile(){
		$query = "SELECT * FROM `user`";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	public function get_industry_name($id){
		$query = "SELECT `industry` FROM `industry` WHERE `industry_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			return $row['industry'];
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	public function get_function_name($id){
		$query = "SELECT `function` FROM `function` WHERE `function_id`='$id'";
		$result = mysql_query($query);
		if($result){
			$row = mysql_fetch_array($result);
			return $row['function'];
		}else{
			die('can not select'.mysql_error());
		}
	}
		 
	public function select_jobseeker_login($email,$password){
		$query = "SELECT `uid` FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
	    $_result = mysql_query($query);
		if($_result){
			$row = mysql_fetch_array($_result);
			return $row['uid'];
		}else{
			die('can not select'.mysql_error());
		}
	}
}
?>