<?php
class it_skills{
	
	# Function for select it_skills data in it_skills table
	public function select_it_skills($id){
    	$query ="SELECT * FROM `it_skills` WHERE `uid`='$id'";
		$result =mysql_query($query);                          		
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_errno());
		}                          	
    }
	
	# Function for update it_skills data in it_skills table  
	public function update_it_skills($data,$id){
    	$skills 	= $data['skills'];
    	$version	= $data['version'];
		$last_used 	= $data['last_used'];
		$year 		= $data['year'];
		$month 		= $data['month'];
		$experience = $year.'|'.$month;

	 	$query = "UPDATE `it_skills` SET `skills`='$skills', `version`='$version', `last_used`='$last_used', `experience`='$experience',`uid`='$id'";
		$result = mysql_query($query); 	         	
		if($result){
			header('location:update_it_skills.php');
		}else{
			die('can not update'.mysql_error());
		}
	}
}

?>