<?php
class employe_registration{
	# Function for inserting company_details in company_details table
	public function insert_employe_registration($data){
		$email                = $data['email'];
		$password             = $data['password'];
		$contact_person       = $data['contact_person'];
		$designation          = $data['designation'];
		$mobile               = $data['mobile'];
		$company_type         = $data['company_type'];
		$company_name         = $data['company_name'];
		$industry             = $data['industry'];
		$landline             = $data['landline'];
		$country 			  = $data['country'];
		$location             = $data['location'];
		$address              = $data['address'];

	 	$query = "INSERT INTO `company_details`(`company_type`, `company_name`, `industry`, `landline`,`country`,`location`, `address`,
	          `email`, `password`, `contact_person`,`designation`,`mobile`) 
		  		VALUES ('$company_type','$company_name','$industry','$landline',
		  		'$country','$location','$address','$email','$password','$contact_person','$designation',
		  		'$mobile')";
		$result = mysql_query($query);
		if($result){
			header('location:index.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	# Function for update company_details in company_details table	
	public function update_employe_registration($data,$id){
		$contact_person       = $data['contact_person'];
		$designation          = $data['designation'];
		$mobile               = $data['mobile'];
		$company_type         = $data['company_type'];
		$company_name         = $data['company_name'];
		$industry             = $data['industry'];
		$landline             = $data['landline'];
		$country 			  = $data['country'];
		$location             = $data['location'];
		$address              = $data['address'];
		$query = "UPDATE `company_details` 
										SET  
										      `company_type`='$company_type',
										      `company_name`='$company_name',
									          `industry`='$industry',
								              `landline`='$landline',
					    			          `country`='$country',	
					    			          `location`='$location',
				    				          `address`='$address',
		                        	          `contact_person`='$contact_person',
		                            	      `designation`='$designation',
	    	                            	  `mobile`='$mobile'	
					               		WHERE 		
					               			  `company_id`='$id'";					  		   		
		$result = mysql_query($query);
		if($result){
			header('location:update_employe_profile.php?updatemsg=success');
		}else{
			die('can not update'.mysql_error());
		}
	}	 

	public function select_employe_profile(){
		$query = "SELECT * FROM `company_details`";
		$result = mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	public function select_employe_registration_details($id){
		$query = "SELECT * FROM `company_details` WHERE `company_id`='$id'";
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
	
	public function select_employe_registration($email,$password){
		$query = "SELECT `company_id` FROM `company_details` WHERE `email` = '$email' AND `password` = '$password'";
	    $_result = mysql_query($query);
		if($_result){
			$row = mysql_fetch_array($_result);
			return $row['company_id'];
		}else{
			die('can not select'.mysql_error());
		}
	}
}
?>