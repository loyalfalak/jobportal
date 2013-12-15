<?php
class projects{
	
	# Function for select projects data in projects table
	public function select_projects($id){
    	$query ="SELECT * FROM `projects` WHERE `uid`='$id'";
		$result =mysql_query($query);                          		
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_errno());
		}                          	
    }
	
	# Function for update projects data in projects table  
	public function update_projects($data,$id){
    	$client 			= $data['client'];
    	$project_title		= $data['project_title'];
		$month1 			= $data['month1'];
		$year1 				= $data['year1'];
		$duration_from 		= $month1.'|'.$year1;
		$month2 			= $data['month2'];
		$year2 				= $data['year2'];
		$duration_to 		= $month2.'|'.$year2;
		$project_location 	= $data['project_location'];
		$employment_type 	= $data['employment_type'];
		$project_details 	= $data['project_details'];
		$role 				= $data['role'];
		$role_description 	= $data['role_description'];
		$team_size 			= $data['team_size'];
		$skills_used 		= $data['skills_used'];
		
	 	$query = "UPDATE `projects` SET `client`='$client', `project_title`='$project_title', `duration_from`='$duration_from', `duration_to`='$duration_to', `project_location`='$project_location', `employment_type`='$employment_type', `project_details`='$project_details', `role`='$role', `role_description`='$role_description', `team_size`='$team_size', `skills_used`='$skills_used', `uid`='$id'";
		
		$result = mysql_query($query); 	         	
		if($result){
			header('location:update_projects.php?updatemsg=success');
		}else{
			die('can not update'.mysql_error());
		}
	}

	# Function for insert projects data in projects table  
	public function insert_projects($data,$id){
    	$client 			= $data['client'];
    	$project_title		= $data['project_title'];
		$month1 			= $data['month1'];
		$year1 				= $data['year1'];
		$duration_from 		= $month1.'|'.$year1;
		$month2 			= $data['month2'];
		$year2 				= $data['year2'];
		$duration_to 		= $month2.'|'.$year2;
		$project_location 	= $data['project_location'];
		$employment_type 	= $data['employment_type'];
		$project_details 	= $data['project_details'];
		$role 				= $data['role'];
		$role_description 	= $data['role_description'];
		$team_size 			= $data['team_size'];
		$skills_used 		= $data['skills_used'];
		
	 	$query = "INSERT `projects`(`client`, `project_title`, `duration_from`, `duration_to`, `project_location`, `employment_type`, `project_details`, `role`, `role_description`, `team_size`, `skills_used`, `uid`)VALUES('$client','project_title','$duration_from','$duration_to','$project_location','$employment_type','$project_details','$role','$role_description','$team_size','$skills_used','$id')";
		
		$result = mysql_query($query); 	         	
		if($result){
			header('location:update_projects.php?insertmsg=success');
		}else{
			die('can not update'.mysql_error());
		}
	}

	# Function to check existing user in table
	public function check_user_id($id){
    	$query	= "SELECT * FROM `projects` WHERE `uid`='$id'";
		$result	= mysql_query($query);   
		                       		
		if(mysql_num_rows($result) > 0){
			return 'existing';
		}else{
			return 'new';
		}                          	
    }
}

?>