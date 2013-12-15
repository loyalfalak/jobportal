<?php
class admin{
	
	# Function for select admin username and password in admin_login table		
	public function selectlogin($username,$password){
		$query = "SELECT `admin_id` FROM `admin_login` WHERE `username` = '$username' AND `password` = '$password'";
		$_result = mysql_query($query);
		if($_result){
			$row = mysql_fetch_array($_result);
			return $row['admin_id'];
		}
	}

	# Function for update admin username and password in admin_login table
	public function update_admin_password($new_password,$id){
		$query = "UPDATE `admin_login` SET `password`='$new_password' WHERE `admin_id`='$id'";
		$result = mysql_query($query);
		if($result){
			header('location:login.php');
		}
	}
}
?>