<?php
class health_care{
		
	public function select_health_care(){
		$select_img = "SELECT * FROM `health_care`";
		$result = mysql_query($select_img);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}

	public function select_health_care_id(){
		$select_img = "SELECT * FROM `health_care` WHERE `health_id`=1";
		$result = mysql_query($select_img);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	public function update_health_care($title,$subtitle){
		$update_img = "UPDATE `health_care` SET `title`='$title',`sub_title`='$subtitle' WHERE `health_id`=1";
		$result = mysql_query($update_img);
		if($result){
			header('location:view_health_care_training.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	public function update_health_care_image($image){
		$update_img = "UPDATE `health_care` SET `image`='$image' WHERE `health_id`=1";
		$result = mysql_query($update_img);
		if($result){
			header('location:view_health_care_training.php');
		}else{
			die('can not select'.mysql_error());
		}
	}
}
?>