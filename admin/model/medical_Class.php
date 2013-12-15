<?php
# Create Class
class medical{
	
	# Insert Data update_medical Function	
	public function insert_medical($logo,$title,$image){
	    $insert_query = "INSERT INTO `medical_service`(`logo`, `title`, `image`) values('$logo','$title','$image')";
		$result = mysql_query($insert_query);
		if($result){
			header('location:view_medical_service.php');
		}else{
			die('can not insert'.mysql_error());
		}
	}
	
	# Select Dataselect_medical Function
	public function select_medical(){
		$select_img = "SELECT * FROM `medical_service`";
		$result = mysql_query($select_img);
		if ($result) {
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Select select_medical_id Function
	public function select_medical_id($id){
		$select_img = "SELECT * FROM `medical_service` WHERE `med_id`='$id'";
		$result = mysql_query($select_img);
		if($result){
			return $result;
		}else{
			die('can not select'.mysql_error());
		}
	}
	
	# Function for update medical Logo Function
	public function update_medical_image($id,$image){
		$update_img = "UPDATE `medical_service` SET `image`='$image' WHERE `med_id`='$id'";
		$result = mysql_query($update_img);
		if($result){
			header('location:view_medical_service.php');
		}else{
			die('can not update'.mysql_error());
		}
	}

	# Function for update medical image Function
	public function update_medical_logo($id,$logo){
		$update_img = "UPDATE `medical_service` SET `logo`='$logo' WHERE `med_id`='$id'";
		$result = mysql_query($update_img);
		if($result){
			header('location:view_medical_service.php');
		}else{
			die('can not update'.mysql_error());
		}
	}
	
	# Update Data update_medical Function
	public function update_medical_title($id,$title){
		$update_img = "UPDATE `medical_service` SET `title`='$title' WHERE `med_id`='$id'";
		$result = mysql_query($update_img);
		if($result){
			header('location:view_medical_service.php');
		}else{
			die('can not update'.mysql_error());
		}
	}
	
	# Delete Data delete_medical Function
	public function delete_medical($id){
		$delete_img = "DELETE FROM `medical_service` WHERE `med_id`='$id'";
		$result = mysql_query($delete_img);
		if($result){
			header('location:view_medical_service.php');
		}else{
			die('can not delete'.mysql_error());
		}
	}
}
?>