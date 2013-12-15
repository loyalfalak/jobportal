<?php
class job_seeker_change_password{
	# Function for job_seeker_change_password
	public function update_job_seeker_change_password($data,$id){
		$password 		= $data['new_password'];
		$query = "UPDATE `user` SET `password`='$password' WHERE `uid`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:job_seeker_change_password.php?updatemsg=success');
		}else{
			die('can not update'.mysql_error());
		}
	}
}

?>