<?php
class job_seeker{
	
    public function select_job_seeker_education(){
		$query = "SELECT * FROM `education`";
		$result =  mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
    }	  

	public function select_job_seeker_work_experience(){
		$query = "SELECT * FROM `work_experience`";
		$result =  mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
    }	  

	public function select_job_seeker_preferred_job(){
		$query = "SELECT * FROM `preferred_job`";
		$result =  mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
    }	  
	public function select_job_seeker_personal_details(){
		$query = "SELECT * FROM `user`";
		$result =  mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
    }
	public function select_job_seeker_languages_known(){
		$query = "SELECT * FROM `language`";
		$result =  mysql_query($query);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
    }			
}
?>