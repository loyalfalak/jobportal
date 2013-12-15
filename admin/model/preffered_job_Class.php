<?php
class preffered_job{
	
	# Function for inserting preferred_job data in preferred_job table
	public function insert_preffered_job($data,$uid){
		$lacs                    = $data['lacs'];
		$thosounds               = $data['thosounds'];
		$expected_annual_salary  = $lacs.'|'.$thosounds;
		$preffered_location      = $data['preffered_location'];
		$preffered_industry      = $data['preffered_industry'];
		$preferred_function      = $data['preferred_function'];
		$preffered_jobtype       = $data['preffered_jobtype'];
		$preference              = $data['preference'];
	 
		$query = "INSERT INTO `preferred_job`(`expected_annual_salary`,`preffered_location`,`preffered_industry`, `preferred_function`,`preffered_job_type`, `any_other_preference`, `uid`)VALUES('$expected_annual_salary',  
		 '$preffered_location','$preffered_industry','$preferred_function','$preffered_jobtype','$preference',$uid)";
		$result = mysql_query($query);  	 
		if($result){
		  	header('location:index.php');
		 }else{
		  	die('can not insert'.mysql_error());
		 }
	}
	# Function for select preferred_job data in preferred_job table
	public function select_preffered_job($id){
    	$query ="SELECT * FROM `preferred_job` WHERE `uid`='$id'";
		$result =mysql_query($query);                          		
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_errno());
		}                          	
    }
	
	# Function for update preferred_job data in preferred_job table
    public function update_preffered_job($data,$id){
		$lacs                  	 = $data['lacs'];
		$thosounds               = $data['thosounds'];
		$expected_annual_salary  = $lacs.'|'.$thosounds;
		$preffered_location      = $data['preffered_location'];
		$preffered_industry      = $data['preffered_industry'];
		$preferred_function      = $data['preferred_function'];
		$preffered_jobtype       = $data['preffered_jobtype'];
		$preference              = $data['preference'];
		
		$query = "UPDATE `preferred_job`
			   						   SET
		   								    `expected_annual_salary`='$expected_annual_salary',
		   								    `preffered_location`='$preffered_location',  
	                                        `preffered_industry`='$preffered_industry',
	                                        `preferred_function`='$preferred_function', 
	                                        `preffered_job_type`='$preffered_jobtype', 
	                                        `any_other_preference`='$preference'
										WHERE		 
									        `uid`='$id'";	
          $result = mysql_query($query); 	         	
		  if($result){
		  		header('location:update_preferred_job_profile.php?updatemsg=success');
		  }else{
		  	die('can not insert'.mysql_error());
		  }
    }
}

?>