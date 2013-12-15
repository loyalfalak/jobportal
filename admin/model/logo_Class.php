<?php
class logo{
		
	public function insert_logo($image){
		$insert_query = "INSERT INTO `logo`(`logo`) values('$image')";
		$result = mysql_query($insert_query);
		if($result){
			header('location:view_logo.php');
		}else{
			die('can not insert'.mysql_errno());
		}
	}
	
	public function select_logo1(){
		$select_img = "SELECT `logo` FROM `logo`";
		$result = mysql_query($select_img);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_errno());
		}
	}
	
	public function update_logo($image){
		$update_img = "UPDATE `logo` SET `logo`='$image' WHERE `logo_id`= 9";
		$result = mysql_query($update_img);
		if($result){
			header('location:view_logo.php');
		}else{
			die('can not update'.mysql_errno());
		}
	}
	
	public function delete_logo($id){
		$delete_img = "DELETE FROM `logo` WHERE `logo_id`='$id'";
		$result = mysql_query($delete_img);
		if($result){
			header('location:view_logo.php');
		}else{
			die('can not delete'.mysql_errno());
		}
	}
}
?>