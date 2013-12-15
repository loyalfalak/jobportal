<?php
class employe_change_password{
	# Function for employe change password
	public function update_employe_change_password($data,$id){
		$password 		= $data['new_password'];
		$query = "UPDATE `company_details` SET `password`='$password' WHERE `company_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:employe_change_password.php?updatemsg=success');
		}else{
			die('can not update'.mysql_error());
		}
	}
}

?>